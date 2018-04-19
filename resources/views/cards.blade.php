@extends('layouts.admin-master')

@section('title', 'Clean Blog')

@section('content')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a href="{{ route('admin.index') }}">管理後臺</a>
          </li>
          <li class="breadcrumb-item active">教室狀態</li>
      </ol>
      <hr>
      <!-- Icon Cards-->
      <div class="row">
          {{--501--}}
          @foreach($class as $class)
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white  o-hidden h-100" style="background-color:#5592C2 ">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">{{$class->name}}</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.classtatus.index',$class->name) }}'>
              <span class="float-left">教室借用狀況</span>
              <span class="float-right">
              </span>
            </a>
          </div>
        </div>
              @endforeach



      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

@endsection