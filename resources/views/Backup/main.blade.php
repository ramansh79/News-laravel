<!-- this is backup of admin main page -->


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
            
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- lineicons cdn -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />
    
</head> 
<body>
    <div class="topcontainer header">
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

    <!-- contain on right side -->
    <div>
        <div class="text-end ">
            <h6 class="mb-0">Hello! {{Auth::User()->user_name}}</h6> 
        </div>

        <!-- side bar -->
    
        <aside class="sidebar">
            <!-- list -->
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="lni lni-home-2"></i>
                        <span>Home</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="{{ url('/newslaravel/admin/user') }}" class="sidebar-link">
                        <i class="lni lni-user-4"></i>
                        <span>User</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Task</span>
                    </a>
                </li>    

                <!-- multilevel list -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="true" aria-controls="multi">
                        <i class="lni lni-layout-9"></i>
                        <span>Data</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('/newslaravel/admin/news') }}" method="POST" class="sidebar-link collapsed" >News</a> 
                                                            
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('/newslaravel/admin/category') }}" class="sidebar-link collapsed">Category</a>
                        </li>
                    </ul>
                </li>


            </ul>

            <!-- sidebar footer -->
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        

        <!-- content on right -->
        <div class="main-content">

            <div class="tab-content" id="pills-tabContent">

                <!-- NEWS tab pane -->
                <div class="tab-pane fade show active " id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab" tabindex="0">
              
                    <!-- News sub-tabs -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-news-tab" role="tablist">
                            
                            
                            <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->routeIs('admin.news.index') ? 'active' : '' }}">Index</a>
                            <a href="{{ route('admin.news.create') }}" class="nav-link {{ request()->routeIs('admin.news.create') ? 'active' : '' }}">Create</a>
                            <a class="nav-link disabled ">Edit</a>
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
