@extends('layout.login')
@section('body')
    <form action="{{route('loginmatch')}}" method="POST">

        @csrf

        <input type="email" name="user_email" placeholder="type email">
        <input type="password" name="password" placeholder="type password">
        <input type="submit" value="login">
        
    </form>