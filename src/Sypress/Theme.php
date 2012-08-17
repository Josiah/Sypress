<?php namespace Sypress;

/**
 * Sypress Theme
 *
 * Base class for Sypress theme implementations.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
abstract class Theme extends Plugin implements ThemeInterface
{
    public function getNavMenus()
    {
        return [];
    }
}
