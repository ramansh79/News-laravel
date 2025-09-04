<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){

        $categories = \App\Models\Category::all();
        return view('admin.category.index',compact('categories'));

    }
}
