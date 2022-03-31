<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index() {
        // $no_of_suppliers = Supplier::get()->count();
        // $count_of_all_itms = Product::select('no_of_items')->get()->sum();
        $data = [
            'no_of_suppliers' => Supplier::get()->count(),
            'count_of_all_items' => Product::sum('no_of_items'),
            'medicines' => Product::get()->count()
        ];
        return view('admin.index')->with('data', $data);
    }
}
