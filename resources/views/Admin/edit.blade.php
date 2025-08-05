@extends('Layout.admin')
@section('edit')
    
    <section class="bg-light text-dark p-8">
        <div class="container">
            <div class="align-item-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Phones</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Laptops</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Watches</button>
                    </li>
                    
                </ul>
                <div class="tab-content " id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Index</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Create</button>
                                <!-- <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button> -->
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <table class="table">
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
                                            <form action="/newslaravel/admin/{{$pot->unique_news_id}}" method="post" enctype="multipart/form-data">
                                                
                                                {{csrf_field()}}
                                                <th scope="row">{{$pot->unique_news_id}}</th>
                                                <input type="hidden" name="_method" value="PUT">
                                                <td><input type="integer" name="category_id" value="{{$pot->category_id}}"></td>    
                                                <td><input type="text" name="news_title" value="{{$pot->news_title}}"></td>
                                                <td><input type="text" name="news_short_discription" value="{{$pot->news_short_description}}"></td>
                                                <td><input type="text" name="news_long_discription" value="{{$pot->news_long_description}}"></td>
                                                <td><input type="file" name="new_image" value="image" value="{{$pot->new_image}}"></td>
                                                <td><input type="integer" name="news_status"value="{{$pot->news_status}}"></td>
                                                <td><input type="number" name="views_count" value="{{$pot->views_count}}"></td>
                                                <td><input type="text" name="author_name" value="{{$pot->author_name}}"></td>
                                                <td><input type="submit" value="update"></td>
                                                <td><a href="/newslaravel/admin" class="btn">Cancel</a></td>
                                            </form>
                                            

                                        </tr>
                                    </tbody>
                                </table>
                            
                            
                            
                            </div>
                            
                            
                            
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
                            <!-- <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div> -->
                        </div>
                    </div>


                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                </div>

            </div>
        </div>
    </section>

@endsection