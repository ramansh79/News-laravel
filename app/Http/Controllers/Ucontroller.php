<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class Ucontroller extends Controller
{
    public function registerSave(Request $Request){
        $user = $Request->validate([
            'user_first_name'=>'required',
            'user_last_name'=>'required',
            'user_email'=>'required|email',
            'password'=>'required|min:3',
            'user_gender'=>'required',
            'user_role'=>'required',
            'user_name'=>'required',
        ]);
        $user['password']=Hash::make($user['password']);
        // $user['user_name']='rat';
        // User::create($user,[

        //     'user_name'=>'rat'

        // ]);

        $createduser = User::create($user);
        if($createduser){
            return redirect()->route('login');
        }       
    }
    Public function loginmatch(Request $request){
        $user = $request->validate([
            'user_email'=>'required|email',
            'password'=>'required|min:3'
        ]);
        if(Auth::attempt($user)){
                return redirect()->route('homemain');
        }else{
                return redirect()->route('login');
        }
    }


    // public function homeMain(){
    //     if(Auth::check()){
    //         return view('Home.main');
    //     }else{
    //         return redirect()->route('guestPage');
    //     }
    // }

    //---------above is the controller to route to the home page or guest page with auth check, 
    // ----------------below auth is in middleware---------//


    public function homeMain(){
        
        return view('Home.main');
           
    }
   
    public function logout(){
        Auth::logout();
        return redirect()->route('homeMain');
    }

}
    // public function dashboard(Request $request){
    //     dump($request);
    //     $user= $request->all();

        
    // }

