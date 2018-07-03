<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "opt_settings";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'BCodes', 'redux-framework-demo' ),
        'page_title'           => __( 'Bcodes', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

// Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

// Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

// -> Bcodes - Isabella
        Redux::setSection($opt_name, array(
            'title'        =>__('General', 'reduxframework'),
            'id'           =>'general',
            'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
            'customizer_width' => '400px',
            'icon'             => 'el el-home'
        ));

        Redux::setSection($opt_name, array(
            'title'            => __( 'topbar', 'redux-framework-demo' ),
            'id'               => 'general-topbar',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => __( 'For Topbar'),
            'fields'           => array(
                array(
                    'title'    => __( 'Icon', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Icon image, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'ico',
                    'type'     => 'media',
                ),
                array(
                    'title'    => __( 'Logo', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Logo image, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'logo',
                    'type'     => 'media',
                ),
                array(
                    'title'    => __( 'Background Slider', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Top-bar field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'slide-top',
                    'type'     => 'slides',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Service', 'redux-framework-demo' ),
            'id'               => 'general-service',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => __( 'For Service We Provide Field'),
            'fields'           => array(
                array(
                    'title'    => __( 'Title on Field', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Title Field on We Service Provide, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'service-title',
                    'type'     => 'text',
                ),
                array(
                    'title'    => __( 'SubTitle on Field', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Title Field on We Service Provide, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'service-details',
                    'type'     => 'text',
                ),
                array(
                    'title'    => __( 'Service Content Title', 'redux-framework-demo' ),
                    'desc'     => __( 'Please enter the class font-awesome on url field :) u can see the class on https://fontawesome.com/icons/', 'redux-framework-demo' ),
                    'id'       => 'service-content',
                    'type'     => 'slides',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Our Project', 'redux-framework-demo' ),
            'id'               => 'general-project',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => __( 'For Project'),
            'fields'           => array(
                array(
                    'title'    => __( 'Title', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'project-title',
                    'type'     => 'text',
                ),
                array(
                    'title'    => __( 'Desc', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'project-desc',
                    'type'     => 'editor',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Testi Section', 'redux-framework-demo' ),
            'id'               => 'general-testi',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'title'    => __( 'BG testimonials Section', 'redux-framework-demo' ),
                    'id'       => 'bgtesti',
                    'type'     => 'media',
                ),
                array(
                    'title'    => __( 'Title', 'redux-framework-demo' ),
                    'id'       => 'title-testimonial',
                    'type'     => 'text',
                ),
                array(
                    'title'    => __( 'Description Testimonial', 'redux-framework-demo' ),
                    'id'       => 'desc-testimonial',
                    'type'     => 'editor',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Founder Team', 'redux-framework-demo' ),
            'id'               => 'general-founder',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'title'    => __( 'Title', 'redux-framework-demo' ),
                    'id'       => 'title-founder',
                    'type'     => 'text',
                ),
                array(
                    'title'    => __( 'Description Testimonial', 'redux-framework-demo' ),
                    'id'       => 'desc-founder',
                    'type'     => 'editor',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Partners', 'redux-framework-demo' ),
            'id'               => 'general-partner',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'title'    => __( 'Title', 'redux-framework-demo' ),
                    'id'       => 'title-partner',
                    'type'     => 'text',
                ),
                array(
                    'title'    => __( 'Description Partners', 'redux-framework-demo' ),
                    'id'       => 'desc-partner',
                    'type'     => 'editor',
                ),
                array(
                    'title'    => __( 'All Media', 'redux-framework-demo' ),
                    'id'       => 'gallery-partner',
                    'type'     => 'gallery',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Comment', 'redux-framework-demo' ),
            'id'               => 'general-comment',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'title'    => __( 'Title', 'redux-framework-demo' ),
                    'id'       => 'title-comment',
                    'type'     => 'text',
                ),
                array(
                    'title'    => __( 'Description Comment', 'redux-framework-demo' ),
                    'id'       => 'desc-comment',
                    'type'     => 'editor',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Maps', 'redux-framework-demo' ),
            'id'               => 'general-maps',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'title'    => __( 'Map', 'redux-framework-demo' ),
                    'id'       => 'adress',
                    'type'     => 'text',
                ),
            )
        ));

         Redux::setSection($opt_name, array(
            'title'        =>__('Contact', 'reduxframework'),
            'id'           =>'contact',
            'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
            'customizer_width' => '400px',
            'icon'             => 'el el-phone',
            'fields'           => array(
                array(
                    'title'    => __( 'Contact-field', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'contact',
                    'type'     => 'text',
                ),
            )
        ));
        Redux::setSection($opt_name, array(
            'title'            => __( 'Contact-Phone', 'redux-framework-demo' ),
            'id'               => 'contact-phone',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => __( 'For Topbar'),
            'fields'           => array(
                array(
                    'title'    => __( 'Contact field icon', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'icon-phone',
                    'type'     => 'media',
                ),
                array(
                    'title'    => __( 'Contact field text', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'text-phone',
                    'type'     => 'multi_text',
                ),
            )
        ));

        Redux::setSection($opt_name, array(
            'title'            => __( 'Contact-Time', 'redux-framework-demo' ),
            'id'               => 'contact-time',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => __( 'For Topbar'),
            'fields'           => array(
                array(
                    'title'    => __( 'Contact field icon', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'icon-time',
                    'type'     => 'media',
                ),
                array(
                    'title'    => __( 'Contact field text', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'text-time',
                    'type'     => 'multi_text',
                ),
            )
        ));

        Redux::setSection($opt_name, array(
            'title'            => __( 'Contact-Email', 'redux-framework-demo' ),
            'id'               => 'contact-email',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => __( 'For Topbar'),
            'fields'           => array(
                array(
                    'title'    => __( 'Contact field icon', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'icon-email',
                    'type'     => 'media',
                ),
                array(
                    'title'    => __( 'Contact field text', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'text-email',
                    'type'     => 'multi_text',
                ),
            )
        ));

        Redux::setSection($opt_name, array(
            'title'            => __( 'Contact-Address', 'redux-framework-demo' ),
            'id'               => 'contact-address',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => __( 'For Topbar'),
            'fields'           => array(
                array(
                    'title'    => __( 'Contact field icon', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'icon-address',
                    'type'     => 'media',
                ),
                array(
                    'title'    => __( 'Contact field text', 'redux-framework-demo' ),
                    'desc'     => __( 'This is the Contact Field, again good for additional info.', 'redux-framework-demo' ),
                    'id'       => 'text-address',
                    'type'     => 'multi_text',
                ),
            )
        ));
    /*
     * <--- END SECTIONS
     */
