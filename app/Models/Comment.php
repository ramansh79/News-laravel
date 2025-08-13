<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey='unique_comment_id';
    protected $fillable=[
        'comment_user_name',
        'comment_user_image',
        'comments',
        'user_unique_id',
    ];
    public function news(){
        return $this->belongsToMany(News::class,'news_comments','comment_id','unique_news_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'unique_user_id','user_unique_id');
    }
}