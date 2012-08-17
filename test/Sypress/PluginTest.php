<?php namespace Sypress;

use PHPUnit_Framework_TestCase as TestCase;

class PluginTest extends TestCase
{
    public function testGetContentTypes()
    {
        $plugin = new PluginMock();

        $this->assertEquals([], $plugin->getContentTypes(), "->getContentTypes() returns empty array");
    }
}

class PluginMock extends Plugin {}
