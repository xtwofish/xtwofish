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
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

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
        <div class="top">
            <div  class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div  hidden class="col-md-6">
                        <div id="sb-search" class="sb-search">
                            <form  action="{{route('roomsearch')}}" method="get" class="form-inline">
                                <input class="sb-search-input " placeholder="請輸入關鍵字" type="text" value="" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search" title="Click to start searching"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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


@yield('content')
    @include('layouts.partials.footer')
</div>



