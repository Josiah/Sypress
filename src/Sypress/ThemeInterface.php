<?php namespace Sypress;

/**
 * Sypress Theme Interface
 *
 * The implementation signature implemented by Sypress themes.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface ThemeInterface extends PluginInterface
{
    /**
     * Gets the Navigation Menus supported by this theme
     *
     * This method should return an array containing the menu keys as array keys
     * an their translations as values. Translations are used in the
     * administration.
     * 
     * @return array
     */
    function getNavMenus();
}
