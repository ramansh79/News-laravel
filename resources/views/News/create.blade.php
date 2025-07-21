@extends('Layout.header')
@section('create')

    <form action="/news" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        



        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">category_id</label>
                <input type="integer" class="form-control" name="category_id" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Title of News</label>
                <input type="text" class="form-control" name="news_title" id="inputEmail4">
            </div>
            <div class="col-12">
                <label for="inputLDescription" class="form-label">News Long Description</label>
                <textarea class="form-control" id="inputLDescription" name="news_long_description" placeholder="Specs"></textarea>
            </div>
            <div class="col-12">
                <label for="inputSDescription" class="form-label">News Short Description</label>
                <input type="text" class="form-control" id="inputSDescription" name="news_short_description" placeholder="size of phone">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Insert image</label>
                <input class="form-control" name="new_image" type="file" id="formFile">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="news_status" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Released
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="news_status" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Unreleased
                </label>
            </div>
             <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Views count</label>
                <input type="text" class="form-control" name="views_count" id="inputEmail4">
            </div>       
             <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Author Name</label>
                <input type="text" class="form-control" name="author_name" id="inputEmail4">
            </div>
            
            
           
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </form>
@endsection