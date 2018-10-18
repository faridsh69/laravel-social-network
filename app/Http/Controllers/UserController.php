<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getLogin()
    {
        \Meta::set('title','login');
        return view('user.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->intended('/');
        }
        return redirect('/user/login')->withErrors('نام کاربری یا رمز عبور اشتباه است.');
    }

    public function getRegister()
    {
        \Meta::set('title','register');
        return view('user.register');
    }

    public function postRegister(Request $request)
    {
        Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users',
            'cellphone' => 'required|numeric|unique:users',
        ])->validate();
        $data = $request->all();
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cellphone' => $data['cellphone'],
        ]);
        // $user->notify(new \App\Notifications\VerificationCode($user->id));
        $request->session()->flash('alert-success', 'ثبت نام شما با موفقیت انجام شد. ایمیل حاوی لینک فعالسازی برای شما فرستاده شد.');
        
        return redirect('/user/login');   
    }
}
