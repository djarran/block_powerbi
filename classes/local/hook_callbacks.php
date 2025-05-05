<?php

namespace block_powerbi\local;

use core\hook\output\before_footer_html_generation;

class hook_callbacks {
    /**
     * Bootstrap the course assist UI.
     *
     * @param before_footer_html_generation $hook
     */
    public static function before_footer_html_generation(before_footer_html_generation $hook): void {
        // Removing the semicolon should cause an error on every page navigation, but it isn't.
        return;
        // Will most likely need to use `add_html` method instead of returning a string, but
        // want to get this hook working at the very least
        /*return '<script src="'.$CFG->wwwroot.'/blocks/powerbi/js/powerbi.js"></script>';*/
    }
}
