@extends('Layout.header')
@section('main')

    <!-- top section -->
    <section class="bg-dark text-light p-5 pt-5 p-lg-0  text-center test-sm-start">
            <div class="container">
                <div class="d-sm-flex align-item-center ">
                    <div class="align-item-center mt-5">
                        <h1 class="bg-dark">Get all the news becoming a <span class="text-warning">Member</span> </h1>
                        <p class="lead my-4" >
                            We focus on providing lettest and greatest updates and upgrades to the recent available mobile devices,
                            so that you can get the lettest news.
                        </p>
                        <button 
                            class="btn btn-primary btn-lg" 
                            data-bs-toggle="modal" 
                            data-bs-target="#enroll">
                            About Us
                        </button>
                    </div>
                    <img class="img-fluid w-50 d-none d-sm-block " src="/images/egadget.png" height="20px" alt="" >
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
            <div class="row text-center g-4">
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
                                All specs related to Laptops.
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
                                Lettest available Handheld phones.
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
                                Smartest Watch available.
                            </p>
                            <a href="#" class="btn btn-secondary">Go</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- editors -->
    <section class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Our Editors</h2>
            <p class="lead text-center text-white mb-5">
                Our editor have 5+ years of experience in the field of information technology, they all belong to computer faculty.
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="images/Lr-6390.jpg" alt="" class="rounded-circle mb-3">
                            <h3 class="card-title mb3">xitiz khanal</h3>
                            <p class="card-text">Xitiz khanal senior theme developer</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="images/Lr-6390.jpg" alt="" class="rounded-circle mb-3">
                            <h3 class="card-title mb3">Gaurab raj</h3>
                            <p class="card-text">Game developer at ea football</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </section>

    <!-- contact and map -->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location:</span>Chandragiri-09 kathmandu
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Admin Phone:</span>+9779762000000
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Editors phone:</span>+9779762000001
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Admin Email:</span>batman@mail.com
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md">
                    <h2 class="text-center mb-4">Map</h2>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d353.8586672366577!2d85.2500546!3d27.6701677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDQwJzEzLjYiTiA4NcKwMTUnMDAuMiJF!5e1!3m2!1sen!2snp!4v1691223456789" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>
        </div>
    </section>

    <!-- footer\ -->

    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2025 Laravel</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <!-- model -->

    <!-- Button trigger modal -->
    
    <!-- the below button tag is already mentioned in above get engaged text on top container. -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="enrollLabel">Get Engaged</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">Become a member by Loging in to yours account.</p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>    
            </div>
            </div>
        </div>
    </div>
@endsection 