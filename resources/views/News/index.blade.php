@extends('layout.header')
@section('news')
    {{-- <br>welcome{{Auth::User()->name}}<br> --}}
    <ul>
        @foreach($news as $pots )
            <li>
                <a href="{{route('news.show',$pots->id)}}">{{$pots->news_title}}</a>
            </li>
        @endforeach
    </ul>
    <form action="/news/create">
        <input type="submit" value="create new">
    </form>

@endsection