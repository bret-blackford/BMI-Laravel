@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('head')
    <link href='/css/bmi.css' type='text/css' rel='stylesheet'>
@endsection

@section('content')
    <h1>{{ $title }}</h1>
    <p>mBret in resources/views/bmi/show.blade.php<br>
        Note: show.blade.php extends resources/views/layouts/master.blade.php</p>
    
    <p>
        Details about this project will go here...
    </p>
@endsection

