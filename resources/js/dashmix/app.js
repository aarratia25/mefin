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
import 'sweetalert2/src/sweetalert2.scss'
import Swal from 'sweetalert2/dist/sweetalert2.js'

// App extends Template
export default class App extends Template {
    /*
     * Auto called when creating a new instance
     *
     */
    constructor() {
        super();
        this.configDarkTheme();
        this.viewData();
        this.sweetAlertDelete();
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

    viewData() {
        jQuery('.js-modal-edit').click(function () {
            let id = jQuery(this).attr("data-id");
            let endpoint = jQuery(this).attr("data-endpoint");
            let modal = jQuery(this).attr("data-modal");
            let idSubmit = jQuery(this).attr("data-submit");

            Helpers.updateData(idSubmit, endpoint, id, modal);

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
                    
                    jQuery(modal).modal('toggle');
                },
                error: function () { }
            });

        });
    }
}

// Once everything is loaded
jQuery(() => {
    // Create a new instance of App
    window.Dashmix = new App();
});
