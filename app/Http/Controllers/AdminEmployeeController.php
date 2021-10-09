<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
    public function index()
    {
        return view('admin.employee.index');
    }

    public function store()
    {
        return view('admin.employee.store');
    }
}
