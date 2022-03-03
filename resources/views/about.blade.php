@extends('layout.base')

@section('title','ini galery')
@section('link')
<link rel="stylesheet" href="{{ asset('css/style-galeri.css') }}" >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
@endsection

@section('container')

<div class="container pt-3">
	<div class="row">
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="0">
				<img src="{{ asset('storage/1646284587_Screenshot from 2021-10-06 22-10-36.png')  }}">
			</a>
		</div>
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="1">
				<video>
					<source src="{{ asset('storage/1646305678_ta21.mp4') }}" type="video/mp4">
				</video>
				<div class="playpause"></div>
			</a>
		</div>
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="2">
				<img src="{{ asset('storage/1646284587_Screenshot from 2021-10-06 22-10-36.png')  }}">
			</a>
		</div>
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="3">
				<video>
					<source src="{{ asset('storage/1646305678_ta21.mp4') }}" type="video/mp4">
				</video>
				<div class="playpause"></div>
			</a>
		</div>
	</div>
</div>

<div class="modal fade and carousel slide" id="media" tabindex="-1" role="dialog" aria-labelledby="media" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered mw-100 m-0" role="document">
		<div class="modal-content align-items-center vh-100">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body d-flex align-items-center mb-5">
				<div id="media-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
					<ol class="carousel-indicators">
						<li data-target="#media-carousel" data-slide-to="0"class="active"></li>
						<li data-target="#media-carousel" data-slide-to="1"></li>
						<li data-target="#media-carousel" data-slide-to="2"></li>
						<li data-target="#media-carousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="{{ asset('storage/1646284587_Screenshot from 2021-10-06 22-10-36.png')  }}">
						</div>
						<div class="carousel-item">
							<video id="carousel-video" controls>
								<source src="{{ asset('storage/1646305678_ta21.mp4') }}" type="video/mp4">
							</video>
						</div>
						<div class="carousel-item">
							<img src="{{ asset('storage/1646284587_Screenshot from 2021-10-06 22-10-36.png')  }}">
						</div>
						<div class="carousel-item">
							<video id="carousel-video" controls>
								<source src="{{ asset('storage/1646305678_ta21.mp4') }}" type="video/mp4">
							</video>
						</div>
					</div>
					<a class="carousel-control-prev" href="#media-carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#media-carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<!-- <script src="{{ asset('js/lightbox.js') }}"></script> -->

<script type="text/javascript">
	// Pause video when sliding
	$('#media-carousel').on('slide.bs.carousel', function () {
		const video = $(this).find('.carousel-inner .active video');
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

