@extends('Layout.login')
@section('Rbody')
    <div class="m-5">
        <form action="{{route('registersave')}}" method="POST" class="row g-3" enctype="multipart/form-data">
            @csrf
            
            <div class="col-md-6">
                <input type="text" name="user_first_name" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col-md-6">
                <input type="text" name="user_last_name" class="form-control" placeholder="Last name" aria-label="Last name">
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
                <label for="firstname" class="form-label">username</label>
                <input type="text" name="user_name" class="form-control" id="user_name" placeholder="full name" aria-label="Full name">
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
            </div>
            <div class="col-md-4">
                <label for="formFile" class="form-label">Insert Image</label>
                <input type="file" name="user_image" class="form-control" value="input image" >
            </div>
            
            <div>
                <input class ="btn btn-primary btn-sec" type="submit"  value="Sign in">
                <a href="{{route('login')}}" class ="btn btn-primary btn-sec">Login</a>

            </div>
            
        
        </form>

        <!-- this is for checking username availability with ajax jquery -->
        <script>
            $(document).ready(function(){
                $('#user_name').blur(function(){
                    var user_name = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: "{{route('news.checkusername')}}",
                        data: {
                            user_name: user_name,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if(response.exists) {
                                alert('Username already exists. Please choose another one.');
                            }else{
                                alert('Username is available.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error checking username:', error);
                        }
                    });
                })
            })
        </script>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

       
@endsection