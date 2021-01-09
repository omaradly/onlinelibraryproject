<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Socialite;
use Str;

class authcontroller extends Controller
{
    //
    public function showregister()
    {
        return view('user.register');
    }
    public function showregisterstore(Request $request)
    {
        // check validate
        $request->validate([
            'name'=>'required | string',
            'email'=>'required | email | unique:users,email',
            'password'=>'required | string',
            
        ]);
        // add user to db
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            
        ]);
        /* auto login  */
        Auth::login($user);
        // go to show books
        return redirect(route('homepage'));
    }
    /* update user data */
    public function updateData()
    {
        return view('user.updateuserdata');
    }
    public function updateDatastore(Request $request)
    {
         
        // check validate
        $request->validate([
            'name'=>'required | string',
            'email'=>'required | '. Rule::unique('users')->ignore(Auth::user()->id),
            
        ]);
        // add user to db
        User::where('email','=',Auth::user()->email)->first()->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Auth::user()->password
            
        ]);
        // go to show books
        return redirect(route('homepage'));
    }
    /* login */
    public function showlogin()
    {
        return view('user.login');
    }
    public function showloginstore(Request $request)
    {
        // check validate
        $request->validate([
            'email'=>'required | email',
            'password'=>'required | string',
            
        ]);
        
        
        // check if user is exist and password or email are true
        $check= Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        // show if this is true or no
        if(!$check) {
                return back()->withErrors([
                    'errorsmsg' => 'The email or password is wrong', 
                ]);
        }
        
        // go to show books
        return redirect(route('homepage'));
    }
    public function logout(){
        Auth::logout();
        return redirect(route('homepage'));
    }
    public function github(){
      return Socialite::driver('github')->redirect();
    }
    public function githubRedircet(){
        $github_user = Socialite::driver('github')->user();
        $check = User::where('email','=',$github_user->email)->first();
        if($check == null){
            return redirect(route('auth.register'))->with('user', $github_user);
        }else{
            Auth::login($check);
            return redirect(route('homepage'));
        }
    }
    /* ---------------------------------------------------- */
    public function facebook(){
      return Socialite::driver('facebook')->redirect();
    }
    public function facebookRedircet(){
      $facebook_user = Socialite::driver('facebook')->user();
      $check = User::where('email','=',$facebook_user->email)->first();
      if($check == null){
          return redirect(route('auth.register'))->with('user', $facebook_user);
      }else{
          Auth::login($check);
          return redirect(route('homepage'));
      }
    
    }
}
