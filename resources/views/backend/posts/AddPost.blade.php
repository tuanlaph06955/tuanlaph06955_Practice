@extends('backend.masster.layout')
@section('title',"Add_Posts")

@section('content')
<div class="app-title">

</div>
<div class="row">
  <div class="col-md-12">
	<div class="tile">
	  <section class="invoice">
		<div class="row mb-4">
		  <div class="col-6">
			<h4 class="page-header">Thêm Bài Viết</h4>
		  </div>
		  <div class="col-6">
			<h5 class="text-right"></h5>
		  </div>
		</div>
		<div class="row">
		  <div class="col-12 table-responsive">

			<div style="margin-top: 20px;margin-left:-15px" class="row">
				<div class="col-xs-6 col-md-12 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-body">
							@if(session('thongbao'))
									<div class="alert bg-success" style="height: 40px" role="alert">
										<span class="glyphicon glyphicon-remove">{{ session('thongbao') }}</span>
									</div>
									@endif
									<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
										@csrf
							<div class="row" style="margin-bottom:40px">
								 
										<div class="col-md-11">
											<div class="form-group">
												<label>Tiêu đề</label><br>
												{!! ShowErrors($errors,'title') !!}
											<input type="text" name="title" class="form-control" value="{{ old('title')}}">
											</div>

											
											<div class="form-group">
												<label>Nội dung</label><br>
												{!! ShowErrors($errors,'content') !!}
												<textarea name="content" style="width: 100%;height: 100px;">{{ old('content')}}</textarea>
											</div>
											<div class="tile-footer">
												<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
											</div>
										</div>
							</div>
							<div class="clearfix"></div>
							</form>
						</div>
					</div>
		
				</div>
			</div>
			
		  </div>
		</div>
@endsection