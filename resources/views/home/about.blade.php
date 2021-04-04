@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@extends('layouts.about')

@section('title', 'About Us')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <div class="col-sm-12"  href="{{route('aboutus')}}">

        <h1>WELCOME</h1>

        {{ $setting->aboutus}}


    </div>
@endsection

