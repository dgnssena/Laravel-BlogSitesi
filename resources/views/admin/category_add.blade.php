@extends('layouts.admin')
@section('title','Category Add')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Category</h3>
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
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">

                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <form role="form"action="{{route('admin_category_create')}}" method="post"></form>
                                    <div class="x_content">
                                        <br>
                                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Id <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="id" required="required" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Parent_Id">Parent_Id <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="last-name" name="parent_id," required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Parent_Id">Tıtle <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="last-name" name="parent_id," required="required" class="form-control">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Keywords</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input id="middle-name" class="form-control" type="text" name="keyword">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input id="middle-name" class="form-control" type="text" name="description">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Slug</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input id="middle-name" class="form-control" type="text" name="slug">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select class="form-control " name="status" >
                                                    <option selected="selected">False</option>
                                                    <option>True</option>
                                                </select>
                                            </div>
                                                <div class="ln_solid"></div>
                                                <div class="item form-group">
                                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                                        <button class="btn btn-primary" type="button">Cancel</button>
                                                        <button class="btn btn-primary" type="reset">Reset</button>
                                                        <button type="submit" class="btn btn-success">Add Category</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
