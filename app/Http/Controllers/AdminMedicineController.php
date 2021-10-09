<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMedicineController extends Controller
{
    public function index()
    {
        return view('admin.medicine.index');
    }

    public function store()
    {
        return view('admin.medicine.store');
    }

}
