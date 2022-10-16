@extends('Layouts.base')

@section('title','About Page')

@section('content')
    <h1 class="header-text">Welcome To About Page</h1>
    <h2 class="caption-text">This is testing site so you want see anything intresting</h2>    
    <h2 class="thoughts-text">I prefer working on front-end :'(</h2>    
@endsection
@push('css-file')
    @vite(['resources/css/about.css'])
@endpush
    