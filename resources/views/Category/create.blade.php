@extends('Layout.admin')
@section('categoryCreate')

    <form action="{{ route('category.store') }}" method="POST">
        {{csrf_field()}}
        <input type="text" name="category_name" class="form-control">
        <select name="category_status" class="form-select">
            <option value="1">Active</option>
            <option value ="0" selected>Inactive</option>    
        </select>
        <input type="integer" name="category_order" class="form-control">
        <input type="submit" value="create">
    </form>


@endsection