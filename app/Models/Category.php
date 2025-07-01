<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey="category_id";
    protected $fillable=[
        'category_name',
        'category_status',
        'category_order',
    ];
    public function news(){
        return $this->hasMany(News::class, 'category_id', 'category_id');
    }
}