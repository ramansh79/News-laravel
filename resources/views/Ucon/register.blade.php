@extends('Layout.login')
@section('Rbody')
    <form action="{{route('registersave')}}" method="POST" class="row g-3">
        @csrf
        
        <div class="col-md-6">
            <input type="text" name="user_first_name" class="form-label" placeholder="First name" aria-label="First name">
        </div>
        <div class="col-md-6">
            <input type="text" name="user_last_name" class="form-label" placeholder="Last name" aria-label="Last name">
        </div>
  
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="user_email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="firstname" class="form-label">Full Name</label>
            <input type="text" name="user_name" class="form-control" placeholder="full name" aria-label="Full name">
        </div>
        <div class="col-md-6">
            <label for="role" class="form-label">Role</label>
            <input type="text" name="user_role" class="form-control" placeholder="type role" aria-label="type role">
        </div>
    
        <div class="col-md-4">
            <label for="inputState" class="form-label">Gender</label>
            <select id="inputState" name="user_gender" class="form-select">
                <option selected>Do not identify</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div><br>

        <input class ="btn btn-primary btn-sec " type="submit"  value="Create">
        <a href="{{route('login')}}" class ="btn btn-primary btn-sec">Login</a>
        
    </form>

    


    
@endsection