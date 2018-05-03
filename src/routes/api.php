<?php
    
use Slim\Http\Request;
use Slim\Http\Response;

// Api routes
$app->get('/students/{id}', \App\Controller\StudentController::class . '::findById');
$app->post('/students/create', \App\Controller\StudentController::class . '::store');
$app->put('/students/edit/{id}', \App\Controller\StudentController::class . '::update');
$app->delete('/students/delete/{id}', \App\Controller\StudentController::class . '::delete');