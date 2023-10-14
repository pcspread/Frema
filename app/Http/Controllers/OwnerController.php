<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * view表示
     * admin.owner_user
     * @param void
     * @return view
     */
    public function indexOwnerUser()
    {
        return view('admin.owner_user');
    }

    /**
     * view表示
     * admin.owner_invite
     * @param void
     * @return view
     */
    public function indexOwnerInvite()
    {
        return view('admin.owner_invite');
    }
}
