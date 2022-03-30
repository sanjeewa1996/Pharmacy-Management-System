<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

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

        $product = Product::where('register_no', $regNo)->first();
        if(isset($product) && !null)
        {
            return response()->json(['status' => 'exit']);
        }

        try{
            $response = Http::get('http://localhost:8071/product/get/'.$regNo);
        }
        catch(Exception $e) {
            return response()->json(['status' => 'fail', 'error' => $e]);
        }
        $data = $response->object();
        // dd($data);

        if($data->Status == 'success')
        {
            return response()->json(['status' => 'success', 'data' => $data->products]);
        }
        elseif($data->Status == 'error')
        {
            return response()->json(['status' => 'invalid']);
        }
        else{
            return response()->json(['status' => 'fail']);
        }
    }

    public function save(Request $request)
    {
        // dd($request);

        $product = new Product();
        $old_reg = Product::where('register_no', $request->regNo)->first();
        if(isset($old_reg))
        {
            $message = array(
                'message' => 'Supplier Already Exit',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($message);
        }
        else{

            $product->register_no = $request->regNo;
        }

        // if
        $product->item_code = $request->itemNo;
        $product->product_name = $request->productName;
        $product->company_name = $request->companyName;
        $product->company_address = $request->companyAddress;
        $product->no_of_items = $request->noOfItems;

        $product->save();

        $message = array(
            'message' => 'Medicine Add Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.product.add')->with($message);
    }

    public function productData(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('id','register_no','item_code','product_name', 'company_name', 'company_address', 'no_of_items')->get();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="#' . $row->id . '" class="btn btn-info btn-sm btn-round" id="edit-product" data-toggle="tooltip" data-product-id="' . $row->id . '" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-round" id="delete-product" data-toggle="tooltip" data-product-id="'.$row->id.'" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
                    return $btn;
                })
                ->editColumn('register_no', function ($row) {
                    return ($row->register_no) ? ucwords($row->register_no) : '-';
                })
                // ->editColumn('item_code', function ($row) {
                //     return ($row->item_code) ? ucwords($row->item_code) : '-';
                // })
                ->editColumn('product_name', function ($row) {
                    return ($row->product_name) ? ucwords($row->product_name) : '-';
                })
                ->editColumn('company_name', function ($row) {
                    return ($row->company_name) ? ucwords($row->company_name) : '-';
                })
                ->editColumn('no_of_items', function ($row) {
                    return ($row->no_of_items) ? ucwords($row->no_of_items) : '-';
                })
                ->rawColumns(['register_no', 'product_name', 'company_name', 'no_of_items', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();
        // $message = array(
        //     'message' => 'Supplier Delete Successfully!',
        //     'alert-type' => 'success'
        // );
        return response()->json(['status' => 'success']);
    }

}
