<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\User\UserResource;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    // ini merupakan logika untuk register
    public function storeregister(Request $request)
    {
            // ini merupakan proses pengecekan apakah inputan user sesuai atau tidak dengan syarat yang sudah di tentukan
                $validatedData = $request->validate([
                    'name'      => 'required|max:100',
                    'email'     => 'required|email:dns|unique:users',
                    'password'  => 'required|min:3',
                ]);
                // ini untuk mengubah password menjadi bcrypt agar password pengguna nantinya lebih aman
                $validatedData['password'] = bcrypt($validatedData['password']);
                // $validatedData['password'] = Hash::make($validatedData('password'));
                User::create($validatedData);

                // lalu ini untuk melempar pengguna ke halaman login dan mengeluarkan respon success
                return redirect('login')->with('success', 'Registrasi berhasil. Silahkan login');
            }


            // ini merupakan logika untuk login
            public function authenticate(Request $request)
            {
                // ini untuk mengecek apakah inputan user sesuai atau tidak dengan syarat yang sudah di tentukan
                // jika tidak sesuai maka laravel akan mengembalikan error dan syarat apa yang dilanggar oleh pengguna
                $credential = $request->validate([
                    'email' =>'required|email:dns',
                    'password'=>'required',
                ]);
                // jika user memenuhi syarat dalam login maka akan langsung ke lempar ke menu(/)
                if(Auth::attempt($credential)) {
                    $request->session()->regenerate();
                    return redirect()->intended('/');
                }
                // jika tidak maka laravel akan mengembalikan sebuah error
                return back()->with('loginError', 'Periksa kembali email atau password anda!');


            }
            //ini merupakan logika untuk logout
            public function logout(Request $request)
            {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login');
            }
    }




