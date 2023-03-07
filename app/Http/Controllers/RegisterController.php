<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function view()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'username' => 'required|unique:users,username',
                'telp' => 'required|numeric',
                'password' => 'required',
            ],
            [
                'name.required' => 'Nama tidak boleh kosong',
                'name.min' => 'Nama anda terlalu pendek',
                'name.max' => 'Nama anda terlalu panjang',
                'username.required' => 'Username tidak boleh kosong',
                'username.unique' => 'Username sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password terlalu pendek',
                'telp.required' => 'Telepon tidak boleh kosong',
                'telp.numeric' => 'Telepon harus berupa angka',
            ]
            );  

            User::create([
                'name' => Str::camel($data['name']),
                'username' => Str::lower($data['username']),
                'password' => bcrypt($data['password']),
                'level' => 'masyarakat',
                'telp' => $data['telp'],
            ]);
            return redirect('/login');
    }
}