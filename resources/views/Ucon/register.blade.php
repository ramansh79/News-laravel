@extends('Layout.login')
@section('body')
    <form action="{{route('registersave')}}" method="POST" >
        @csrf
        <input type="text" name="user_first_name" placeholder="type first name"><br>
        <input type="text" name="user_last_name" placeholder="type last name"><br>
        <input type="password" name="password" placeholder="type password"><br>
        <input type="email" name="user_email" placeholder="email"><br>
        <input type="text" name="user_gender" placeholder="gender"><br>
        <input type="text" name="user_name" placeholder = "enter full name">
        <input type="text" name="user_role" placeholder="type role"><br>

        <input class ="btn btn-primary" type="submit"  value="Create">

        
    </form>
    <button class ="btn btn-primary">click me</button>

    <a href="{{route('login')}}">Login</a>
@endsection