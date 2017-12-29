@extends('layouts.admin-master')

@section('title', 'Clean Blog')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">管理後臺</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('cards.index') }}">教室狀態</a>
        </li>
        <li class="breadcrumb-item active">504</li>
    </ol>
    <!-- Example DataTables Card-->

    <div class="card mb-3">
        <div class="col-xs-12 col-sm-8 col-md-12 col-sm-offset-2 col-md-offset-3">
            <div class="card-header">
                <i class="fa fa-table"></i>  歷史紀錄</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th width="30" style="text-align: center">id</th>
                            <th>申請教室</th>
                            <th>班級</th>
                            <th>姓名</th>
                            <th>電話</th>
                            <th>日期</th>
                            <th>開始時間</th>
                            <th>結束時間</th>
                            <th>申請事由</th>
                            <th>狀態</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th width="30" style="text-align: center">id</th>
                            <th>申請教室</th>
                            <th>班級</th>
                            <th>姓名</th>
                            <th>電話</th>
                            <th>日期</th>
                            <th>開始時間</th>
                            <th>結束時間</th>
                            <th>申請事由</th>
                            <th>狀態</th>
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
                                <td>{{($apply->status)?'審核成功':'尚未審核'}}</td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
@endsection