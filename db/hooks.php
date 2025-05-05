<?php

defined('MOODLE_INTERNAL') || die();

// All callbacks should be visible on the admin/hooks.php page in UI, but this plugin's callback isn't
// when using the below definitions

$callbacks = [
    [
        'hook' => \core\hook\output\before_footer_html_generation::class,
        'callback' => [\block_powerbi\local\hook_callbacks::class . 'before_footer_html_generation'],

        // These are all the callbacks that are valid and used in the core codebase, but aren't working
        // for this plugin:
        /*'callback' => '\block_powerbi\local\hook_callbacks::before_footer_html_generation',*/
        /*'callback' => \block_powerbi\local\hook_callbacks::class . '::before_footer_html_generation', */
        /*'callback' => [\block_powerbi\local\hook_callbacks::class,  'before_footer_html_generation'],*/

        // And it's definitely checking the validity of this hook callback
        // i.e try this one and it will come up with an error when upgrading
        /*'callback' => [\block_powerbi\local\hook_callbacks::class . 'before_footer_html_generation'],*/

        'priority' => 0,
    ],
];
