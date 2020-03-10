@extends('frontend.master.layout')
@section('title',"Trang Chủ")

@section('content')
<div class="plan">
	<div class="container">
		<h3 class="plan-text">
		</h3>
		<div class="block-search">
			<form class="search-wrapper cf">
				<input type="text" placeholder="Search..." required="">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
</div>
<div class="news" style="padding-top: 80px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="news-list">
					<div class="row">
						@foreach($posts as $value)
						<div class="news-list-block">
							<div class="col-4">
							<a href="{{ route('home.show',$value->id) }}">
								@foreach ($value->ShowOneImage as $item)
								<img class="news-img" src="storage/{{ $item->image   }}" width="100%" height="200px">
								@endforeach
							</a>
							</div>
							<div class="col-8 news-text">
								<h4 class="news-list-title"><a href="">{{ $value->title }}</a></h4>
								<i class="far fa-calendar-alt"></i>
								<p>{!! $value->content !!}</p>
								<p> Like: {!! $value->likes !!}</p>
							</div>
						</div>
						<hr style="width: 100%;background-color: #ccc">
						@endforeach
					</div>
				</div>
			</div>
			<!---- end lien quan -->
		</div>

		<!-- Page -->

	</div>
</div>
@endsection

