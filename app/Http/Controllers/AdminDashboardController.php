<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index() {
        $no_of_suppliers = Supplier::get()->count();
        // dd($no_of_suppliers);
        return view('admin.index')->with('no_of_suppliers', $no_of_suppliers);
    }
}
