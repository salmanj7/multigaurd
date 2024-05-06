<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showRegistrationForm()
    {
        return view('customer-register');
    }

    public function register(Request $request)
    {
    
        $validatedData = $request->validated();
        Customer::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

  
        return redirect()->route('customer.login')->with('success', 'Registration successful! Please login.');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
