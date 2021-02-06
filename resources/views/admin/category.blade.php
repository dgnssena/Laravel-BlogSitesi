@extends('layouts.admin')
@section('title','Category List')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Categories</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">

                            <a href="{{route('admin_category_add')}}"type="button" class="btn btn-info" style="width:200px">Add Category</a>



                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>parent</th>
                                                    <th>title</th>
                                                    <th>keywords</th>
                                                    <th>category</th>
                                                    <th>status</th>
                                                    <th>edit</th>
                                                    <th>delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                        @foreach ($datalist as $rs)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </td>

                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit_icon.png" height="41"></a></td>
                                            <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete_icon.png" height="41"></a></td>
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
        </div>
    </div>

    <!-- /page content -->


@endsection
