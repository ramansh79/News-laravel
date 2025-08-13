@extends('Layout.admin')
@section('categoryindex')
    <div>
        <table class="row table">
            <thead>
                <tr>
                    <th scope="col">Category ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Order</th>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $categories)
            
                <tr>
                    <td>{{$categories->category_id}}</td>
                    <td>{{$categories->category_name}}</td>
                    <td>{{$categories->category_status}}</td>
                    <td>{{$categories->category_order}}</td>
                    <td>
                        <form action="{{route('category.edit', $categories->category_id)}}">
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
        
  

@endsection