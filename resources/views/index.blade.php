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
					<a class="nav-link active " href="/">Home</a>
				</li>
				<li class="nav-item" >
					<a class="nav-link "  href="/galery">Gallery</a>
				</li>
				<li class="nav-item" >
					<a class="nav-link"  href="/about">About</a>
				</li>
			</ul>
		</div>
	</nav>
@endsection

@section('jumbotron')

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('image/3.png') }}" class="d-block banner" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{asset('image/4.png') }}" class="d-block banner" alt="...">
			</div>
			<div class="carousel-item">
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
					<h3 >Profil</h3>
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
					<img src="{{ asset('image/f.png') }}" class="content_img">
					<h6>Desain Arsitektur</h6>
					<p class="describe-service">Jasa Desain Arsitektur baik ‘Residential’ maupun ‘Commercial Building’ meliputi Rumah Tinggal, Villa, Cafe, Restaurant, Indekost dan lain-lain.</p>
						
				</div>
				<div class="col-md-4 ">
					<img src="{{ asset('image/b.png') }}" class="content_img">
					<h6>Desain Interior</h6>
					<p class="describe-service">Jasa Desain Interior meliputi bangunan hunian maupun komersial dengan berbagai macam konsep seperti : Minimalis, Rustic, Classic, Tropical.</p>
							
				</div>
				<div class="col-md-4 ">
					<img src="{{ asset('image/a.png') }}" class="content_img">
					<h6>Pembangunan</h6>
					<p class="describe-service">Jasa Pembangunan baik ‘Residential’ maupun ‘Commercial Building’ meliputi Rumah Tinggal, Villa, Cafe, Restaurant, Indekost dan Dikerjakan oleh Tim profesional dengan pengalaman lebih dari satu dekade.</p>
							
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="row" >
			<div class="col-sm-12 text-center mt-5">
				<h3 >Galeri</h3>
				<hr class="hr-home">
			</div>
		</div>
		<div class="container mb-5">
			<div class="row">
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div> 	
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div> 
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div> 
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div> 
				<div class="col-sm-3 mb-2">
					<div class="container-galery">
						<img src="{{asset('image/3.png') }}" alt="Avatar" class="image-galery" >
						<div class="middle-galery">
							<div class="text-galery">John Doe</div>
						</div>
					</div>
				</div> 	
			</div>

		</div>
	</section>
	<section class="layer-gray">
		<div class="row" >
			<div class="col-sm-12 text-center mt-5">
				<h3 >Harga</h3>
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
								<a href="#page1_1" data-toggle="collapse" class="dropdown-toggle">Gambar Kerja (Detail Design)</a>
								<ul class="collapse" id="page1_1">
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
								<a href="#page2_1" data-toggle="collapse" class="dropdown-toggle">Gambar Kerja</a>
								<ul class="collapse" id="page2_1">
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
								<a href="#page3_1" data-toggle="collapse" class="dropdown-toggle">Gambar Kerja (Detail Design)</a>
								<ul class="collapse" id="page3_1">
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
								<a href="#page4_1" data-toggle="collapse" class="dropdown-toggle">Soft file Dokumen(RAB)</a>
								<ul class="collapse" id="page4_1">
									<li>Contoh pdf RAB</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<h5 class="my-4">Harga Pembangunan</h5>
			<div class="row justify-content-center">
				<div class="col-md-3 my-4 zoom">
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
	<section>
		<div class="row" >
			<div class="col-sm-12 text-center mt-5">
				<h3 >Kontak</h3>
				<hr class="hr-home">
			</div>
		</div>
		<div class="container">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vero harum quam dolore sit dicta doloribus ratione laboriosam consequatur magni, architecto non blanditiis impedit quasi velit cumque nihil, tempore totam.
		</div>
	</section>

@endsection

@section('script')

<script>
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
    if (window.scrollY > 200) {
      document.getElementById('scrolls').classList.add('nav-scroll');
      document.getElementById('img-scroll').classList.add('nav-img-scroll');
      document.getElementById('img-scroll').classList.remove('nav');
      // add padding top to show content behind navbar
      // navbar_height = document.querySelector('.navbar').offsetHeight;
      // document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.getElementById('scrolls').classList.remove('nav-scroll');
      document.getElementById('img-scroll').classList.remove('nav-img-scroll');
      document.getElementById('img-scroll').classList.add('nav');
        // remove padding top from body
      // document.body.style.paddingTop = '0';
    } 
  });
}); 
</script>
@endsection





