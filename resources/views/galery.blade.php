@extends('layout.base')

@section('title','Gallery | Migunani')
@section('link')
<link rel="stylesheet" href="{{ asset('css/style-galeri.css') }}" >
@endsection

@section('nav')
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light"  id="scrolls">
		<a class="navbar-brand ml-3" href="#">
			<img src="{{ asset('image/logo1.png') }}" class="nav-galery" alt="" id="img-scroll">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav ml-auto mr-5">
@if (Session('login'))
				<li class="nav-item" >
					<a class="nav-link " href="/admin">Admin <span class="sr-only">(current)</span></a>
				</li>
@endif
				<li class="nav-item" >
					<a class="nav-link  " href="/">Beranda</a>
				</li>
				<li class="nav-item" >
					<a class="nav-link "  href="/galery">Galeri</a>
				</li>
				<li class="nav-item" >
					<a class="nav-link"  href="/#harga">Harga</a>
				</li>
				<li class="nav-item" >
					<a class="nav-link"  href="/#tentang">Tentang</a>
				</li>
			</ul>
		</div>
	</nav>
@endsection

@section('container')
	<div class="container pt-3 mt-5" >
		<div class="col-sm-12 text-center mt-5">
			<h3><strong>Galeri</strong></h3>
			<hr class="hr-home">
		</div>

		<div class="container kategori">
			<?php if($kategori== "Arsitektur"): ?>
			<a class="btn btn-outline-secondary mb-4" href="/galery"> All</a>
			<a class="btn btn-info mb-4" href="?kategori=Arsitektur"> Arsitektur</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Interior"> Interior</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Pembangunan"> Pembangunan</a>

			<?php elseif($kategori== "Interior"): ?>
			<a class="btn btn-outline-secondary mb-4" href="/galery"> All</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Arsitektur"> Arsitektur</a>
			<a class="btn btn-info mb-4" href="?kategori=Interior"> Interior</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Pembangunan"> Pembangunan</a>

			<?php elseif($kategori== "Pembangunan"): ?>
			<a class="btn btn-outline-secondary mb-4" href="/galery"> All</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Arsitektur"> Arsitektur</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Interior"> Interior</a>
			<a class="btn btn-info mb-4" href="?kategori=Pembangunan"> Pembangunan</a>
			
			<?php else:?>
			<a class="btn btn-secondary mb-4" href="/galery"> All</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Arsitektur"> Arsitektur</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Interior"> Interior</a>
			<a class="btn btn-outline-info mb-4" href="?kategori=Pembangunan"> Pembangunan</a>
			<?php endif ?>
		</div>
		<div class="row">
			<?php $count_thumb = 0;?>
			@foreach($data as $data_file)
			
				@if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
				<div class="col-6 col-sm-6 col-lg-3 col-xl-3 mb-3">
					<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="{{$count_thumb}}">
						<img src="{{ asset('storage/'.$data_file->file) }}">
					</a>
					<h6 class="text-thumb card-title text-center my-2 ">{{$data_file->judul}}</h6>
				</div>
				@endif

				@if($data_file->type =='mp4' || $data_file->type =='3gp') 
				<div class="col-6 col-sm-6 col-lg-3 col-xl-3 mb-3">
					<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="{{$count_thumb}}">
						<video>
							<source src="{{ asset('storage/'.$data_file->file) }}" type="video/mp4">
						</video>
						<div class="playpause"></div>
					</a>
					<h6  class="text-thumb card-title text-center my-2  ">{{$data_file->judul}}</h6>
				</div>
				@endif
				<?php $count_thumb++;?>
			@endforeach

		</div>
	</div>

	<div class="galery modal fade and carousel slide" id="media" tabindex="-1" role="dialog" aria-labelledby="media" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered mw-100 m-0" role="document">
			<div class="modal-content align-items-center vh-100">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body d-flex align-items-center mb-5">
					<div id="media-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
						<ol class="carousel-indicators">
						<?php $count_indicator= 0;?>
						@foreach($data as $data_file)
						<?php $count_indicator++;	?>
								@if($count_indicator==1)
									<li data-target="#media-carousel" data-slide-to="{{ $count_indicator}}" class="active"></li>
								@endif
								@if($count_indicator>1)
									<li data-target="#media-carousel" data-slide-to="{{ $count_indicator}}"></li>
								@endif
								
							@endforeach
						</ol>
						<div class="carousel-inner">
							<?php $count_preview = 0;?>

							@foreach($data as $data_file)
								<?php $count_preview++;	?>
								@if($count_preview==1)
									@if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
										<div class="galery carousel-item active">
											<img src="{{ asset('storage/'.$data_file->file) }}">
											<h6 class="  text-display card-title color-white my-2">{{$data_file->judul}}</h6>
										</div>
										@endif
										@if($data_file->type =='mp4' || $data_file->type =='3gp') 
										<div class="galery carousel-item active">
											<video id="carousel-video" controls>
												<source src="{{ asset('storage/'.$data_file->file) }}" type="video/mp4">
											</video>
											<h6 class="text-display card-title text-center my-2 ">{{$data_file->judul}}</h6>
										</div>
										@endif
									@endif
								@if($count_preview>1)
									@if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
									<div class="galery carousel-item ">
										<img src="{{ asset('storage/'.$data_file->file) }}">
										<h6 class="card-title color-white my-2 text-display">{{$data_file->judul}}</h6>
									</div>
									@endif					
									@if($data_file->type =='mp4' || $data_file->type =='3gp') 
									<div class="galery carousel-item">
										<video id="carousel-video" controls>
											<source src="{{ asset('storage/'.$data_file->file) }}" type="video/mp4">
											<h6 class="card-title text-center my-2 text-display">{{$data_file->judul}}</h6>
										</video>
									</div>
									@endif
								@endif
							@endforeach
						</div>
						<a class="galery carousel-control-prev" href="#media-carousel" role="button" data-slide="prev">
							<span class="galery carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="galery carousel-control-next" href="#media-carousel" role="button" data-slide="next">
							<span class="galery carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@include('layout.foot')
<div class="preloading">
	<div class="textpreload">
		<img src="{{asset('image/load.gif') }}" alt="" srcset="">
	</div>
</div> 
@endsection

@section('script')
<!-- <script src="{{ asset('js/lightbox.js') }}"></script> -->

<script type="text/javascript">
	window.onload = function() {
		document.getElementsByClassName('preloading')[0].style.display = 'none';
	}

	// Pause video when sliding
	$('#media-carousel').on('slide.bs.carousel', function () {
		const video = $(this).find('.carousel-inner .active video');
		if(video.length) {
			video.get(0).pause();
		}
	});

	// Stop video when sliding
	$('#media.carousel .close').on('click',function(){
		const video = $('#media-carousel').find('.carousel-inner .active video');
		if(video.length) {
			video.get(0).pause();
		}
	});

	// Click backdrop to close
	$(document).click(function(e){
		if ( $('.modal.and.carousel').hasClass('show') ) {
			if ( $(e.target).closest('#media-carousel>*').length > 0 ) {
				return true;
			};
			$('button.close').click();
		};
	});
</script>
 
@endsection

