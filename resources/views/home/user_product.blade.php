@extends('layouts.user')
@section('title','My Blog')

@section('content')

    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active"> User Blog</li>
        </ol>
    </div>
    </div>
    </div>
    <div class="blog-main">
        <div class="container">


            <div class="col-md-4 blog--side">
                <div class="card my-4">
                    <h5 class="card-header">Menu</h5>
                    <div class="card-body">
                        @include('home.usermenu')
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                            <div class="x_title">

                                <a href="{{route('user_product_add')}}" type="button" class="btn btn-info" style="width:100%">Add product</a>


                                <div class="x_content" >
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>

                                                    <th>id</th>
                                                    <th>category</th>
                                                    <th>title</th>
                                                    <th>description</th>
                                                    <th>post</th>
                                                    <th>like</th>
                                                    <th>image</th>
                                                    <th>image gallery</th>
                                                    <th>slug</th>
                                                    <th>status</th>
                                                    <th>edit</th>
                                                    <th>delete</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $rs)
                                                    <tr>

                                                        <td>{{$rs->id}}</td>
                                                        <td>

                                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}

                                                        </td>
                                                        <td>{{$rs->title}}</td>
                                                        <td>{{$rs->description}}</td>
                                                        <td>{{$rs->post}}</td>
                                                        <td>{{$rs->like}}</td>
                                                        <td>
                                                            @if($rs->image)
                                                                <img src="{{ Storage::url($rs->image)}}" height="50" alt="">
                                                            @endif
                                                        </td>
                                                        <td><a href="{{route('user_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100 height=700')"><img src="{{asset('assets/admin/images')}}/gallery_ıcon.png" height="50"></a></td>
                                                        <td>{{$rs->slug}}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td><a href="{{route('user_product_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit_icon.png" height="41"></a></td>
                                                        <td><a href="{{route('user_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete_icon.png" height="41"></a></td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
