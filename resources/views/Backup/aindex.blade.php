@extends('News.index')
@section('aindex')
                            {{ $categories= \App\Models\Category::all(); }}

    <section class="bg-light text-dark p-8">
        <div class="container">
            <div class="align-item-center">

                <!-- Top-level tabs: Category and News -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-category-tab" data-bs-toggle="pill" data-bs-target="#pills-category" type="button" role="tab" aria-controls="pills-category" aria-selected="false">Category</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-news-tab" data-bs-toggle="pill" data-bs-target="#pills-news" type="button" role="tab" aria-controls="pills-news" aria-selected="true">News</button>
                    </li>
                </ul>

                <!-- One single tab-content for the top-level tabs -->
                <div class="tab-content" id="pills-tabContent">

                    <!-- NEWS tab pane -->
                    <div class="tab-pane fade show active" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab" tabindex="0">

                        <!-- News sub-tabs -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-news-tab" role="tablist">
                                <button class="nav-link active" id="nav-news-index-tab" data-bs-toggle="tab" data-bs-target="#nav-news-index" type="button" role="tab" aria-controls="nav-news-index" aria-selected="true">Index</button>
                                <button class="nav-link" id="nav-news-create-tab" data-bs-toggle="tab" data-bs-target="#nav-news-create" type="button" role="tab" aria-controls="nav-news-create" aria-selected="false">Create</button>
                                <button class="nav-link" id="nav-news-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-news-edit" type="button" role="tab" aria-controls="nav-news-edit" aria-selected="false" disabled>Edit</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-news-tabContent">
                            <div class="tab-pane fade show active" id="nav-news-index" role="tabpanel" aria-labelledby="nav-news-index-tab" tabindex="0">
                                <!-- News index table -->
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
                                        {{ $news= \App\Models\News::all(); }}
                                        @foreach($news as $items)
                                        <tr>
                                            <th scope="row">{{$items->unique_news_id}}</th>
                                            <td>{{$items->category_id}}</td>
                                            <td>{{$items->news_title}}</td>
                                            <td>{{$items->news_short_description}}</td>
                                            <td>{{$items->news_long_description}}</td>
                                            <td><img src="{{ asset('/images/'.$items->new_image) }}" alt="image" width="50"></td>
                                            <td>{{$items->news_status}}</td>
                                            <td>{{$items->views_count}}</td>
                                            <td>{{$items->author_name}}</td>
                                            <td><a class="btn btn-secondary" href="anews/{{$items->unique_news_id}}/edit">Edit</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="nav-news-create" role="tabpanel" aria-labelledby="nav-news-create-tab" tabindex="0">
                                <!-- News create form -->
                                <form action="/newslaravel/anews" method="POST" enctype="multipart/form-data">
                                    @csrf
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

                            <div class="tab-pane fade" id="nav-news-edit" role="tabpanel" aria-labelledby="nav-news-edit-tab" tabindex="0">
                                <!-- Disabled edit tab -->
                                <p>Edit tab is currently disabled.</p>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORY tab pane -->
                    <div class="tab-pane fade" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab" tabindex="0">

                        <!-- Category sub-tabs -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-category-tab" role="tablist">
                                <button class="nav-link active" id="nav-category-index-tab" data-bs-toggle="tab" data-bs-target="#nav-category-index" type="button" role="tab" aria-controls="nav-category-index" aria-selected="true">Index</button>
                                <button class="nav-link" id="nav-category-create-tab" data-bs-toggle="tab" data-bs-target="#nav-category-create" type="button" role="tab" aria-controls="nav-category-create" aria-selected="false">Create</button>
                                <button class="nav-link" id="nav-category-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-category-edit" type="button" role="tab" aria-controls="nav-category-edit" aria-selected="false" disabled>Edit</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-category-tabContent">
                            <div class="tab-pane fade show active" id="nav-category-index" role="tabpanel" aria-labelledby="nav-category-index-tab" tabindex="0">
                                <!-- Category index content -->
                                
                                <div>
                                    <table class="border table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Category ID</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Order</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            @foreach($categories as $category)
                                            
                                                <tr>
                                                    <td scope="row">{{$category->category_id}}</td>
                                                    <td>{{$category->category_name}}</td>
                                                    <td>{{$category->category_status}}</td>
                                                    <td>{{$category->category_order}}</td>
                                                    <td>
                                                        <form action="{{route('category.edit', $category->category_id)}}">
                                                            <input type="submit" value="Edit">
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            
                                            @endforeach
                                    </table>
                                </div>
                                
                                <!-- Add your category listing table here -->
                            </div>

                            <div class="tab-pane fade" id="nav-category-create" role="tabpanel" aria-labelledby="nav-category-create-tab" tabindex="0">
                                <!-- Category create form -->
                                <div>
                                    <form action="{{route('category.store')}}" method="POST">
                                        {{csrf_field()}}
                                        <table class="table boarder">
                                            <thead>
                                                <tr>
                                                    <th class="col">Category Id</th>
                                                    <th class="col">Category Name</th>
                                                    <th class="col">Status</th>
                                                    <th class="col">Order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>TBD</td>
                                                    <td class="row"><input type="text" name="category_name" class="form-control"></td>
                                                    <td>
                                                        <select name="category_status" class="form-select">
                                                            <option value="1">Active</option>
                                                            <option value ="0" selected>Inactive</option>    
                                                        </select>
                                                    </td>
                                                    <td><input type="integer" name="category_order" class="form-control"></td>
                                                    <td><input type="submit" value="create"></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                                        <!-- {{dd($categories)}} -->

                            <div class="tab-pane fade" id="nav-category-edit" role="tabpanel" aria-labelledby="nav-category-edit-tab" tabindex="0">
                                <!-- Disabled edit tab -->
                                <div>
                                    <form action="{{route('category.update', $news->category_id)}}" method="POST">
                                        {{csrf_field()}}
                                        <table class="table boarder">
                                            <thead>
                                                <tr>
                                                    <th class="col">Category Id</th>
                                                    <th class="col">Category Name</th>
                                                    <th class="col">Status</th>
                                                    <th class="col">Order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <input type="hidden" name="_method" value="PUT">

                                                    <td><input type="text" name="category_name" class="form-control" value="{{$items->category_name}}"></td>
                                                    <td>
                                                        <select name="category_status" class="form-select">
                                                            <option value="1" @if($items->category_status == 1) selected @endif>Active</option>
                                                            <option value="0" @if($items->category_status == 0) selected @endif>Inactive</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="integer" name="category_order" class="form-control" value="{{$items->category_order}}"></td>
                                                    <td><input type="submit" value="Update"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
