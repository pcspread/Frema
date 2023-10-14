<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * view表示
     * admin.top_user
     * @param void
     * @return view
     */
    public function indexTopUser()
    {
        return view('admin.top_user');
    }

    /**
     * view表示
     * admin.top_invite
     * @param void
     * @return view
     */
    public function indexTopInvite()
    {
        return view('admin.top_invite');
    }
}
