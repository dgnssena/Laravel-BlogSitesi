
@extends('layouts.home')
@section('title', 'User Profile')
@section('content')

    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{route('user_apartment_add')}}" type="button" class="btn-bd-primary">Add Apartment</a>
                @include('home.usermenu')
            </div>
        </div>
    </section>
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
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

                    <th colspan="2" > Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($datalist as $rs)
                    <tr>

                        <td>{{$rs->id}}</td>
                        <td>

                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$category->title)}}

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
                        <td><a href="{{route('admin_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100 height=700')"><img src="{{asset('assets/admin/images')}}/gallery_ıcon.png" height="50"></a></td>
                        <td>{{$rs->slug}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit_icon.png" height="41"></a></td>
                        <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete_icon.png" height="41"></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
