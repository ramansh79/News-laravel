@extends('Layout.header')
@section('news')
    <h2>Welcome {{Auth::User()->user_name}}</h2> 
    <ul>
        @foreach($news as $pots)
            <li>
                <a href="{{route('news.show',$pots->unique_news_id)}}">{{$pots->news_title}}</a>
            </li>
        @endforeach
    </ul>
    <form action="/news/create">
        <input type="submit" value="create new">
    </form>

@endsection