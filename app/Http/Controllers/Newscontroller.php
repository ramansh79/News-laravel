<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class Newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('News.index',compact('news'));
    }
    public function pindex()
    {
        // $news = News::where('author_name', 'raman shrestha')->get();
        $news = News::all();
        return view('News.index', compact('news'));
    }







    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('News.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('new_image')){

            $name= $file->getClientOriginalName();
            $file->move('images',$name);
            $input['new_image']=$name;
        }
        News::create($input);

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pot = News::findorfail($id);
        return view('News.show',compact('pot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pot = News::findorfail($id);
        return view('News.edit',compact('pot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pot = News::findorfail($id);
        $pot->update($request->all());
        return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
