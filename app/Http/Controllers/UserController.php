<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUsersRequest;
use App\Http\Requests\StoreUsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUsersRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', 'register YES');
        Auth::login($user);

        return redirect()->route('admin.index');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(LoginUsersRequest $request)
    {
        if (Auth::attempt([
            'email'=> $request->email,
            'password' => $request->password,
        ])) {
            session()->flash('success', 'You are logged');
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            } else {
               return redirect()->home();
            }
        }

        return redirect()->back()->with('error', 'Incorect Login or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
