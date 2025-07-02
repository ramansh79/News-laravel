@extends('Layout.header')
@section('create')

    <form action="/news" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        <input type="integer" name="category_id" placeholder="enter category id"><br>
        <input type="text" name="news_title" placeholder="title"><br>
        <input type="text" name="news_short_description" placeholder="short text"><br>
        <input type="text" name="news_long_description" placeholder="long text"><br>
        <input type="file" name="new_image" value="image"><br>
        <input type="integer" name="news_status" placeholder="0 or 1"><br>
        <input type="number" name="views_count" placeholder="total number of views"><br>
        <input type="text" name="author_name" placeholder="name of author"><br>
        <input type="submit" value="create">

    </form>
@endsection