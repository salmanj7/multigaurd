<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin-register');
    }

    public function register(AdminRequest $request)
    {
    
        $validatedData = $request->validated();
        Admin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

  
        return redirect()->route('admin.login')->with('success', 'Registration successful! Please login.');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
