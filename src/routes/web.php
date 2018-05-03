<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Web routes

// Student view
$app->get('/', \App\Views\StudentView::class . '::index');
$app->get('/students/create', \App\Views\StudentView::class . '::create');
$app->get('/students/edit/{id}', \App\Views\StudentView::class . '::edit');