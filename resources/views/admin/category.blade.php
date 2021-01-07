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

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 col-sm-6  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Stripped table <small>Stripped table subtitle</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>#</th>
                                            <th>parent_id</th>
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
                                            <td>{{$rs->parent_id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>Edit</td>
                                            <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a></td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="x_content">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->


@endsection
