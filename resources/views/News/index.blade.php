@extends('Layout.header')
@section('news')
    <!-- <ul>
        @foreach($news as $pots)
            <li>
                <a href="{{route('news.show',$pots->unique_news_id)}}">{{$pots->news_title}}</a>
            </li>
        @endforeach
    </ul> -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">unique_news_id</th>
            <th scope="col">category_id</th>
            <th scope="col">news_title</th>
            <th scope="col">news_short_description</th>
            <th scope="col">news_long_description</th>
            <th scope="col">new_image</th>
            <th scope="col">news_status</th>
            <th scope="col">views_count</th>
            <th scope="col">author_name</th>
            </tr>
        </thead>
        <tbody>
                 
            @foreach($news as $post)
                <tr>
                    <th scope="row">{{$post->unique_news_id}}</th>
                        <td>{{$post->category_id}}</td>
                        <td>{{$post->news_title}}</td>
                        <td>{{$post->news_short_description}}</td>
                        <td>{{$post->news_long_description}}</td>
                        <td>{{$post->new_image}}</td>
                        <td>{{$post->news_status}}</td>
                        <td>{{$post->views_count}}</td>
                        <td>{{$post->author_name}}</td>
                        <td>
                            <form action="news/{{$post->unique_news_id}}/edit">
                                <input type="submit" value="edit">
                            </form>
                        </td>
                </tr>

            @endforeach
        </tbody>
    </table>


    <form action="/news/create">
        <input type="submit" value="create new">
    </form>

@endsection