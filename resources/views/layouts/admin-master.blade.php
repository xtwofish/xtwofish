<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>管理後臺-Classroom Application</title>
    <!-- Bootstrap core CSS-->
    <link href=" {{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href=" {{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{asset('datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('admin.index') }}">管理後臺</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            {{--審核申請--}}
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <span class="nav-link-text">
                        <i class="fa fa-fw fa-bell-o"></i> 審核申請
                    </span>
                </a>
            </li>
            {{--教室狀態--}}
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="{{ route('cards.index') }}">
                    <span class="nav-link-text">
                        <i class="fa fa-fw fa-check-circle-o"></i> 教室狀態
                    </span>
                </a>
            </li>
            {{--歷史紀錄--}}
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="{{ route('history.index') }}">
                    <span class="nav-link-text"
                    ><i class="fa fa-fw fa-clock-o"></i> 歷史紀錄
                    </span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-toggle="modal" data-target="#exampleModal">--}}
                    {{--<i class="fa fa-fw fa-sign-out"></i>登出</a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-fw fa-sign-out"></i>登出
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">

        @yield('content')
        @include('layouts.partials.admin-footer')
    </div>
</div>