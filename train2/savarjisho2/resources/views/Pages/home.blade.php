@extends('Layouts.base')


@section('title',"Home Page")


@section('content')
    <h1 class="header-text">Welcome To Home Page</h1>
    <h2 class="caption-text">I lied on about page</h2>    
    <h2 class="thoughts-text">I like working on both ends of development</h2>    
    <form action='mail' method="POST">
        {{-- CSRF field (For web routes) --}}
        @csrf
        <input type="text" name="email">
        <button type="submit">Submit</button>
    </form>
@endsection

@push('css-file')
    @vite(['resources/css/home.css'])
@endpush
    