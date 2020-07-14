<?php

namespace Njh\Tests;

use Njh\TwigHTMLHelpers\HTMLHelpers;
use Twig\Test\IntegrationTestCase;

class IntegrationTest extends IntegrationTestCase
{
    public function getExtensions()
    {
        return array(
            new HTMLHelpers()
        );
    }

    public function getFixturesDir()
    {
        return dirname(__FILE__).'/Fixtures/';
    }
}
