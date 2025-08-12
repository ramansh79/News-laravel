@extends('layout.login')
@section('Lbody')
    <div class="m-5">
        <form action="{{route('loginmatch')}}" method="POST" class="row g-3">

            @csrf
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="user_email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
            </div>
            <div>
                <input class="btn btn-primary btn-sm" type="submit" value="login">

            </div>
            
        </form>
    </div>
@endsection