<?php namespace Sypress\WordPress;

use PHPUnit_Framework_TestCase as TestCase;

class PostTypeRegistryTest extends TestCase
{
    public function testOptions()
    {
        $registry = new PostTypeRegistry();
        $contentType = $this->getMock("Sypress\\ContentType\\ContentTypeInterface");

        $expected = [];

        $this->assertEquals($expected, $registry->options($contentType));
    }
}
