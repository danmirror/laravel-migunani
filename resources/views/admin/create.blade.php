@extends('layout.base')

@section('title',' Post | Migunani ')

@section('container')
   
	<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light " id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="{{ asset('image/logo1.png') }}" width="200px" alt="">
      </div>
      <div class="list-group list-group-flush">
        <a href="/admin" class="list-group-item list-group-item-action icon-sidebar"> 
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="currentColor" d="M7,17L10.2,10.2L17,7L13.8,13.8L7,17M12,11.1A0.9,0.9 0 0,0 11.1,12A0.9,0.9 0 0,0 12,12.9A0.9,0.9 0 0,0 12.9,12A0.9,0.9 0 0,0 12,11.1M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" />
          </svg>
            Dashboard
        </a>
        <a href="/" class="list-group-item list-group-item-action  icon-sidebar">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 4.5C7 4.5 2.7 7.6 1 12C2.7 16.4 7 19.5 12 19.5H13.1C13 19.2 13 18.9 13 18.5C13 18.1 13 17.8 13.1 17.4C12.7 17.4 12.4 17.5 12 17.5C8.2 17.5 4.8 15.4 3.2 12C4.8 8.6 8.2 6.5 12 6.5S19.2 8.6 20.8 12C20.7 12.2 20.5 12.4 20.4 12.7C21.1 12.9 21.7 13.1 22.3 13.5C22.6 13 22.8 12.5 23 12C21.3 7.6 17 4.5 12 4.5M12 9C10.3 9 9 10.3 9 12S10.3 15 12 15 15 13.7 15 12 13.7 9 12 9M19 21V19H15V17H19V15L22 18L19 21" />
            </svg>
            Web
        </a>
        <a  href="/admin/create" class="list-group-item list-group-item-action  icon-sidebar sidebar-color-active">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="currentColor" d="M19.35,10.04C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.04C2.34,8.36 0,10.91 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.04M19,18H6A4,4 0 0,1 2,14C2,11.95 3.53,10.24 5.56,10.03L6.63,9.92L7.13,8.97C8.08,7.14 9.94,6 12,6C14.62,6 16.88,7.86 17.39,10.43L17.69,11.93L19.22,12.04C20.78,12.14 22,13.45 22,15A3,3 0 0,1 19,18M8,13H10.55V16H13.45V13H16L12,9L8,13Z" />
          </svg>
            Post
        </a>
        <a href="/admin/overview" class="list-group-item list-group-item-action icon-sidebar">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12 14C9.58 14 7.3 13.4 6 12.45V9.64C7.47 10.47 9.61 11 12 11S16.53 10.47 18 9.64V12.08C18.33 12.03 18.66 12 19 12C19.34 12 19.67 12.03 20 12.08V7C20 4.79 16.42 3 12 3S4 4.79 4 7V17C4 19.21 7.59 21 12 21C12.1 21 12.2 21 12.29 21C12.11 20.36 12 19.69 12 19C8.13 19 6 17.5 6 17V14.77C7.61 15.55 9.72 16 12 16C12.24 16 12.47 16 12.7 15.97C13.1 15.14 13.65 14.41 14.32 13.81C13.58 13.93 12.8 14 12 14M12 5C15.87 5 18 6.5 18 7S15.87 9 12 9 6 7.5 6 7 8.13 5 12 5M22.7 19.6V18.6L23.8 17.8C23.9 17.7 24 17.6 23.9 17.5L22.9 15.8C22.9 15.7 22.7 15.7 22.6 15.7L21.4 16.2C21.1 16 20.8 15.8 20.5 15.7L20.3 14.4C20.3 14.3 20.2 14.2 20.1 14.2H18.1C17.9 14.2 17.8 14.3 17.8 14.4L17.6 15.7C17.3 15.9 17.1 16 16.8 16.2L15.6 15.7C15.5 15.7 15.4 15.7 15.3 15.8L14.3 17.5C14.3 17.6 14.3 17.7 14.4 17.8L15.5 18.6V19.6L14.4 20.4C14.3 20.5 14.2 20.6 14.3 20.7L15.3 22.4C15.4 22.5 15.5 22.5 15.6 22.5L16.8 22C17 22.2 17.3 22.4 17.6 22.5L17.8 23.8C17.9 23.9 18 24 18.1 24H20.1C20.2 24 20.3 23.9 20.3 23.8L20.5 22.5C20.8 22.3 21 22.2 21.3 22L22.5 22.4C22.6 22.4 22.7 22.4 22.8 22.3L23.8 20.6C23.9 20.5 23.9 20.4 23.8 20.4L22.7 19.6M19 20.5C18.2 20.5 17.5 19.8 17.5 19S18.2 17.5 19 17.5 20.5 18.2 20.5 19 19.8 20.5 19 20.5Z" />
          </svg>
            Overview
        </a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand navbar-light bg-light shadow">
        <div id="sidebarCollapse" >
          <!-- <i class="fas fa-align-left"></i> -->
          <!-- Sidebar -->
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-user"></i>
                  Admin
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item icon-hover" href="/logout">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M16.56,5.44L15.11,6.89C16.84,7.94 18,9.83 18,12A6,6 0 0,1 12,18A6,6 0 0,1 6,12C6,9.83 7.16,7.94 8.88,6.88L7.44,5.44C5.36,6.88 4,9.28 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12C20,9.28 18.64,6.88 16.56,5.44M13,3H11V13H13" />
                  </svg>
                Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
          <!-- -->
      <div class="content-admin create">
        <div class="container-fluid  my-3">

@if (session('status'))
              <div class="alert alert-primary">
{{ session('status') }}
              </div>
@endif  
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item">Upload</a></li>
            </ol>
          </nav>
          <h2 >Upload</h2>
          <div class="container shadow">
            <form action="/admin/kirim" method="post"  enctype="multipart/form-data" >
              @csrf

              <div class="form-group">
              <label for="file">Foto</label>
              <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" 
                  id="file" placeholder="masukan foto"  value="{{ old('file') }}">
                  @error('file')<div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>
              
              <div class="form-group">
                <label for="judul">Masukan caption</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                id="judul" placeholder="masukan masukan caption" name="judul"  value="{{ old('judul') }}">
                @error('judul')<div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>
              <div class="form-group">
                <label for="judul">Pilih Kategori</label>
                <select name="kategori" class="custom-select">
                  <option selected value="interior">Interior</option>
                  <option value="eksterior">Eksterior</option>
                  <option value="komersial">Komersial</option>
                </select>
              </div>
              <button type="submit"  class="btn btn-outline-secondary mb-3">Tambah Data</button>
            </form>
          </div>
        </div>
    
      <!-- /#page-content-wrapper -->
      </div>
@include('layout.foot')

</div>
 
@endsection


@section('script')
<script>
	$("#sidebarCollapse").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		$('#sidebarCollapse').toggleClass('open');
	});
</script>
@endsection