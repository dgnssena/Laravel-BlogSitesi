@extends('layouts.home')

@section('title', $data->title)
@section('description', $data->description)
@section('keywords', $data->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">

            <h1 class="mt-4 mb-3"> About Us </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> içeriklerr </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">

                <div class="col-lg-16">

                </div>
            </div>

        </div>

    </div>
@endsection
