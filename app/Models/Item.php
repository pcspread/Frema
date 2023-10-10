<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // 編集可能なカラムの設定
    protected $fillable = [
        'user_id',
        'brand_id',
        'category_id',
        'condition_id',
        'category',
        'image',
        'name',
        'content',
        'price',
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

    /**
     * リレーション設定
     * @param void
     * @return 
     */
    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    /**
     * リレーション設定
     * @param void
     * @return 
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * リレーション設定
     * @param void
     * @return
     */
    public function condition()
    {
        return $this->hasOne(Condition::class);
    }
}
