<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function verification($regNo)
    {
        $product = Http::get('http://localhost:8071/product/get/');
        // dd($product);
        $data = $product->object();
        return response()->json(['status' => 'success', 'data' => $data]);
    }

}
