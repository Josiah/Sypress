<?php namespace Sypress\WordPress;

use Sypress\ThemeInterface;

/**
 * Wordpress Theme Registry
 *
 * A tool used to work with the theme registry of WordPress.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class ThemeRegistry
{
    /**
     * Post Type Registry
     * 
     * @var PostTypeRegistry
     */
    protected $postTypeRegistry;

    public function __construct()
    {
        $this->postTypeRegistry = new PostTypeRegistry();
    }

    /**
     * Registers a Sypress theme within WordPress
     * 
     * @param ThemeInterface $theme Theme
     */
    public function register(ThemeInterface $theme)
    {
        foreach ($theme->getNavMenus() as $handle => $label) {
            register_nav_menu($handle, $label);
        }

        foreach ($theme->getContentTypes() as $contentType) {
            $this->postTypeRegistry->register($contentType);
        }
    }
}
