@extends('layout.base')
@section('title',' Home | Migunani ')

@section('nav')
<nav class="navbar navbar-expand-lg fixed-top navbar-light "  id=scrolls>
  <a class="navbar-brand" href="#">
    <img src="{{ asset('image/logo1.png') }}"    class="nav" alt="" id=img-scroll>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ml-auto">
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
        <h3 >PROFILE</h3>
        <hr class="hr-home">
      </div>
    </div>
    <div class="row my-3">
      <div class="col-sm-3">
        <img src="{{asset('image/logo1.png') }}" class="img-fluid" alt="" width=350 height=350>
      </div>
      <div class="col-sm-4">
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem nobis commodi itaque omnis iusto sed perspiciatis, soluta magni maxime distinctio atque provident earum. Inventore repellat debitis magnam veniam sit doloremque!</p>
      </div>
      <div class="col-sm-5 ">   
        <p>Migunani architect adalah jasa di bidang bangunan baik hunian maupun bangunan komersil. 
        Kami melayani jasa di bidang desain dan pelasanaan, interior, eksterior dan landscape. 
        Kami berkomitmen untuk selalu memberikan yang terbaik bagi semua pelanggan.</p>
      </div>
    </div>
    <div class="row" >
        <div class="col-sm-12 text-center">
          <h4 >PELAYANAN</h4>
          <hr class="hr-home">
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4 ">
        <img src="{{ asset('image/f.png') }}" class="content_img">
        <h6>Desain Interior</h6>
        <p class="describe-service">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, dicta ex! Vero sit repudiandae incidunt sed maiores excepturi amet. Eius eligendi quam voluptatem numquam ipsam perspiciatis dolore optio. Perspiciatis, exercitationem?</p>
          
      </div>
      <div class="col-md-4 ">
        <img src="{{ asset('image/b.png') }}" class="content_img">
        <h6>Desain Eksterior</h6>
        <p class="describe-service">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, dicta ex! Vero sit repudiandae incidunt sed maiores excepturi amet. Eius eligendi quam voluptatem numquam ipsam perspiciatis dolore optio. Perspiciatis, exercitationem?</p>
            
      </div>
      <div class="col-md-4 ">
        <img src="{{ asset('image/a.png') }}" class="content_img">
        <h6>Desain Komersial</h6>
        <p class="describe-service">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, dicta ex! Vero sit repudiandae incidunt sed maiores excepturi amet. Eius eligendi quam voluptatem numquam ipsam perspiciatis dolore optio. Perspiciatis, exercitationem?</p>
            
      </div>
    </div>
  </div>
</section>
<section>
  <div class="row" >
    <div class="col-sm-12 text-center mt-5">
      <h3 >GALERI</h3>
      <hr class="hr-home">
    </div>
  </div>
  <div class="container shadow">

    <div class="container py-3">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid iusto repudiandae sint libero cum dolorem assumenda culpa ratione ut at consectetur eos ab, expedita maiores ullam, nisi hic saepe modi!
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe repudiandae, quidem totam modi aliquam nisi deleniti, repellendus libero ad dolorum consequatur fuga a similique quam placeat corrupti voluptatem facilis est.
    </div>
    <div class="container py-3">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid iusto repudiandae sint libero cum dolorem assumenda culpa ratione ut at consectetur eos ab, expedita maiores ullam, nisi hic saepe modi!
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe repudiandae, quidem totam modi aliquam nisi deleniti, repellendus libero ad dolorum consequatur fuga a similique quam placeat corrupti voluptatem facilis est.
    </div>
  </div>
</section>
<section class="layer-gray">
  <div class="row" >
    <div class="col-sm-12 text-center mt-5">
      <h3 >HARGA</h3>
      <hr class="hr-home">
    </div>
  </div>
  <div class="container">
    <div class="row ">
      <div class="col-md-3">
        <div class="shadow rounded px-3 py-3 bg-light">
          <div class="container-paket">
            <p class="paket"> PAKET</p>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius itaque, veniam officiis sed tempore aspernatur enim sapiente magni suscipit totam sequi numquam culpa vero maxime nesciunt ducimus iusto recusandae non?</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="shadow rounded px-3 py-3 bg-light">
          <div class="container-paket">
            <p class="paket"> PAKET</p>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius itaque, veniam officiis sed tempore aspernatur enim sapiente magni suscipit totam sequi numquam culpa vero maxime nesciunt ducimus iusto recusandae non?</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="shadow rounded px-3 py-3 bg-light">
          <div class="container-paket">
            <p class="paket"> PAKET</p>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius itaque, veniam officiis sed tempore aspernatur enim sapiente magni suscipit totam sequi numquam culpa vero maxime nesciunt ducimus iusto recusandae non?</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="shadow rounded px-3 py-3 bg-light">
          <div class="container-paket">
            <p class="paket"> PAKET</p>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius itaque, veniam officiis sed tempore aspernatur enim sapiente magni suscipit totam sequi numquam culpa vero maxime nesciunt ducimus iusto recusandae non?</p>
        </div>
      </div>
    </div>
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





