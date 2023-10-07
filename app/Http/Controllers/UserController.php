<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * view表示
     * auth.register
     * @param void
     * @return view
     */
    public function indexRegister()
    {
        return view('auth.register');
    }

    /**
     * view表示
     * auth.login
     * @param void
     * @return view
     */
    public function indexLogin()
    {
        return view('auth.login');
    }

    /**
     * view表示
     * auth.verify_email
     * @param void
     * @return view
     */
    public function indexMail()
    {
        return view('auth.verify_email');
    }
}
