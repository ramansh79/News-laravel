@extends('admin.main')
@section('content')

        <div class="tab-pane fade show active table-responsive" id="nav-news-edit" role="tabpanel" aria-labelledby="nav-news-edit-tab" tabindex="0">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">unique_news_id</th>
                        <th scope="col">category_id</th>
                        <th scope="col">news_title</th>
                        <th scope="col">news_short_description</th>
                        <th scope="col">news_long_description</th>
                        <th scope="col">new_image</th>
                        <th scope="col">news_status</th>
                        <th scope="col">views_count</th>
                        <th scope="col">author_name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action=" {{ route('admin.news.update',$news->unique_news_id) }}" method="post" enctype="multipart/form-data">
                            
                            {{csrf_field()}}
                            <th scope="row">{{$news->unique_news_id}}</th>
                            <input type="hidden" name="_method" value="PUT">
                            <td><input type="integer" name="category_id" value="{{$news->category_id}}"></td>    
                            <td><input type="text" name="news_title" value="{{$news->news_title}}"></td>
                            <td><input type="text" name="news_short_discription" value="{{$news->news_short_description}}"></td>
                            <td><input type="text" name="news_long_discription" value="{{$news->news_long_description}}"></td>
                            <td><input type="file" name="new_image" value="image" value="{{$news->new_image}}"></td>
                            <td><input type="integer" name="news_status"value="{{$news->news_status}}"></td>
                            <td><input type="number" name="views_count" value="{{$news->views_count}}"></td>
                            <td><input type="text" name="author_name" value="{{$news->author_name}}"></td>
                            <td><input type="submit" value="update"></td>
                            <td><a href="/newslaravel/admin/news" class="btn btn-sm btn-secondary px-1">Cancel </a></td>
                        </form>
                        

                    </tr>
                </tbody>
            </table>
        
        
        
        </div>
                    

@endsection