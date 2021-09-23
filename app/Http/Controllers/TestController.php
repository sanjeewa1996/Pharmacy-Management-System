<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function testApi()
    {
        $response = Http::get('http://localhost:5000/');
        $data = $response->json();
        error_log($response->object()->Age);
    }
}
