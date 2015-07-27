<?php

namespace WeLoveKpop\MostPlayed;

/**
 * Hooks!
 */
class Plugin
{
    /**
     * Initialise the plugin.
     *
     * @return void
     */
    public static function init()
    {
        add_shortcode(
            'sekshi-most-played',
            'WeLoveKpop\MostPlayed\MostPlayedPage::shortcode'
        );
        add_shortcode(
            'sekshi-history',
            'WeLoveKpop\MostPlayed\HistoryPage::shortcode'
        );
    }


    /**
     * "menu" hook, adds the options page.
     */
    public static function menu()
    {
        add_menu_page(
            'SekshiBot',
            'SekshiBot',
            'activate_plugins',
            'sekshibot',
            'WeLoveKpop\MostPlayed\showOptionsPage',
            plugins_url('../css/icons/sekshi.png', __FILE__)
        );
    }

    /**
     * Registers settings for the settings page.
     */
    public static function registerSettings()
    {
        register_setting('wlkmp_options', 'wlkmp_mongo_uri');
        register_setting('wlkmp_options', 'wlkmp_mongo_name');
    }
}
