@extends('Layout.header')
@section('main')

    <section class="bg-light text-dark p-5 p-lg-1 pt-5 text-center test-sm-start">
            <div class="container">
                <div class="d-sm-flex align-item-center justify-content-between">
                <div>
                    <h1>Get all the news related to <span class="text-warning">Smartphones</span> </h1>
                    <p class="lead my-4" >
                        We focus on providing lettest and greatest updates and upgrades to the recent available mobile devices,
                        so that you can get the lettest news.
                    </p>
                    <button class="btn btn-primary btn-lg"> start </button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="NEWS-LARAVEL/public/images/Lr-6390.jpg" height="20 px" alt="" >
            </div>
            </div>
    </section>
    <!-- second sec -->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign up for newsletter</h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="enter email">
                    <button class="btn btn-dark btn-lg" type="button" >Button</button>
                </div>
            </div>
            
        </div>
    </section>
    <!-- boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div class="h3 card-title mb-3">
                                Laptop
                            </div>
                            <p class="card-text">
                                Know about the Laptops.
                            </p>
                            <a href="#" class="btn btn-secondary">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div class="h3 card-title mb-3">
                                Smartphones
                            </div>
                            <p class="card-text">
                                Know about Handheld phones.
                            </p>
                            <a href="#" class="btn btn-secondary">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-watch"></i>
                            </div>
                            <div class="h3 card-title mb-3">
                                Watch
                            </div>
                            <p class="card-text">
                                Know about the Watch.
                            </p>
                            <a href="#" class="btn btn-secondary">Go</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 