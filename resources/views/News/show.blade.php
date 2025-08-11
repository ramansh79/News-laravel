@extends('Layout.header')
@section('news')

    <div class="p-5">
        <section class=" pt-5 p-lg-0  text-center test-sm-start ">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    
                    <div class="me-3  col-md-3">
                        <img class="img-fluid " src="{{asset('images/'.$news->new_image)}}"  alt="" >
                        {{$news->new_image}}
                    </div>
                    <div class="col-md-9">
                        <h1>{{$news->news_title}}</h1>
                        <table class="table table-bordered table-striped-columns ">
                            <thead>
                                
                                <tr>
                                    <th scope="col">unique_news_id</th>
                                    <td>{{$news->unique_news_id}}</td>
                                </tr>
                                <tr>

                                    <th scope="col">category_id</th>
                                    <td>{{$news->category_id}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">news_title</th>
                                    <td>{{$news->news_title}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">news_short_description</th>
                                    <td>{{$news->news_short_description}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">news_long_description</th>
                                    <td>{{$news->news_long_description}}</td>
                                </tr>
                                <!-- <tr>
                                    <th scope="col">new_image</th>
                                    <td>{{$news->new_image}}</td>
                                </tr> -->
                                <tr>
                                    <th scope="col">news_status</th>
                                    <td>{{$news->news_status}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">views_count</th>
                                    <td>{{$news->views_count}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">author_name</th>
                                    <td>{{$news->author_name}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Add Comment</th>
                                    <td>
                                        <form action="{{route('news.cStore',$news->unique_news_id)}}" method="GET">
                                            {{@csrf_field()}}
                                            <input type="text" name="comments" placeholder="Add your comment here" class="form-control">
                                            <input type="submit" value="Add Comment" class="btn btn-primary mt-2">
                                        </form>
                                    </td>
                            </thead>
                            
                        </table>
                    </div>
                    
                </div>
                <div>
                    <section class="gradient-custom">
                        <div class="container my-5 py-5">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 col-lg-10 col-xl-8">
                                    <div class="card">
                                    <div class="card-body p-4">
                                        <h4 class="text-center mb-4 pb-2">Comments</h4>

                                        @foreach($comments as $comment)
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex flex-start mt-3">
                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                            src="{{asset('images/'.$comment->comment_user_image)}}" alt="avatar" width="65"
                                                            height="65" />
                                                        <div class="flex-grow-1 flex-shrink-1">
                                                            <div>
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <p class="mb-1">
                                                                    {{$comment->comment_user_name}} <span class="small">- {{$comment->created_at->diffForHumans()}}</span>
                                                                    </p>
                                                                    <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                                                                </div>
                                                                <p class="small mb-0 d-flex">
                                                                    {{$comment->comments}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                                    <!-- <div class="d-flex flex-start mt-4">
                                                    <a class="me-3" href="#">
                                                        <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(11).webp" alt="avatar"
                                                        width="65" height="65" />
                                                    </a>
                                                    <div class="flex-grow-1 flex-shrink-1">
                                                        <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                            Simona Disa <span class="small">- 3 hours ago</span>
                                                            </p>
                                                        </div>
                                                        <p class="small mb-0">
                                                            letters, as opposed to using 'Content here, content here',
                                                            making it look like readable English.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div> -->
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <!--
                                                    <div class="d-flex flex-start mt-4">
                                                    <a class="me-3" href="#">
                                                        <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                                                        width="65" height="65" />
                                                    </a>
                                                    <div class="flex-grow-1 flex-shrink-1">
                                                        <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                            John Smith <span class="small">- 4 hours ago</span>
                                                            </p>
                                                        </div>
                                                        <p class="small mb-0">
                                                            the majority have suffered alteration in some form, by
                                                            injected humour, or randomised words.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="d-flex flex-start mt-4">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                                                    height="65" />
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="mb-1">
                                                        Natalie Smith <span class="small">- 2 hours ago</span>
                                                        </p>
                                                        <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                                                    </div>
                                                    <p class="small mb-0">
                                                        The standard chunk of Lorem Ipsum used since the 1500s is
                                                        reproduced below for those interested. Sections 1.10.32 and
                                                        1.10.33.
                                                    </p>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                    <a class="me-3" href="#">
                                                        <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp" alt="avatar"
                                                        width="65" height="65" />
                                                    </a>
                                                    <div class="flex-grow-1 flex-shrink-1">
                                                        <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                            Lisa Cudrow <span class="small">- 4 hours ago</span>
                                                            </p>
                                                        </div>
                                                        <p class="small mb-0">
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                            scelerisque ante sollicitudin commodo. Cras purus odio,
                                                            vestibulum in vulputate at, tempus viverra turpis.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                    <a class="me-3" href="#">
                                                        <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(29).webp" alt="avatar"
                                                        width="65" height="65" />
                                                    </a>
                                                    <div class="flex-grow-1 flex-shrink-1">
                                                        <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                            Maggie McLoan <span class="small">- 5 hours ago</span>
                                                            </p>
                                                        </div>
                                                        <p class="small mb-0">
                                                            a Latin professor at Hampden-Sydney College in Virginia,
                                                            looked up one of the more obscure Latin words, consectetur
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                    <a class="me-3" href="#">
                                                        <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                                                        width="65" height="65" />
                                                    </a>
                                                    <div class="flex-grow-1 flex-shrink-1">
                                                        <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                            John Smith <span class="small">- 6 hours ago</span>
                                                            </p>
                                                        </div>
                                                        <p class="small mb-0">
                                                            Autem, totam debitis suscipit saepe sapiente magnam officiis
                                                            quaerat necessitatibus odio assumenda, perferendis quae iusto
                                                            labore laboriosam minima numquam impedit quam dolorem!
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
















   

@endsection