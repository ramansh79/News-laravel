<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>samplepage</title>
    <!-- Add Bootstrap CSS CDN below -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="resources/css/layouthead.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="topcontainer">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="{{route('homemain')}}">Newslaravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('homemain')}}">Home</a>
                        </li> -->
                        <a class="nav-link" href="{{route('news.index')}}" role="button"  aria-expanded="false">
                            News
                            </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('news.pindex')}}">Smartphones</a>
                            <a class="dropdown-item" href="#">Laptops</a>
                            <a class="dropdown-item" href="#">Watches</a>
                            </div>
                        </li>





                        <!-- <li class="nav-item dropdown">
                        
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('news.pindex')}}">Smartphones</a></li>
                                <li><a class="dropdown-item" href="#">Laptop</a></li>
                                <li><a class="dropdown-item" href="#">Watch</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                    
                    </ul>
                    <!--search-->

                    <form action="{{route('news.sindex')}}" class="d-flex" role="search" method="POST">
                        @csrf   
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
                    </form>

                    
                    


                    <a class="ms-3" href="{{route('logout')}}">Logout</a>

                </div>
            </div>
        </nav>
        <div class="text-end ">
            <h6 class="mb-0">Hello! {{Auth::User()->user_name}}</h6> 
        </div>

    </div>

    <div class="row">
        <!-- side bar nav -->
        <div class="col lg-3 ">
            <ul>
                <li> <a method="POST" href="{{ url('/newslaravel/admin/user') }}">user</a>  </li>
                <li> <a method="POST" href="{{ url('newslaravel/admin/news') }}">news</a> </li>
                <li> <a href="{{ url('newslaral/admin/category') }}">category</a> </li>
            </ul>
        </div>

        <!-- content -->
        <div class="col lg-9">
            
            <div class="tab-content" id="pills-tabContent">

                <!-- NEWS tab pane -->
                <div class="tab-pane fade show active " id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab" tabindex="0">

                    
                    <!-- News sub-tabs -->
                    
                    <nav>
                        <div class="nav nav-tabs" id="nav-news-tab" role="tablist">
                            <!-- <button class="nav-link active" id="nav-news-index-tab" data-bs-toggle="tab" data-bs-target="#nav-news-index" type="button" role="tab" aria-controls="nav-news-index" aria-selected="true">Index</button>
                            <button class="nav-link" id="nav-news-create-tab" data-bs-toggle="tab" data-bs-target="#nav-news-create" type="button" role="tab" aria-controls="nav-news-create" aria-selected="false">Create</button> 
                            <button class="nav-link" id="nav-news-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-news-edit" type="button" role="tab" aria-controls="nav-news-edit" aria-selected="false" disabled>Edit</button>-->
                            
                            <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->routeIs('admin.news.index') ? 'active' : '' }}">Index</a>
                            <a href="{{ route('admin.news.create') }}" class="nav-link {{ request()->routeIs('admin.news.create') ? 'active' : '' }}">Create</a>
                            <a class="nav-link disabled">Edit</a>
                            

                            

                        </div>
                    </nav>
                    
                        
                    @yield('content')
                    
            
                            
                </div>
            </div>

           
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
