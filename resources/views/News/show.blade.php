@extends('layout.header')
@section('news')

    {{$pot}}
    <br>
    <img src="{{$pot->new_image}}" alt="" height="10px">
    <form action="/news/{{$pot->unique_news_id}}/edit">
        <input type="submit" value="edit">
    </form>

@endsection