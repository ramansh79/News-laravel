@extends('Layout.header')
@section('news')
    


    <!---------showing news list ----------->

    <!-- <table class="table">
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
                        <td><a href="{{route('news.show',$post->unique_news_id)}}">{{$post->news_title}}</a></td>
                        <td>{{$post->news_short_description}}</td>
                        <td>{{$post->news_long_description}}</td>
                        <td class="text-center">
                            <img class="img-fluid w-25" src="{{asset('images/'.$post->new_image)}}" alt="">    
                                                
                        </td>
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
    </table> -->

    <!------showing news in card---------->

    <!-- asset('images/'.$post->new_image) -->
    <div class="row border m-5">
        @foreach($news as $post)
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="card" style="width: 14rem;">
                    <img src="{{$post->new_image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->news_title}}</h5>
                        <p class="card-text">{{$post->news_short_description}}</p>
                        <a href="{{route('news.show', $post->unique_news_id)}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach



    </div>



    

@endsection