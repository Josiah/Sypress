<?php namespace Sypress;

/**
 * Plugin Interface
 *
 * The implementation signature required by Sypress plugins.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface PluginInterface
{
    /**
     * Gets a list of content types which are provided by this plugin
     * 
     * @return Sypress\ContentType\ContentTypeInterface[]
     */
    function getContentTypes();
}
