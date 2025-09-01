<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){

        $categories = \App\Models\Category::all();
        return view('Admin.category.index',compact('categories'));

    }
}
