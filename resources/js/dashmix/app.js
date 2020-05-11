/*
 *  Document   : app.js
 *  Author     : pixelcave
 *  Description: Main entry point
 *
 */

// Import global dependencies
import "./bootstrap";

// Import required modules
import Tools from "./modules/tools";
import Helpers from "./modules/helpers";
import Template from "./modules/template";

// Installed 
import 'sweetalert2/src/sweetalert2.scss'
import Swal from 'sweetalert2/dist/sweetalert2.js'

import 'datatables.net-bs4';
import 'datatables.net-bs4/css/dataTables.bootstrap4.min.css';

// App extends Template
export default class App extends Template {
    /*
     * Auto called when creating a new instance
     *
     */
    constructor() {
        super();
        this.configDarkTheme();
        this.runDataTable();
        this.createData();
        this.refresh();
    }

    /*
     *  Here you can override or extend any function you want from Template class
     *  if you would like to change/extend/remove the default functionality.
     *
     *  This way it will be easier for you to update the module files if a new update
     *  is released since all your changes will be in here overriding the original ones.
     *
     *  Let's have a look at the _uiInit() function, the one that runs the first time
     *  we create an instance of Template class or App class which extends it. This function
     *  inits all vital functionality but you can change it to fit your own needs.
     *
     */

     refresh(){
        var date = new Date();

        setTimeout(function() {
            setInterval(Dashmix.myFunction, 60000);
            Dashmix.myFunction();
        }, (60 - date.getSeconds()) * 1000);
     }

     myFunction(){
        jQuery('#users').DataTable().ajax.reload();
     }

     runDataTable() {
        // Override a few default classes
        jQuery.extend(jQuery.fn.dataTable.ext.classes, {
            sWrapper: "dataTables_wrapper dt-bootstrap4",
            sFilterInput:  "form-control",
            sLengthSelect: "form-control"
        });

        // Override a few defaults
        jQuery.extend(true, jQuery.fn.dataTable.defaults, {
            language: {
                lengthMenu: "_MENU_",
                search: "_INPUT_",
                searchPlaceholder: "Search..",
                info: "Page <strong>_PAGE_</strong> of <strong>_PAGES_</strong>",
                paginate: {
                    first: '<i class="fa fa-angle-double-left"></i>',
                    previous: '<i class="fa fa-angle-left"></i>',
                    next: '<i class="fa fa-angle-right"></i>',
                    last: '<i class="fa fa-angle-double-right"></i>'
                }
            }
        });

        jQuery('#users').DataTable({
            order: [[ 0, 'desc' ]],
            pagingType: "full_numbers",
            pageLength: 5,
            lengthMenu: [[5, 10, 20], [5, 10, 20]],
            autoWidth: false,
            serverSide: true,
            ajax: "/dashboard/roles",
            method:"get",
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'created_at'},
                {data: 'actions'},
            ]
        });
     }
    configDarkTheme() {
        let container = jQuery("#page-container");
        let toggle = jQuery("#sidebar-style-toggler");
        let themeName = toggle.attr("data-theme");
        let config = Helpers.getStorage("config");

        if (config.length > 0 || config.darkTheme) {
            toggle.click();
            Helpers.linkTheme(themeName);
        }

        toggle.click(function () {
            if (toggle.hasClass("fa fa-toggle-off")) {
                Helpers.storage({ darkTheme: true });
                Helpers.linkTheme(themeName);
            } else {
                jQuery("#css-theme").remove();
                Helpers.storage({ darkTheme: false });
            }
        });
    }
    sweetAlertDelete() {
        // Set default properties
        let toast = Swal.mixin({
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-success m-1',
                cancelButton: 'btn btn-danger m-1',
            }
        });

        // Init an example confirm dialog on button click
        jQuery('.js-swal-confirm').click(function () {
            let id = jQuery(this).attr("data-id");
            let title = jQuery(this).attr("data-title");
            let text = jQuery(this).attr("data-text");
            let confirmButtonText = jQuery(this).attr("data-confirm");
            let cancelButtonText = jQuery(this).attr("data-cancel");
            let endpoint = jQuery(this).attr("data-endpoint");
            let row = jQuery(this).attr("data-row");

            toast.fire({
                title: title,
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: confirmButtonText,
                cancelButtonText: cancelButtonText,
                html: false,
            }).then(result => {

                if (result.value) {
                    jQuery.ajax({
                        url: "/dashboard/" + endpoint + "/" + id,
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": window.csrfToken
                        },
                        success: function (response) {
                            jQuery(row + id).remove();
                        },
                        error: function () { }
                    });
                }
            });
            
            return false;
        });
    }

    viewData(id, endpoint, modal, idSubmit) {
        
        jQuery(modal).modal('show');

        // Helpers.updateData(idSubmit, endpoint, id, modal);

        let form = jQuery(idSubmit).find('input, select, textarea, checkbox, radio');
        let inputs = [];

        form.each(function(i, v){
            inputs.push(jQuery(v).attr('name'));
        });

        jQuery.ajax({
            url: "/dashboard/" + endpoint + "/" + id,
            method: "GET",
            success: function (data) {
                Helpers.showViewData(inputs, data);

                jQuery('#title-modal').text(id);

                
                // jQuery(modal).modal('toggle');
            },
            error: function () { }
        });

        return false;
    }

    createData(){

        jQuery('.add-new-data').click(function(){
            let idSubmit = jQuery(this).attr("data-submit");
            let endpoint = jQuery(this).attr("data-endpoint");
            let form = jQuery(idSubmit);

            jQuery(idSubmit).unbind('submit').submit(function(){
                jQuery.ajax({
                    url: "/dashboard/" + endpoint,
                    method: 'POST',
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': window.csrfToken
                    },
                    success: function (response) {
                        jQuery(form).trigger("reset");
                        jQuery('#users').DataTable().ajax.reload();
                    },
                    error: function (err) { 
                        if (err.status == 422) { 
                            
                            let resError = err.responseJSON.errors;
                            
                            jQuery.each(resError, function (i, error) {
                                jQuery('#error-fg-' + i).addClass('is-invalid');
                                jQuery('#error-message-' + i ).addClass('invalid-feedback animated fadeIn').text(error[0]);
                            });
                        }
                    }
                });
                
                return false;
            });
        });
    }
}

// Once everything is loaded
jQuery(() => {
    // Create a new instance of App
    window.Dashmix = new App();
});
