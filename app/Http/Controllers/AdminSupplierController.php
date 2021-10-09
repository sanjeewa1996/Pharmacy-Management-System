<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminSupplierController extends Controller
{
    public function index()
    {
        return view('admin.supplier.index');
    }

    public function store()
    {
        return view('admin.supplier.store');
    }

    public function verification($regNo)
    {
        $response = Http::get('http://localhost:8070/supplier/get/'.$regNo);
        $data = $response->object();
        // error_log($response->object()->regNo);

        return response()->json(['status' => 'success', 'data' => $data]);
    }
}
