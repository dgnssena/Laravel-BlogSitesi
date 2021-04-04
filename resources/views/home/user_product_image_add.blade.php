<html>
<head>
    <title>Admin Image Gallery</title>
    <link rel="icon" href="{{ asset('assets') }}/admin/production/images/favicon.ico" type="image/ico" />

    <title>@yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- NProgress -->
    <link href="{{ asset('assets') }}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets') }}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets') }}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

</head>
<body>





            <form role="form" action="{{route('user_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal " >
                @csrf
                <div class="form-group  ">
                    <label class="control-label col-md-3 col-sm-3 ">Title</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="title" class="form-control" name="title">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 ">Image</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="file" class="form-control" name="Image">
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="submit" class="btn btn-success">Add Image</button>
                    </div>
                </div>
                <div class="x_content" >
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>id</th>
                                    <th>title</th>
                                    <th>image</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{ Storage::url($rs->image)}}" height="50" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{route('user_product_delete',['id'=>$rs->id,'product_id'=>$data->id ])}}" onclick="return confirm('Record will be delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete_icon.png" height="41"></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>

</body>
</html>



