@extends('layout.header')
@section('news')

    {{$pot}}
    <form action="/news/{{$pot->unique_news_id}}/edit">
        <input type="submit" value="edit">
    </form>

@endsection