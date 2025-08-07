<?php

use App\Models\News;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Http\Controllers\Ucontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Newscontroller;
use App\Http\Middleware\Validu1;


Route::get('/', function () {
    return view('welcome');
});

// inserting into news through category.

Route::get('/insert',function(){
    $news = Category::create(['category_name'=>'mobile','category_status'=>'1','category_order'=>'2']);
    $news->news()->save(new News(['category_id'=>'1',
        'news_title'=>'lunched',
        'news_short_description'=>'brand new iphone lunched',
        'news_long_description'=>'iphone 16 pro max 256 Gb lunched in nepal in 15 dec.',
        'new_image'=>'photo',
        'news_status'=>'1',
        'views_count'=>'100',
        'author_name'=>'raman'
    ]));

});

Route::get('insert1',function(){
    $comment = Comment::create(['comment_user_name'=>'batman','comment_user_image'=>'dd','comments'=>'this is comment']);
});

// attaching news with comment in many to many realtionship
Route::get('insert2',function(){
    $news=News::find(1);
    $news->comment()->attach(1,[
        'disabled_by'=>'user',
        'comment_status'=>'0'
    ]);

});


//inserting usaer with comment.
Route::get('insert3',function(){
    $user=User::create([
        'user_name'=>'batman',
        'user_email'=>'b@mail.com',
        'password'=>'1234',
        'user_gender'=>'male',
        'user_first_name'=>'bat',
        'user_last_name'=>'man',
        'user_role'=>'admin',
    ]);
    $user->comments()->save(new Comment([
        'comment_user_name'=>'batman',
        'comment_user_image'=>'img',
        'comments'=>'this is user',
    ]));
});

//---------------column not folund 'category_id'----------------------------//

// Route::get('/my2',function(){
//     $pot = News::where('id','1')->first();
//     foreach($pot->newscomment as $pots){
//         dump($pots->disabled_by);
//     }
// });











// News controller routes

Route::resource('newslaravel/news','\App\Http\Controllers\Newscontroller');
Route::get('newslaravel/news/smartphones',[Newscontroller::class,'pindex'])->name('news.pindex');



// User controller routes

Route::view('/newslaravel/register','Ucon.register')->name('register');
Route::post('registers',[Ucontroller::class,'registerSave'])->name('registersave');

Route::view('/newslaravel/login','Ucon.login')->name('login');
Route::post('loginmatch',[Ucontroller::class,'loginmatch'])->name('loginmatch');

Route::get('/newslaravel/home',[Ucontroller::class,'homeMain'])
    ->name('homemain')
    ->middleware('IsValid1:admin');

// Route::get('/index',[Newscontroller::class,'index'])->name('news');

Route::view('/newslaravel','Ucon.guest')->name('guestPage');
Route::get('logout',[Ucontroller::class,'logout'])->name('logout');


// Admin controller routes

Route::resource('/newslaravel/admin','\App\Http\Controllers\Admincontroller');


Route::view('/dd','Home.dd');