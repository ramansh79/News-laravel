@extends('News.index')
@section('aindex')
    <section class="bg-light text-dark p-8">
        <div class="container">
            <div class="align-item-center">

                <!-- Top-level tabs: Category and News
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-category-tab" data-bs-toggle="pill" data-bs-target="#pills-category" type="button" role="tab" aria-controls="pills-category" aria-selected="false">Category</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-news-tab" data-bs-toggle="pill" data-bs-target="#pills-news" type="button" role="tab" aria-controls="pills-news" aria-selected="true">News</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab" tabindex="0">

                        <nav>
                            <div class="nav nav-tabs" id="nav-news-tab" role="tablist">
                                <button class="nav-link active" id="nav-news-index-tab" data-bs-toggle="tab" data-bs-target="#nav-news-index" type="button" role="tab" aria-controls="nav-news-index" aria-selected="true">Index</button>
                                <button class="nav-link" id="nav-news-create-tab" data-bs-toggle="tab" data-bs-target="#nav-news-create" type="button" role="tab" aria-controls="nav-news-create" aria-selected="false">Create</button>
                                <button class="nav-link" id="nav-news-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-news-edit" type="button" role="tab" aria-controls="nav-news-edit" aria-selected="false" disabled>Edit</button>
                            
                            </div>
                        </nav>

                    </div>
                </div> -->




                <div class="row">
                    <div class="col lg-3 ">
                        <ul>
                            <li> <a href="{{ url('/admin/user') }}">user</a>  </li>
                            <li> <a href="{{ url('/admin/news') }}">news</a> </li>
                            <li> <a href="{{ url('/admin/category') }}">category</a> </li>
                        </ul>
                    </div>
                    <div class="col lg-9">
                        hello world

                    </div>
                </div>

                
            </div>
        </div>
    </section>

@endsection
