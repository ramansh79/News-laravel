<?php

use Illuminate\Support\Facades\Route;

use App\Models\News;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCategoryController;

use App\Http\Controllers\Ucontroller;
use App\Http\Controllers\Newscontroller;
use App\Http\Controllers\Categorycontroller;

use App\Http\Controllers\Samples\EmailController;
use App\Http\Middleware\Validu1;



Route::get('/test', fn() => 'working');

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









/*------------------ Category controller routes ------------------*/

Route::resource('/newslaravel/category','\App\Http\Controllers\Categorycontroller');






/*------------------- News controller routes -------------------*/
Route::resource('/newslaravel/news','\App\Http\Controllers\Newscontroller');

Route::get('/newslaravel/news/{id}/comment',[Newscontroller::class,'cStore'])->name('news.cStore');
Route::post('/newslaravel/news/search',[Newscontroller::class,'sindex'])->name('news.sindex');
Route::post('/newslaravel/news/checkusername',[Newscontroller::class,'checkUsername'])->name('news.checkusername');

Route::get('/newslaravel/news/smartphones',[Newscontroller::class,'pindex'])->name('news.pindex');




Route::resource('/newslaravel/category','\App\Http\Controllers\Categorycontroller');







//--------------------User controller routes---------------------------//




Route::view('/newslaravel/register','Ucon.register')->name('register');
Route::post('registers',[Ucontroller::class,'registerSave'])->name('registersave');

Route::view('/newslaravel/login','Ucon.login')->name('login');
Route::post('loginmatch',[Ucontroller::class,'loginmatch'])->name('loginmatch');


//---the upper route is commented cause it is used in group middleware--//

// Route::get('/newslaravel/home',[Ucontroller::class,'homeMain'])
//     ->name('homemain')
//     ->middleware('IsValid1:admin');

Route::middleware(['IsValid1:admin'])->group(function(){
    Route::get('/newslaravel/home',[Ucontroller::class,'homeMain'])->name('homemain');
});







Route::view('/newslaravel','Ucon.guest')->name('guestPage');
Route::get('logout',[Ucontroller::class,'logout'])->name('logout');









//---------------------Revised-------------------------------------------//
/*-
 Routes for each component of admin pannel  

-*/


Route::view('/s','admin.main')->name('admin.main');



Route::get('/newslaravel/admin/user',[AdminUserController::class,'index']);
Route::get('/newslaravel/admin/user/{user}/edit',[AdminUserController::class,'edit'])->name('admin.user.edit');
Route::put('/newslaravel/admin/user/{user}',[AdminUserController::class,'update'])->name('admin.user.update');



Route::get('/newslaravel/admin/category',[AdminCategoryController::class,'index']);



Route::get('/newslaravel/admin/news',[AdminNewsController::class,'index'])->name('admin.news.index');
Route::get('/newslaravel/admin/news/create',[AdminNewsController::class,'create'])->name('admin.news.create');
Route::post('/newslaravel/admin/news',[AdminNewsController::class,'store'])->name('admin.news.store');
Route::get('/newslaravel/admin/news/{news}/edit',[AdminNewsController::class,'edit'])->name('admin.news.edit');
Route::put('/newslaravel/admin/news/{news}',[AdminNewsController::class,'update'])->name('admin.news.update');






















//---------------------email-----------------------//

Route::get('newslaravel/sendemail',[EmailController::class,'sendEmail'])->name('sendemail');

















//--------------------session and cookie------------------//

// Route::get('/newslaravel/session',[SesonController::class,'readSession'])->name('readsession');
// Route::get('/newslaravel/session/store',[SesonController::class,'storeCookie'])->name('storesession');


Route::get('/newslaravel/session',function(){
    
    // retriving all session data 

    // $value = session()->all();
    // echo '<pre>';
    // print_r($value);
    // echo '</pre>';

    // retriving single session data
    $value = session()->get('name',"default");


    // or

    $value = session('name');

    echo $value;


});

Route::get('/newslaravel/session/store',function(){
    
    session(['name'=>'aman']);




    return redirect('/newslaravel/session');
});

Route::get('/newslaravel/session/remove',function(){
    
    // removing array of session data
    // session()->forget('name');

    // removing all session data
    session()->flush();

    return redirect('/newslaravel/session');
});









