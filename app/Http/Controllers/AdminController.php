<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('Admin.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        if($file= $request->file('new_image')){
            
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $input['new_image']=$name;
        }
        News::create($input);
        
        return redirect('/newslaravel/admin');
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
        $pot = News::findorfail($id);
        return view('Admin.edit',compact('pot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        if($file = $request->file('new_image')){

            $name = $file->getClientOriginalName();
            $file->move('images',$name);
            $input['new_image']=$name;

        }
        $final = News::findorfail($id);
        $final->update($input);
        return redirect('/newslaravel/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
