<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registrations.register');
    }
    public function passwordView()
    {
        return view('registrations.password');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required|min:1',
            'username' => 'required|min : 1',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5',
            'retype_password' => 'required|same:password',

        ]);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        $request->session()->flash('success', 'Registration successfull');
        return redirect('/login');

    }

    public function authenticate(request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
