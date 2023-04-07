<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');


        // cek apakah email dan password sudah benar
        if ($email == 'user@example.com' && $password == '12345678') {
            // login berhasil
            return redirect()->route('admin.dashboard');
        } else {
            // login gagal
            return back()->withErrors([
                'login' => 'Email atau password salah',
            ]);
        }
    }


}
