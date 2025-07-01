<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $primaryKey ='unique_news_id';
    protected $fillable=[
        'category_id',
        'news_title',
        'news_short_description',
        'news_long_description',
        'new_image',
        'news_status',
        'views_count',
        'author_name',
    ];
     
    public function comment(){
        return $this->belongsToMany(Comment::class,'news_comments','unique_news_id','comment_id');
    }
    
    
}
