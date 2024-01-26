<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return json_encode([
            'message' => 'hello world'
        ]);
    }
}
