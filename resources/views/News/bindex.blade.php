@extends('Layout.header')
@section('news')
    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>samplepage</title>
        <!-- Add Bootstrap CSS CDN below -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="resources/css/layouthead.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        
    </head>
    <body>
            <div class="topcontainer">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Newslaravel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="{{route('logout')}}">Logout</a>

                </div>
            </nav>
        

        </div>


        <div class="midcontainer">
        
        @yield('aindex')
        @yield('aedit')
        @yield('categoryCreate')
        @yield('categoryindex')
        @yield('categoryedit')

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    </body>
    </html>

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
    <div class="row m-2">
        <div class="col-lg-4">
            <h2>Categories</h2>
        </div>
        <div class="col-lg-8 col">    
            <div class="row border m-5">
                @foreach($news as $post)
                    <div class="col-md-6 col-lg-4 mb-4">
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
        </div>
        {{ $news->links() }}
    </div>



    

@endsection