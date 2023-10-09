<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * view表示
     * comment
     * @param void
     * @return view
     */
    public function showComment()
    {
        return view('comment');
    }
}
