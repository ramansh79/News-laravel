@extends('News.index')
@section('aindex')
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

                
            </div>
        </div>
    </section>

@endsection
