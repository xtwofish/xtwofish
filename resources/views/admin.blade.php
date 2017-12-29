@extends('layouts.admin-master')

@section('title', 'Clean Blog')

@section('content')
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> 教室申請管理</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
            <th width="30" style="text-align: center">id</th>
            <th>class_id</th>
            <th>user_class</th>
            <th>user_name</th>
            <th>user_phone</th>
            <th>req_date</th>
            <th>req_start</th>
            <th>req_end</th>
            <th>req_reason</th>
            <th>status</th>
            <th>功能</th>
          </tr>
          </thead>
          <tfoot>
          <tr>
            <th width="30" style="text-align: center">id</th>
            <th>class_id</th>
            <th>user_class</th>
            <th>user_name</th>
            <th>user_phone</th>
            <th>req_date</th>
            <th>req_start</th>
            <th>req_end</th>
            <th>req_reason</th>
            <th>status</th>
            <th>功能</th>
          </tr>
          </tfoot>
          <tbody>

          {{--將對應的資料傳到對應的欄位--}}
          @foreach($applys as $apply)
            <tr>
              <td>{{$apply->id}}</td>
              <td>{{$apply->class_id}}</td>
              <td>{{$apply->user_class}}</td>
              <td>{{$apply->user_name}}</td>
              <td>{{$apply->user_phone}}</td>
              <td>{{$apply->req_date}}</td>
              <td>{{$apply->req_start}}</td>
              <td>{{$apply->req_end}}</td>
              <td>{{$apply->req_reason}}</td>
              <td>{{($apply->status)?'yes':'not'}}</td>
              <td>
                {{--<form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">--}}
                {{--{{ csrf_field() }}--}}
                {{--{{ method_field('DELETE') }}--}}
                {{--<button class="btn btn-link">刪除</button>--}}
                {{--</form>--}}
                {{--/--}}
                <form method="post" action="/change">
                  <input type="hidden" name="visitaID" value="$applys->id"/>
                  <button class="btn btn-lg btn-success" type="submit">
                    update
                  </button>
                </form>
                {{--<button class="btn btn-success btn-update" data-id="{{$apply->status}}">update</button>--}}

              </td>
            </tr>
          @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="js/sb-admin-datatables.min.js"></script>

@endsection