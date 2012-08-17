<?php namespace Sypress;

use PHPUnit_Framework_TestCase as TestCase;

class ThemeTest extends TestCase
{
    public function testGetContentTypes()
    {
        $theme = new ThemeMock();

        $this->assertEquals([], $theme->getNavMenus(), "->getContentTypes() returns empty array");
    }
}

class ThemeMock extends Theme {}
