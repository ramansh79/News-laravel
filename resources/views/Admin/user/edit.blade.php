@extends('admin.main')
@section('content')

        <div class="tab-pane fade show active" id="nav-news-index" role="tabpanel" aria-labelledby="nav-news-index-tab" tabindex="0">
            <!-- News index table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>unique_user_id</th>
                        <th>user_name</th>
                        <th>user_email</th>
                        <th>user_gender</th>
                        <th>user_first_name</th>
                        <th>user_last_name</th>
                        <th>user_role</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <form action="{{ route('admin.user.update',$users->unique_user_id) }}" method="POST" >
                            
                            {{ csrf_field() }}

                            <th scope="row">{{ $users->unique_user_id }}</th>
                            <input type="hidden" name="_method" value="PUT">
                            
                            <td><input type="text" name="user_name" value="{{ $users->user_name }}"></td>
                            <td><input type="email" name="user_email" value="{{ $users->user_email }}"></td>
                            <td><input type="text" name="user_gender" value="{{ $users->user_gender }}"></td>
                            <td><input type="text" name="user_first_name" value="{{ $users->user_first_name }}"></td>
                            <td><input type="text" name="user_last_name" value="{{ $users->user_last_name }}"></td>
                            <td><input type="text" name="user_role" value="{{ $users->user_role }}"></td>
                            <td><input type="submit" value="update"></td>
                            <td><a href="/newslaravel/admin/user">cancel</td>
                        </form>
                    
                    </tr>
                 
                </tbody>
            </table>
            
        </div>
@endsection