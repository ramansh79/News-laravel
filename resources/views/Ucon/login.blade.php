@extends('layout.login')
@section('Lbody')
    <form action="{{route('loginmatch')}}" method="POST" class="row g-3">

        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="user_email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        <input type="submit" value="login">
        
    </form>
@endsection