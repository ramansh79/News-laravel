<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Comment;

class Newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::Paginate(8);
        return view('news.bindex',compact('news'));
    }
    
    public function pindex()
    {
        // $news = News::where('author_name', 'raman shrestha')->get();
        $news = News::all();
         dd($news);
        return view('news.index',compact('news'));
       
    }
    
    /* Search News */
    public function sindex(Request $request)
    {
        $search = $request->input('search');
        $news = News::where('unique_news_id',"like", "%$search%")->get();
        
        return view('news.index',compact('news'));
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

    public function cStore(Request $request, string $id){
        $news = News::findorfail($id);
        $comment = $request->validate([
            'comments' => 'required|string|max:255',
        ]);
        $news->comment()->create([
            'comment_user_name' => auth()->user()->user_name,
            'comment_user_image' => auth()->user()->user_image,
            'comments' => $comment['comments'],
            'user_unique_id' =>(int) auth()->user()->unique_user_id,
        ]);
        return redirect()->route('news.show', $id);
    } 

    /* for comment */


    

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $news = News::findorfail($id);
        $comments = $news->comment;
        $news->increment('views_count');

        return view('news.show',compact('news', 'comments'));
               
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
