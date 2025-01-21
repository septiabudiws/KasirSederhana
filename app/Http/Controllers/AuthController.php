<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(){
        return view('admin.auth.register');
    }

    public function login(){
        return view('admin.auth.login');
    }

    public function login_action(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Harap Isi Email',
            'password.required' => 'Harap Isi Password'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect('/dashboard');
            } else {
                return redirect('/dashboard/karyawan');
            }
        } else {
            return redirect('/login')->withErrors('Username dan Password yang dimasukkan salah')->withInput();
        }
    }

    public function register_action(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'terms' => 'accepted'
        ],[
            'terms.accepted' => 'Anda Harus Menerima S&K Untuk Mendaftar'
        ]);

        $data =[
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $user = User::create($data);

        $user->assignRole('karyawan');

        return redirect('/login')->with('success', 'Berhasil Menjadi Karyawan');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
