<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // 編集可能なカラムの設定
    protected $fillable = [
        'user_id',
        'item_id',
        'name',
        'content',
    ];
}
