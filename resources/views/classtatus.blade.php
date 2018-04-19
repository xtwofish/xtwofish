@include('layouts.app')
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Classroom Application-TwoFishWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Bootstrap 3 template for corporate business" />
    <!-- css -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/flexslider/flexslider.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('css/cubeportfolio.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    <!-- Theme skin -->
    <link id="t-colors" href="skins/default.css" rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg2.css" rel="stylesheet" type="text/css" />

    <!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->





</head>

<body>




<div id="wrapper">
    <!-- start header -->
    <header>
        {{--<div class="top">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}

                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div id="sb-search" class="sb-search">--}}
                            {{--<form>--}}
                                {{--<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">--}}
                                {{--<input class="sb-search-submit" type="submit" value="">--}}
                                {{--<span class="sb-icon-search" title="Click to start searching"></span>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href='{{ route('house.index') }}'><img src="{{asset('img/logo.png')}}" alt="" width="250" height="100" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href='{{ route('house.index') }}'>首頁</a></li>
                        <li><a href='{{ route('apply.index') }}'>申請</a></li>
                        <li><a href='{{ route('applymanager.index') }}'>申請管理</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->



    <!-- Breadcrumbs-->
    <!-- Example DataTables Card-->

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <div class="table-responsive">
                <hr class="colorgraph">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="30" style="text-align: center">#</th>
                        <th>教室</th>
                        <th>日期</th>
                        <th>開始時間</th>
                        <th>結束時間</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($applys as $apply)
                        <tr>
                            <td>{{$apply->id}}</td>
                            <td>{{$apply->class_id}}</td>
                            <td>{{$apply->req_date}}</td>
                            <td>{{$apply->req_start}}</td>
                            <td>{{$apply->req_end}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="loginmanager.blade.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
</div>
</body>

</html>

@include('layouts.partials.footer')
</div>



