<?php

namespace App\Views;

use App\Mapper\StudentDataMapper;
use App\Model\StudentModel;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class StudentView
{
    public static function index(
        ServerRequestInterface $request,
        ResponseInterface $response
    ) {
        global $app;
        $students = $app->getContainer()
            ->get('studentController')
            ->findAll($request, $response);
        return $app->getContainer()
            ->get('renderer')
            ->render(
                $response,
                'index.phtml',
                [
                    'students' => json_decode($students->getBody())
                ]
            );
    }
    
    public static function create(
        ServerRequestInterface $request,
        ResponseInterface $response
    ) {
        global $app;

        return $app->getContainer()
            ->get('renderer')
            ->render(
                $response,
                'create.phtml'
            );
    }

    public static function edit(
        ServerRequestInterface $request,
        ResponseInterface $response, $args
    ) {
        global $app;
        $student = $app->getContainer()
            ->get('studentController')
            ->findById($request, $response, $args);
        return $app->getContainer()
            ->get('renderer')
            ->render(
                $response,
                'edit.phtml',
                [
                    'student' => json_decode($student->getBody())
                ]
            );
    }

}