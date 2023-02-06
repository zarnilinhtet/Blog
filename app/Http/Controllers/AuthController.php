<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $formData = request()->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'name' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']

        ]);
        $user = User::create($formData);
        auth()->login($user);
        return redirect('/')->with('success', 'Welcome ' . $user->name);
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good Bye');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function data_login()
    {
        $formData = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:255']
        ], [
            'email.required' => 'Email is required',
            'password.min' => 'Password need more than 8 characters'
        ]);
        if (auth()->attempt($formData)) {
            if (auth()->user()->is_admin) {
                return redirect('/admin/blogs');
            } else {
                return redirect('/')->with('success', 'welcome Back');
            }
        } else {
            return back()->withErrors([
                'email' => 'Something Wrong!'
            ]);
        }
    }
}
