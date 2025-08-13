@extends('Layout.admin')
@section('categoryedit')

    <form action="{{route('category.update', $items->category_id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        <input type="text" name="category_name" class="form-control" value="{{$items->category_name}}">
        <select name="category_status" class="form-select" >
            <option value="1" @if($items->category_status == '0') selected @endif>Active</option>
            <option value="0" @if($items->category_status == '1') selected @endif>Inactive</option>    
        </select>
        <input type="integer" name="category_order" class="form-control" value="{{$items->category_order}}">
        <input type="submit" class="form-control" value="Update">

    </form>
    <form action="{{route('category.destroy', $items->category_id)}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="form-control" value="Delete">
    </form>

@endsection