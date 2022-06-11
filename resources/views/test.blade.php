@extends('app')

@section('title','confirm_booking')
@section('style')
    <link rel="stylesheet" href="{{asset('css/confirm_booking.css')}}" media="screen">
@endsection

@section('section')
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="enter">
        </div>
    </form>
@endsection

