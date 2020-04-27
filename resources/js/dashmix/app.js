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

// App extends Template
export default class App extends Template {
    /*
     * Auto called when creating a new instance
     *
     */
    constructor() {
        super();
        this.configDarkTheme();
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

    deleteData(elementId, trID, endpoint) {
        jQuery.ajax({
            url: "/dashboard/" + endpoint + "/" + elementId,
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": window.csrfToken
            },
            success: function (response) {
                jQuery(trID + elementId).remove();
            },
            error: function () { }
        });
    }
}

// Once everything is loaded
jQuery(() => {
    // Create a new instance of App
    window.Dashmix = new App();
});
