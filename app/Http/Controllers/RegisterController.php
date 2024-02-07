<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Mail;
use Str;
use App\Models\User;
use App\Mail\ForgotPasswordMail;

class RegisterController extends Controller
{
    public function login()
    {
        
        if (!empty(Auth::check()))
        {
            $user = Auth::user();
            if($user->role_id == 1)
            {
                return redirect('/admin');
            }
            else if($user->role_id == 2)
            {
                return redirect('viewers/home');
            }
            else if($user->role_id == 3) 
            {
                return redirect('editors/home');
            }
            
        }
        return view('auth.login');
    }
    
    public function Authlogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
            $user = Auth::user();
            if($user->role_id == 1)
            {
                return redirect('/admin');
            }
            else if($user->role_id == 2)
            {
                return redirect('viewers/home');
            }
            else if($user->role_id == 3) 
            {
                return redirect('editors/home');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'please enter correct email and password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }



    public function showRegistrationForm()
    {
    return view('auth.register');
    }

    public function register(Request $request)
{
    try {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->passwor);

        $user->save();

        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    } catch (QueryException $e) {
        // Log or display error message
        return redirect()->back()->with('error', 'Registration failed. Please try again.');
    }
}

}   