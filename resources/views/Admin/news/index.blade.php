@extends('admin.main')
@section('content')
               
        <div class="tab-pane fade show active" id="nav-news-index" role="tabpanel" aria-labelledby="nav-news-index-tab" tabindex="0">
            <!-- News index table -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>unique_news_id</th>
                            <th>category_id</th>
                            <th>news_title</th>
                            <th>news_short_description</th>
                            <th>news_long_description</th>
                            <th>new_image</th>
                            <th>news_status</th>
                            <th>views_count</th>
                            <th>author_name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $items)
                        <tr>
                            <th scope="row">{{$items->unique_news_id}}</th>
                            <td>{{$items->category_id}}</td>
                            <td>{{$items->news_title}}</td>
                            <td>{{$items->news_short_description}}</td>
                            <td>{{$items->news_long_description}}</td>
                            <!-- <td><img src="{{ asset('/images/'.$items->new_image) }}" alt="image" width="50"></td> -->

                            <td><img src="{{ $items->new_image }}" alt="image" width="50"></td>

                            <td>{{$items->news_status}}</td>
                            <td>{{$items->views_count}}</td>
                            <td>{{$items->author_name}}</td>
                            <td>
                                <a href="{{ route('admin.news.edit', $items->unique_news_id) }}" class="btn btn-secondary {{ request()-> routeIs('admin.news.edit', $items->unique_news_id) ? 'active' : '' }}" >Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $news->links() }}
        </div>
        
        <div class="tab-pane fade" id="nav-news-edit" role="tabpanel" aria-labelledby="nav-news-edit-tab" tabindex="0">
            <!-- Disabled edit tab -->
            <p>Edit tab is currently disabled.</p>
        </div>

    
        
@endsection