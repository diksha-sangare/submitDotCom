<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    // login

    public function login()
    {
        return view('user.login');
    }

    public function loginuser()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // if (auth()->attempt($attributes)) {
        //     session()->regenerate();
        //     return redirect('dashboard');
        // }

        // throw ValidationException::withMessages([
        //     'email' => 'Your provided credentials not be verified.'
        // ]);


        //validate the request
        $attributes =  request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified..'
            ]);
        }



        session()->regenerate();
        return redirect('dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }


    // register

    public function register()
    {
        return view('user.register');
    }
    public function createuser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'userName' => 'required|max:255|min:3|unique:users,userName',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:7|min:3'
        ]);

        $user = User::create([
            'name' => $request->name,
            'userName' => $request->userName,
            'email' => $request->email,
            'password' => $request->password
        ]);

        auth()->login($user);
        return redirect('/');
    }


    // dashboard
    public function dashboard()
    {
        $user = auth()->user();
        Mail::to('$user')->send(new PostLiked());
        return view('user.dashboard');
    }
}
