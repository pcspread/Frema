<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    // 編集可能なカラムの設定
    protected $fillable = [
        'user_id',
    ];

    /**
     * リレーション設定
     * @param void
     * @return 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
