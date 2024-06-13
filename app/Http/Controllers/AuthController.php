<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ])->validate();

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'level'=> 'admin'
        ]);
        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
        if(!Auth::attempt($request->only('email','password'), $request->boolean('remember'))){
            throw ValidationException::withMessage([
                'email'=>trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }
}
