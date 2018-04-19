@extends('layouts.admin-master')

@section('title', 'Clean Blog')

@section('content')
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('admin.index') }}">管理後臺</a>
    </li>
    <li class="breadcrumb-item active">審核申請</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> 教室申請管理</div>
    <div class="card-body">
      <div class="table-responsive">
        @if(session('success'))
          <div class="alert alert-success">{{session('success')}}</div>
        @elseif(session('error'))
          <div class="alert alert-danger">{{session('error')}}</div>
        @endif
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
              <td>
                <form action="{{ route('admin.status', $apply->id) }}" method="POST">
                  <a href ="{{route('admin.status', ['id'=>$apply->id])}}" class="btn btn-success " type="submit" role="button">同意</a>
                  {{ csrf_field() }}

                </form>

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



@endsection