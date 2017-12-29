@extends('layouts.admin-master')

@section('title', 'Clean Blog')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">管理後臺</a>
        </li>
        </li>
        <li class="breadcrumb-item active">歷史紀錄</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
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
                            <td>{{($apply->status)?'審核成功':'審核不通過'}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->


@endsection