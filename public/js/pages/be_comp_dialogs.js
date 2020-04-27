/*
 *  Document   : be_comp_dialogs.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Dialogs Page
 */

// SweetAlert2, for more examples you can check out https://github.com/sweetalert2/sweetalert2
class pageDialogs {
    /*
     * SweetAlert2 demo functionality
     *
     */
    static sweetAlert2() {
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
                    Dashmix.deleteData(id, '#i-user', 'users');
                }

            });

            return false;
        });
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.sweetAlert2();
    }
}

// Initialize when page loads
jQuery(() => { pageDialogs.init(); });
