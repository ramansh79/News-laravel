@extends('layout.header')
@section('create')

    <form action="/news" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        <input type="integer" name="category_id" placeholder="enter category id">
        <input type="text" name="news_title" placeholder="title">
        <input type="text" name="news_short_discription" placeholder="short text">
        <input type="text" name="news_long_discription" placeholder="long text">
        <input type="file" name="new_image" value="image">
        <input type="integer" name="news_status" placeholder="0 or 1">
        <input type="number" name="views_count" placeholder="total number of views">
        <input type="text" name="author_name" placeholder="name of author">
        <input type="submit" value="create">

    </form>
@endsection