<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup()
    {
        $data = [
            'fullname' => request('fullname'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ];

        User::create($data);
        session()->flash('Berhasil', 'Berhasil buat akun');
        return redirect('/login');
    }

    public function signin()
    {
        $user = User::where(request('fullname'))->first();
        if (is_null($user)) {
            session()->flash('Gagal', 'Username dan Password salah');
        }

        $data = [
            'username' => request('username'),
            'password' => request('password')
        ];

        if (Auth::attempt($data)) {
            request()->session()->regenerate();
            return redirect()->intended();
        } else {
            session()->flash('Gagal', 'Username dan Password salah');
            return redirect('/login');
        }
        session()->flash('Gagal', 'Username dan Password salah');
        return redirect('/login');
    }

    public function signout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
