@extends('Layout.guest')
@section('Gbody')
    <!-- top section -->
    <section class="bg-dark text-light p-5 p-lg-4 pt-5 text-center test-sm-start">
            <div class="container">
                <div class="d-sm-flex align-item-center justify-content-between">
                <div>
                    <h1 class="bg-dark">Get all the news becoming a <span class="text-warning">Member</span> </h1>
                    <p class="lead my-4" >
                        We focus on providing lettest and greatest updates and upgrades to the recent available mobile devices,
                        so that you can get the lettest news.
                    </p>
                    <button 
                        class="btn btn-primary btn-lg" 
                        data-bs-toggle="modal" 
                        data-bs-target="#enroll">
                        Get Engaged
                    </button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block " src="/images/egadget.png" height="20px" alt="" >
            </div>
            </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="enrollLabel">Get Engaged</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">Become a member or Log in to your existing account.</p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
                <button href="{{route('login')}}" type="button" class="btn btn-primary">Login</button>
            </div>
            </div>
        </div>
    </div>
    

@endsection