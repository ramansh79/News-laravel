<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){

        $users = \App\Models\User::paginate(10);
        return view('admin.user.index',compact('users'));

    }
    public function edit($id){
        $users = User::findorfail($id);
        return view('admin.user.edit',compact('users')); 
    }

    public function update(Request $request, String $id){

        $users = User::findorfail($request->$id);
        $input = $request->all();
        $users->update($input);
        return redirect('/newslaravel/admin/user');
    }
}
