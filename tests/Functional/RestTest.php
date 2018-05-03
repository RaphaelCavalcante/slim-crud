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

class RestTest extends \PHPUnit_Framework_TestCase
{
    private $CREATE_URI='';
    private $POST_URI='';
    private $PUT_URI='';
    private $DELETE_URI='';
    
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
}