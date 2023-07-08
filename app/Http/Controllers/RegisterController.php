<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('user.register', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'role_id' => ['required'],
            'name' => ['required', 'min:3', 'max:255', 'unique:users'],
            'pekerjaan' => ['required', 'min:3', 'max:255'],
            'umur' => ['required'],
            'alamat' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'role_id' => ['required'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData); 

        if ($validatedData['role_id'] === '1') {
            return redirect('/registrasiadmin')->with('status', 'success');
        }
    
        return redirect('/login')->with('status', 'success');
    }
}
