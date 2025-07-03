@extends('Layout.header')
@section('update')

<form action="/news/{{$pot->unique_news_id}}" method="POST" enctype="multipart/form-data">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="integer" name="category_id" placeholder="enter category id" value="{{$pot->category_id}}">
    <input type="text" name="news_title" placeholder="title" value="{{$pot->news_title}}">
    <input type="text" name="news_short_discription" placeholder="short text"value="{{$pot->news_short_description}}">
    <input type="text" name="news_long_discription" placeholder="long text" value="{{$pot->news_long_description}}">
    <input type="file" name="new_image" value="image" value="{{$pot->new_image}}">
    <input type="integer" name="news_status" placeholder="0 or 1" value="{{$pot->news_status}}">
    <input type="number" name="views_count" placeholder="total number of views" value="{{$pot->views_count}}">
    <input type="text" name="author_name" placeholder="name of author" value="{{$pot->author_name}}">
    <input type="submit" value="update">

</form>