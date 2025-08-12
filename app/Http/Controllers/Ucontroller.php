<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class Ucontroller extends Controller
{
    public function registerSave(Request $request){

        $user = $request->validate([
            'user_first_name'=>'required',
            'user_last_name'=>'required',
            'user_email'=>'required|email',
            'password'=>'required|min:3',
            'user_name'=>'required',
            'user_role'=>'required',
            'user_gender'=>'required',
            'user_image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user['password']=Hash::make($user['password']);
        if($file= $request->file('user_image')){

            $name = $file->getClientOriginalName();
            $file->move('images',$name);
            $user['user_image']=$name;

        }else{
            $user['user_image']=null;
        }
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
        return redirect()->route('homemain');
    }

}
    // public function dashboard(Request $request){
    //     dump($request);
    //     $user= $request->all();

        
    // }

