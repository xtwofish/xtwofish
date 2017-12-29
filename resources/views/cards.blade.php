@extends('layouts.admin-master')

@section('title', 'Clean Blog')

@section('content')
      <!-- Breadcrumbs-->
           <h1>教室狀態</h1>
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
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
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
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
@endsection