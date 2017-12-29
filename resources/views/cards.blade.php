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
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">501</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.one.index') }}'>
              <span class="float-left">教室借用狀況</span>
              <span class="float-right">
              </span>
            </a>
          </div>
        </div>
          {{--502--}}
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">502</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.two.index') }}'>
                <span class="float-left">教室借用狀況</span>
              <span class="float-right">
              </span>
            </a>
          </div>
        </div>
          {{--503--}}
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">503</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.three.index') }}'>
                <span class="float-left">教室借用狀況</span>
              <span class="float-right">
              </span>
            </a>
          </div>
        </div>
          {{--504--}}
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                {{--<i class="fa fa-fw fa-support"></i>--}}
              </div>
              <div class="mr-5">504</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.four.index') }}'>
                <span class="float-left">教室借用狀況</span>
              <span class="float-right">
              </span>
            </a>
          </div>
        </div>
          {{--509--}}
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          {{--<i class="fa fa-fw fa-support"></i>--}}
                      </div>
                      <div class="mr-5">509</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.nine.index') }}'>
                      <span class="float-left">教室借用狀況</span>
                      <span class="float-right">
              </span>
                  </a>
              </div>
          </div>
          {{--510--}}
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-secondary o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          {{--<i class="fa fa-fw fa-support"></i>--}}
                      </div>
                      <div class="mr-5">510</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.one.index') }}'>
                      <span class="float-left">教室借用狀況</span>
                      <span class="float-right">
              </span>
                  </a>
              </div>
          </div>
          {{--511--}}
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-info o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          {{--<i class="fa fa-fw fa-support"></i>--}}
                      </div>
                      <div class="mr-5">511</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.one.index') }}'>
                      <span class="float-left">教室借用狀況</span>
                      <span class="float-right">
              </span>
                  </a>
              </div>
          </div>
          {{--513--}}
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          {{--<i class="fa fa-fw fa-support"></i>--}}
                      </div>
                      <div class="mr-5">513</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.one.index') }}'>
                      <span class="float-left">教室借用狀況</span>
                      <span class="float-right">
              </span>
                  </a>
              </div>
          </div>
          {{--514--}}
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          {{--<i class="fa fa-fw fa-support"></i>--}}
                      </div>
                      <div class="mr-5">514</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.one.index') }}'>
                      <span class="float-left">教室借用狀況</span>
                      <span class="float-right">
              </span>
                  </a>
              </div>
          </div>
          {{--516--}}
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          {{--<i class="fa fa-fw fa-support"></i>--}}
                      </div>
                      <div class="mr-5">516</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.one.index') }}'>
                      <span class="float-left">教室借用狀況</span>
                      <span class="float-right">
              </span>
                  </a>
              </div>
          </div>


      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

@endsection