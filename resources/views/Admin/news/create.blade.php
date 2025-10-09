@extends('admin.main')
@section('content')
  

    
    <div class="tab-content" id="nav-news-tabContent">
       
        <div class="tab-pane fade show active" id="nav-news-create" role="tabpanel" aria-labelledby="nav-news-create-tab" tabindex="0">
            <!-- News create form -->
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">
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
                        <tr>
                            <th>TBD</th>
                            <td>                                
                                <select name="category_id" class="form-select">
                                    @foreach($categories as $category)
                                        <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><input type="text" name="news_title" class="form-control"></td>
                            <td><input type="text" name="news_short_description" class="form-control"></td>
                            <td><input type="text" name="news_long_description" class="form-control"></td>
                            <td><input type="file" name="new_image" class="form-control"></td>
                            <td><input type="text" name="news_status" class="form-control"></td>
                            <td><input type="number" name="views_count" class="form-control"></td>
                            <td><input type="text" name="author_name" class="form-control"></td>
                            <td><input type="submit" value="Create" class="btn btn-primary"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
        

@endsection