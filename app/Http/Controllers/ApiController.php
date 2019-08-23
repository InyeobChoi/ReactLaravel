<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Create a new authentication controller instance
    */
    public function __construct()
    {
        $this -> beforeFilter('auth',['on'=>'post']);
    }

    protected $statusCode = Response::HTTP_OK;

    public function getStatusCode()
    {
        return $this-> statusCode;
    }

}
