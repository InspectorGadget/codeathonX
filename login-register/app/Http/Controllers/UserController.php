<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function logout() {
        Auth::logout();
        return redirect(route('login'))->with('message', 'Successfully logged out!');
    }

    public function login(Request $request) {
        $this->validate($request, [
           'username' => 'required',
           'password' => 'required'
        ]);

        $array = [
            'username' => strtolower($request->input('username')),
            'password' => $request->input('password')
        ];

        if (!Auth::attempt($array)) {
            return back()->with('error', 'Invalid Credentials');
        }

        return redirect(route('landing'));
    }

    public function register(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $array = [
            'username' => strtolower($request->input('username')),
            'password' => Hash::make($request->input('password'))
        ];

        $result = DB::table('users')
            ->insert($array);

        if (!$result) return redirect(route('register'))->with('error', 'An error has occurred!');

        return redirect(route('register'))->with('message', 'Please login!');
    }

}
