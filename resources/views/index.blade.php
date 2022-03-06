@extends('layout.base')
@section('title',' Home | Migunani ')

@section('nav')
	<nav class="navbar navbar-expand-lg fixed-top navbar-light "  id=scrolls>
		<a class="navbar-brand ml-3" href="#">
			<img src="{{ asset('image/logo1.png') }}"    class="nav" alt="" id=img-scroll>
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
					<a class="nav-link" href="/">Beranda</a>
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

@section('jumbotron')

	<div id="carouselExampleIndicators" class="carousel carousel-home slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active parent">
				<div class="layer"></div>
				<img src="{{asset('image/interior.jpg') }}" class="d-block banner" alt="...">
			</div>
			<div class="carousel-item parent">
				<div class="layer"></div>
				<img src="{{asset('image/4.png') }}" class="d-block banner" alt="...">
			</div>
			<div class="carousel-item parent">
				<div class="layer"></div>
				<img src="{{asset('image/5.png') }}" class="d-block banner" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
@endsection

@section('container')

	<section class="layer-gray">
		<div class="container ">   
			<div class="row" >
				<div class="col-sm-12 text-center mt-5">
					<h3><strong>Profil</strong></h3>
					<hr class="hr-home">
				</div>
			</div>
			<div class="row my-3">
				<div class="col-sm-3">
					<img src="{{asset('image/logo1.png') }}" class="img-fluid" alt="" width=350 height=350>
				</div>
				<div class="col-sm-4 quote mb-3">
					<blockquote>Berpengalaman lebih dari <strong>satu dekade</strong>, dalam dunia desain & pembangunan. Bekerja dengan tim yang profesional, layanan 24 jam, terpercaya dan berkualitas.</blockquote>
				</div>
				<div class="col-sm-5 profile">   
					<p>Migunani Architect Studio, merupakan studio desain arsitektur & interior online berbasis di yogyakarta. Dengan pengalaman lebih dari satu dekade dalam perancangan bangunan maupun pembangunan. Meliputi, Desain/pembangunan ‘Residential’ seperti Rumah, Villa, Resort, Guest House. Maupun ‘Commercial Building’ seperti Cafe, Restaurant, Bar, dan bangunan lainnya dengan jangkauan wilayah mencakup seluruh Indonesia. Dikerjakan oleh tim profesional yang berpengalaman kami mengutamakan ketepatan dan kecepatan dalam pengerjaan setiap projectnya. Guna mengakomodir kebutuhan klien semaksimal mungkin.</p>
				</div>
			</div>
			<div class="row" >
					<div class="col-sm-12 text-center">
						<h4 >Pelayanan</h4>
						<hr class="hr-home">
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4 ">
					<img src="{{ asset('image/interior2.jpg') }}" class="content_img">
					<h6>Desain Arsitektur</h6>
					<p class="describe-service">Jasa Desain Arsitektur baik ‘Residential’ maupun ‘Commercial Building’ meliputi Rumah Tinggal, Villa, Cafe, Restaurant, Indekost dan lain-lain.</p>
						
				</div>
				<div class="col-md-4 ">
					<img src="{{ asset('image/interior3.jpg') }}" class="content_img">
					<h6>Desain Interior</h6>
					<p class="describe-service">Jasa Desain Interior meliputi bangunan hunian maupun komersial dengan berbagai macam konsep seperti : Minimalis, Rustic, Classic, Tropical.</p>
							
				</div>
				<div class="col-md-4 ">
					<img src="{{ asset('image/modern.jpg') }}" class="content_img">
					<h6>Pembangunan</h6>
					<p class="describe-service">Jasa Pembangunan baik ‘Residential’ maupun ‘Commercial Building’ meliputi Rumah Tinggal, Villa, Cafe, Restaurant, Indekost dan Dikerjakan oleh Tim profesional dengan pengalaman lebih dari satu dekade.</p>
							
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="row" >
			<div class="col-sm-12 text-center mt-5">
				<h3><strong>Galeri</strong></h3>
				<hr class="hr-home">
			</div>
		</div>
		<div class=" mb-5">
			<div class="row">
<?php $count_thumb = 0;?>
@foreach($data as $data_file)
				
	@if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
					<div class="col-6 col-sm-6 col-lg-3 col-xl-3 mb-3">
						<div class="container-galery">
							<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="{{$count_thumb}}">
								<img src="{{ asset('storage/'.$data_file->file) }}" class="image-galery">
								<div class="middle-galery">
									<div class="text-galery">{{$data_file->judul}}</div>
								</div>
							</a>
						</div>
					</div>
	@endif
	@if($data_file->type =='mp4' || $data_file->type =='3gp') 
					<div class="col-6 col-sm-6 col-lg-3 col-xl-3 mb-3">
						<div class="container-galery">
							<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="{{$count_thumb}}">
								<video class="image-galery">
									<source src="{{ asset('storage/'.$data_file->file) }}" type="video/mp4" >
								</video>
								<div class="playpause"></div>
								<div class="middle-galery">
									<div class="text-galery">{{$data_file->judul}}</div>
								</div>
							</a>
						</div>
					</div>
	@endif
<?php $count_thumb++;?>
@endforeach

			</div>
			<div class="text-center">
				<a class="arrow-tag" href="/galery">
					<span class="arrow">See All</span>
					<svg class="icon-arrow" style="width:30px;height:30px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M14 16.94V12.94H5.08L5.05 10.93H14V6.94L19 11.94Z" />
					</svg>
				</a>
			</div>

		</div>

		<!-- modal -->
		<div class="galery modal fade and carousel slide" id="media" tabindex="-1" role="dialog" aria-labelledby="media" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-100 m-0" role="document">
				<div class="modal-content align-items-center vh-100">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="modal-body d-flex align-items-center mb-5">
						<div id="media-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
							<ol class="galery carousel-indicators">
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
	</section>

	<section class="layer-gray" id="harga">
		<div class="row" >
			<div class="col-sm-12 text-center mt-5">
				<h3><strong>Harga</strong></h3>
				<hr class="hr-home">
			</div>
		</div>
		<div class="container">	
			<h5 class="mb-4">Harga Paket Desain Arsitektur</h5>
			<div class="row price">
				<div class="col-md-3 mb-2 zoom">
					<div class="shadow rounded px-3 py-3 bg-light">
						<div class="container-paket">
							<h5 class="paket">Paket 1 </h5>
						</div>
						<h5 class="text-center"><strong>Rp 15.000</strong></h5>
						<ul class="list-unstyled">
							<li>
								<a href="#paket1" data-toggle="collapse" class="dropdown-toggle">Gambar Kerja (Detail Design)</a>
								<ul class="collapse" id="paket1">
									<li>Siteplan</li>
									<li>Denah</li>
									<li>Tampak (4)</li>
									<li>Potongan (1)</li>
								</ul>
							</li>
						</ul>
						<ul class="list-unstyled">
							<li>
								<a  >Gambar 3D Eksterior (2)</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 mb-2 zoom">
					<div class="shadow rounded px-3 py-3 bg-light">
						<div class="container-paket">
							<h5 class="paket">Paket 2</h5>
						</div>
						<h5 class="text-center"><strong>Rp 30.000</strong></h5>
						<ul class="list-unstyled">
							<li>
								<a href="#paket2" data-toggle="collapse" class="dropdown-toggle">Gambar Kerja</a>
								<ul class="collapse" id="paket2">
									<li>Situasi</li>
									<li>Siteplan</li>
									<li>Denah</li>
									<li>Tampak (4)</li>
									<li>Potongan (2)</li>
									<li>Rencana Pondasi</li>
									<li>Rencana Sloof</li>
									<li>Rencana Kolom</li>
									<li>Rencana Ring Balok</li>
									<li>Rencana Atap</li>
									<li>Rencana Pola Lantai</li>
									<li>Rencana Plafond</li>
									<li>Rencana Pintu & Jendela</li>
									<li>Rencana Installasi Listrik</li>
									<li>Rencana Sanitasi Air</li>
								</ul>
							</li>
						</ul>
						<ul class="list-unstyled">
							<li>
								<a data-toggle="collapse">Gambar 3D Eksterior (4)</a>
							</li>
						</ul>
						<ul class="list-unstyled">
							<li>
								<a data-toggle="collapse">Gambar 3D Interior (2) Ruang pilihan</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 mb-2 zoom">
					<div class="shadow rounded px-3 py-3 bg-light">
						<div class="container-paket">
							<h5 class="paket">Paket 3</h5>
						</div>
						<h5 class="text-center"><strong>Rp 80.000</strong></h5>
						<ul class="list-unstyled">
							<li>
								<a href="#paket3" data-toggle="collapse" class="dropdown-toggle">Gambar Kerja (Detail Design)</a>
								<ul class="collapse" id="paket3">
									<li>Situasi</li>
									<li>Siteplan</li>
									<li>Denah</li>
									<li>Tampak (4)</li>
									<li>Potongan (2)</li>
									<li>Rencana Pondasi</li>
									<li>Rencana Sloof</li>
									<li>Rencana Kolom</li>
									<li>Rencana Ring Balok</li>
									<li>Rencana Atap</li>
									<li>Rencana Pola Lantai</li>
									<li>Rencana Plafond</li>
									<li>Rencana Pintu & Jendela</li>
									<li>Rencana Installasi Listrik</li>
									<li>Rencana Sanitasi Air</li>
									<li>Detail Struktur</li>
									<li>Detail Atap</li>
									<li>Detail Pintu & Jendela</li>
									<li>Detail Pagar</li>
									<li>Detail Ornamen</li>
									<li>Detail Plumbing (Sanitasi)</li>
								</ul>
							</li>
						</ul>
						<ul class="list-unstyled">
							<li>
								<a>Gambar 3D Eksterior (8)</a>
							</li>
						</ul>
						<ul class="list-unstyled">
							<li>
								<a>Gambar 3D Interior (4)</a>
							</li>
						</ul>
						<ul class="list-unstyled">
							<li>
								<a>Video Animasi</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 mb-2 zoom">
					<div class="shadow rounded px-3 py-3 bg-light">
						<div class="container-paket">
							<h5 class="paket">Paket 4 </h5>
						</div>
						<h5 class="text-center"><strong>Rp 15.000</strong></h5>
						<ul class="list-unstyled">
							<li>
								<a href="#paket4" data-toggle="collapse" class="dropdown-toggle">Soft file Dokumen(RAB)</a>
								<ul class="collapse" id="paket4">
									<li>Contoh pdf RAB</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<h5 class="my-4">Harga Pembangunan</h5>
			<div class="row justify-content-center">
				<div class="col-md-3 mb-4 zoom">
					<div class="shadow rounded px-3 py-3 bg-light">
						<div class="container-paket">
							<h5 class="paket">Harga</h5>
						</div>
						<div>
							<ul class="list-unstyled">		
								<li>
									<a>Mengikuti wilayah lokasi pembangunan & Rencana anggaran biaya (RAB)</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="mb-4" id="tentang">
		<div class="row" >
			<div class="col-sm-12 text-center mt-5">
				<h3><strong>Tentang</strong></h3>
				<hr class="hr-home">
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h5>LAYANAN KONSULTASI 24 JAM, SEGERA HUBUNGI KAMI Migunani Architect Siap Membantu & Melakukan Yang Terbaik Untuk Anda</h5>
					<p>Di Migunani Architect setiap project akan di handle oleh beberapa divisi, bukan hanya oleh seseorang yang merangkap semua bidang. Selain pengerjaannya lebih cepat, setiap bagian dari desain bangunan anda dikerjakan oleh tim profesional / tim ahlinya masing-masing mulai dari desain architect sampai pembangunan.</p>
					<div class="container sosmed">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22L12 3Z" />
								</svg>
								Turgenen, Sumberagung, Moyudan Sleman, D.I. Yogyakarta
							</li>
							<li class="list-group-item">
								<svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
								</svg>
								085225832895		
							</li>
							<li class="list-group-item">
								<svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
								</svg>
								migunaniarchitect
							</li>
							<li class="list-group-item">
								<svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
								</svg>
								migunani arch
							</li>
							<li class="list-group-item">
								<svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
								</svg>
								archmigunani
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-6">
					<div class="image-footer">
						<img src="{{asset('image/XXXagatra-coffee-jogja.jpg') }}" alt="Avatar" >
					</div>
				</div>
			</div>
		
		</div>

		<div class="container body">
			<div class="row" >
				<div class="col-sm-12 text-center mt-5">
					<h4><strong>FAQ</strong></h4>
					<hr class="hr-home">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h5>Hal Yang Sering Ditanyakan</h5>
					<div class="tabs">
						<div class="tab">
							<input class="accordion" type="checkbox" id="chck1">
							<label class="tab-label mb-0" for="chck1">Apakah benar bisa mulai tanpa DP?</label>
							<div class="tab-content">
							ya benar, kami akan langsung mengerjakan denah sesuai dengan kebutuhan Anda. sedangkan untuk DP NYA bisa Anda berikan setelah Anda mendapatkan hasil awal berupa Denah, dan sesuai dengan keinginan serta kebtuhan Anda.
							</div>
						</div>
						<div class="tab">
							<input class="accordion" type="checkbox" id="chck2">
							<label class="tab-label mb-0" for="chck2">Bagaimana sistem pembayarannya?</label>
							<div class="tab-content">
							Setelah kami mengerjakan Denah Rencana serta berapa biaya pembuatannya sampai selesai dengan paket yang Anda ambil, Luas bangunan dan kerumitan desain. Setelah anda setuju maka di lakukan pembayaran pertama berupa <b>DP 30%</b>, selanjut nya jika desain denah, Eksterior, Interior di setujui lanjut pembayaran <b>30%</b> , untuk pelunasan <b>40%</b> setelah semua produk selesai di kerjakan.
							</div>
						</div>
						<div class="tab">
							<input class="accordion" type="checkbox" id="chck3">
							<label class="tab-label mb-0" for="chck3">Bagaimana jika ingin melakukan pemesanan?</label>
							<div class="tab-content">
							Pemesanan dapat di lakukan via Whatshapp. Nomer sudah tertera di website atau Anda bisa klik tombol whatshapp.
							</div>
						</div>
						<div class="tab">
							<input class="accordion" type="checkbox" id="chck4">
							<label class="tab-label mb-0" for="chck4">Data apa saja yang perlu saya berikan?</label>
							<div class="tab-content">
							Data yang kami butuhkan adalah Sketsa lahan yang akan di bangun, serta arah mata angin mana bangunan akan di arahkan / muka bangunan dan foto-foto kondisi lahan.
							</div>
						</div>
						<div class="tab">
							<input class="accordion" type="checkbox" id="chck5">
							<label class="tab-label mb-0" for="chck5">Apakah bisa di revisi sampai sesuai keinginan?</label>
							<div class="tab-content">
							Ya, kami bersaha semaksimal mungkin agar desain yang kami buat sesuai dan tepat dengan keinginan serta kebutuhan Anda. Selama pembeli melakukan pembayaran tepat waktu sesuai progres yang sudah kami kerjakan, maka kami akan dengan senang hati memberika hasil maksimal.
							</div>
						</div>
						<div class="tab">
							<input class="accordion" type="checkbox" id="chck6">
							<label class="tab-label mb-0" for="chck6">Masih ada pertanyaan yang belum terjawab?</label>
							<div class="tab-content">
							Hubungi kami via Whatshapp, kami akan dengan senang hati melayani anda.
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="msg" hidden>
      <p class="my-1 mx-1">Silahkan konsultasi dengan kami...</p>
	</div>
	<div id="promo" hidden>
      <p class="my-1 mx-1">Dapatkan <b>promo</b> menarik dari kami!</p>
	</div>
	<a href="https://api.whatsapp.com/send?phone=6285225832895" id="fixedbutton">
		<svg class="icon-redirect" viewBox="0 0 24 24">
			<path fill="currentColor" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
		</svg>
	</a>

@include('layout.foot')
@endsection

@section('script')

<script>
	
	// message time
	setTimeout(() => {
		document.getElementById('msg').removeAttribute("hidden");
		document.getElementById('msg').classList.add('msg');
	}, 2000); 
	setTimeout(() => {
		document.getElementById('promo').removeAttribute("hidden");
		document.getElementById('promo').classList.add('promo');
	}, 8000); 

	setTimeout(() => {
		document.getElementById('msg').setAttribute("hidden", false);
		document.getElementById('msg').classList.remove('msg');
	}, 15000);
	setTimeout(() => {
		document.getElementById('promo').setAttribute("hidden", false);
		document.getElementById('promo').classList.remove('promo');
	}, 20000);



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

	document.addEventListener("DOMContentLoaded", function(){
		window.addEventListener('scroll', function() {
			if (window.scrollY > 200) {
				document.getElementById('scrolls').classList.add('nav-scroll');
				document.getElementById('img-scroll').classList.add('nav-img-scroll');
				document.getElementById('img-scroll').classList.remove('nav');
				document.getElementById('fixedbutton').classList.add('fixedbutton');
				// add padding top to show content behind navbar
				// navbar_height = document.querySelector('.navbar').offsetHeight;
				// document.body.style.paddingTop = navbar_height + 'px';
			} else {
				document.getElementById('scrolls').classList.remove('nav-scroll');
				document.getElementById('img-scroll').classList.remove('nav-img-scroll');
				document.getElementById('img-scroll').classList.add('nav');
				document.getElementById('fixedbutton').classList.remove('fixedbutton');
					// remove padding top from body
				// document.body.style.paddingTop = '0';
			} 
		});
	}); 
</script>
@endsection





