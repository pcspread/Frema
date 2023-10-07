<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // 編集可能なカラムの設定
    protected $fillable = [
        'item_id',
        'brand',
    ];
}