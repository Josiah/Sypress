<?php namespace Sypress;

/**
 * Plugin
 *
 * Base class for plugin implementations.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
abstract class Plugin implements PluginInterface
{
    public function getContentTypes()
    {
        return [];
    }
}
