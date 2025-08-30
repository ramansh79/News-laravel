<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Category::all();
        return view('Category.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = $request->validate([
            'category_name'=>'required|min:3',
            'category_order'=>'required|integer',
            'category_status'=>'required',

        ]);
        Category::create($category);
        return redirect('/newslaravel/category');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = Category::findorfail($id);
        return view('category.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $items = Category::findorfail($id);
        $items->update($request->validate([
            'category_name'=>"required|min:3",
            'category_status'=>"required",
            'category_order'=>"required|integer",
        ]));
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Category::findorfail($id);
        $item->delete();
        return redirect('/newslaravel/category');
    }
}
