@extends('Layouts.base')


@section('title','Mail Page')
    

@section('content')
    <h1 clas class="header-text">Welcome To Mail Page</h1>
    <h2 class="caption-text">Your Mail is</h2>    
    <h2 @class(['thoughts-text', 'enable-background' => $condition])>{{$mail}}</h2>  
@endsection

@push('css-file')
    @vite(['resources/css/home.css'])
@endpush