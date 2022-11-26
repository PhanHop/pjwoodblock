<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login() {
        return view('admin.login.index');
    }

    public function checkLogin(Request $request) {
        $data = $request->all();
        if (empty($data['username']) && empty($data['pwd'])) {
            return redirect()->route('admin.auth.login');
        }
        session(['usr' => $data['username'], 'pwd' => $data['pwd']]);

        return redirect()->route('woodblocks.index');
    }

    public function username() {
        return 'username';
    }
}
