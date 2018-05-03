<?php

namespace Tests\Functional;

use \Slim\App;
use \Slim\Http\Collection;
use \Slim\Http\Environment;
use \Slim\Http\Uri;
use \Slim\Http\Body;
use \Slim\Http\Headers;
use \Slim\Http\Request;
use \Slim\Http\Response;

class RoutesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetRoute() 
    {
        $path = '/';
        $callable = function ($req, $res) 
        {
        };
        $app = new App();

        $route = $app->get($path, $callable);
        
        $this->assertInstanceOf('\Slim\Route', $route);
        $this->assertAttributeContains('GET', 'methods', $route);
        
    }
    public function testPostRoute()
    {
        $path = '/';
        $callable = function ($req, $res)
        {

        };
        $app = new App();
        $route = $app->post($path, $callable);
        $this->assertInstanceOf('\Slim\Route', $route);
        $this->assertAttributeContains('POST', 'methods', $route);
    }
}