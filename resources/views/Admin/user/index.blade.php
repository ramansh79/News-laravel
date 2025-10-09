@extends('Admin.main')
@section('content')


    <!-- Top-level news tabs -->
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
                    @foreach($users as $items)
                    <tr>
                        <th scope="row">{{ $items->unique_user_id }}</th>
                        <td>{{ $items->user_name }}</td>
                        <td>{{ $items->user_email }}</td>
                        <td>{{ $items->user_gender }}</td>
                        <td>{{ $items->user_first_name }}</td>
                        <td>{{ $items->user_last_name }}</td>
                        <td>{{ $items->user_role }}</td>
                       
                        <td>
                            <a href="{{ route('admin.user.edit', $items->unique_user_id) }}" class="btn btn-secondary {{ request()-> routeIs('admin.user.edit', $items->unique_user_id) ? 'active' : '' }}" >Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
        
        <div class="tab-pane fade" id="nav-news-edit" role="tabpanel" aria-labelledby="nav-news-edit-tab" tabindex="0">
            <!-- Disabled edit tab -->
            <p>Edit tab is currently disabled.</p>
        </div>



@endsection