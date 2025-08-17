<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use	Illuminate\Database\Eloquent\Casts\Attribute;


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


    public $directory = "/storage/images/";
    

    public function newImage(): Attribute
    {

        return Attribute::make(
            get:fn(string $value)=> $value ? $this->directory .$value :null

        );
    //     $dir = "/images/";

    //    return Attribute::make(
    //     get: fn(?string $value) => $value
    //         ? str_replace('/', '\\', storage_path('images/' . ltrim($value, '/')))
    //         : null

        // public function newImage():Attribute
        // $dir = "/images/";
        
    }


    
    
}
