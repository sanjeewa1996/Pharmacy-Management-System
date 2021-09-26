<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = Admin::find(1);
        return view('admin.profile-edit')->with('user', $user);
    }

    public function edit(Request $request)
    {
        $user = Admin::find(1);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('upload/admin_image/'.$user->profile_photo_path));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $fileName);
            $user['profile_photo_path'] = $fileName;
        }

        $user->save();

        $message = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($message);
    }
}
