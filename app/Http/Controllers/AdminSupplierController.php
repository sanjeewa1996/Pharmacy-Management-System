<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Yajra\DataTables\DataTables;
use Exception;
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
        $supplier = Supplier::where('reg_number', $regNo)->first();
        if(isset($supplier))
        {
            return response()->json(['status' => 'exit']);
        }

        try{
            $response = Http::get('http://localhost:8070/supplier/get/'.$regNo);
        }
        catch(Exception $e) {
            return response()->json(['status' => 'fail', 'error' => $e]);
        }
        $data = $response->object();

        if($data->Status == true)
        {
            return response()->json(['status' => 'success', 'data' => $data->supplier]);
        }
        elseif($data->Status == false)
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

        $supplier = new Supplier();
        $old_reg = Supplier::where('reg_number', $request->regNo)->first();
        if(isset($old_reg))
        {
            $message = array(
                'message' => 'Supplier Already Exit',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($message);
        }
        else{

            $supplier->reg_number = $request->regNo;
        }

        // if
        $supplier->nic = $request->nic;
        $supplier->first_name = $request->fname;
        $supplier->last_name = $request->lname;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;

        $supplier->save();

        $message = array(
            'message' => 'Supplier Add Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.supplier.add')->with($message);
    }

    public function supplierData(Request $request)
    {
        if ($request->ajax()) {
            $data = Supplier::select('id','reg_number','nic','first_name', 'last_name', 'email', 'phone')->get();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="#' . $row->id . '" class="btn btn-info btn-sm btn-round" id="edit-supplier" data-toggle="tooltip" data-supplier-id="' . $row->id . '" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-round" id="delete-supplier" data-toggle="tooltip" data-supplier-id="'.$row->id.'" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
                    return $btn;
                })
                ->editColumn('reg_number', function ($row) {
                    return ($row->reg_number) ? ucwords($row->reg_number) : '-';
                })
                ->editColumn('nic', function ($row) {
                    return ($row->nic) ? ucwords($row->nic) : '-';
                })
                ->editColumn('first_name', function ($row) {
                    return ($row->first_name) ? ucwords($row->first_name) : '-';
                })
                ->editColumn('last_name', function ($row) {
                    return ($row->last_name) ? ucwords($row->last_name) : '-';
                })
                ->editColumn('email', function ($row) {
                    return ($row->email) ? ucwords($row->email) : '-';
                })
                ->rawColumns(['reg_number', 'nic', 'first_name', 'last_name', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function deleteSupplier($id) {
        $supplier = Supplier::find($id);
        $supplier->delete();
        // $message = array(
        //     'message' => 'Supplier Delete Successfully!',
        //     'alert-type' => 'success'
        // );
        return response()->json(['status' => 'success']);
    }
}
