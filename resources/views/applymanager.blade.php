@extends('layouts.master')
@section('title', 'Clean Blog')

@section('content')

	<!-- Breadcrumbs-->
	<!-- Example DataTables Card-->
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th width="30" style="text-align: center">#</th>
						<th>教室</th>
						<th>班級</th>
						<th>姓名</th>
						<th>電話</th>
						<th>日期</th>
						<th>開始時間</th>
						<th>結束時間</th>
						<th>申請事由</th>
						<th>審核狀態</th>
						<th width="100" style="text-align: center">取消申請</th>
					</tr>
					</thead>
					<tbody>
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
							<td>@if($apply->status ==0)
									尚未審核
								@elseif(($apply->status==1))
									審核通過
								@elseif(($apply->status==2))
									審核不通過
								@endif</td>
							<td>
								@if(($apply->status ==0))
								<form action="{{ route('applymanager.destroy', $apply->id) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button class="btn btn-danger ">取消申請</button>
								</form>
								@elseif(($apply->status==1))
								<p class="text-danger & text-center"><strong>無法取消</strong></p>
								@elseif(($apply->status==2))
								<p class="text-danger & text-center"><strong>無法取消</strong></p>

								@endif

							</td>
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

@endsection



