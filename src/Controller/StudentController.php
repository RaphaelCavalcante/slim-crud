<?php

namespace App\Controller;

use App\Model\StudentModel;
use App\Mapper\StudentDataMapper;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class StudentController
{

    public static function store(
        ServerRequestInterface $request,
        ResponseInterface $response
    ) {        
        $result = StudentModel::create($request->getParsedBody());
        $status = 500;
        if($result != null) {
            $status = 200;
        }
        return $response->withRedirect('/', null);
    }

    public static function findAll(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ) {
        $result = StudentModel::all();
        $status = 404;
        if($result != null) {
            $status = 200;
        }
        return $response->withJson($result, $status);
    }
    public static function findById(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $result = StudentModel::find($args['id']);
        $status = 404;
        if($result != null) {
            $status = 200;
        }
        return $response->withJson($result, $status);
    }
    public static function update(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $result = StudentModel::find($args['id'])
            ->update($request->getParsedBody());
        $status = 404;
        if($result != null) {
            $status = 200;
        }
        return $response->withRedirect('/', null);
    }
    public static function delete(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ) {
        $result = StudentModel::find($args['id']);
        $status = 404;
        if($result != null){
            $result->delete();
            return $response->withRedirect('/', null);
        }
    }
}