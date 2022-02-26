@extends('layout.base')

@section('title',' Edit | Migunani ')

@section('container')
<div class="d-flex" id="wrapper">

    
    <!-- Sidebar -->
    <div class="bg-light " id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="{{ asset('image/logo1.png') }}" width="200px" alt="">
      </div>
      <div class="list-group list-group-flush">
        <a href="/admin" class="list-group-item list-group-item-action icon-sidebar "> 
            <i class="fas fa-tachometer-alt " ></i>
            Dashboard
        </a>
        <a href="/" class="list-group-item list-group-item-action  icon-sidebar">
            <i class="fab fa-chrome " ></i>
            Web
        </a>
        <a  href="/admin/create" class="list-group-item list-group-item-action  icon-sidebar">
            <i class="fas fa-cloud-upload-alt"></i>
            Post
        </a>
        <a href="/admin/overview" class="list-group-item list-group-item-action icon-sidebar">
        <i class="fas fa-cog"></i>
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

      <div class="content-admin create">
        <div class="container-fluid  my-3">
					<div class="container" >
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
								<li class="breadcrumb-item">Edit</a></li>
							</ol>
						</nav>
						<h2 class="mb-2" >Form Edit</h2>
						<div class="container shadow">
							<form action="/admin/{{$data->id}}" method="post">
									@method('patch')
									@csrf
									<div class="form-group">
											<label class="mt-3" for="judul">masukan caption</label>
											<input type="text" class="form-control  @error('judul') is-invalid @enderror"
											id="judul" placeholder="masukan judul" name="judul" value="{{ $data->judul }}">
											@error('judul')<div class="invalid-feedback"> {{$message}} </div> @enderror
									</div>
									<div class="form-group">
										<label for="judul">Pilih Kategori</label>
										<select  name="kategori" class="custom-select" value="{{ $data->kategori }}" >
											<option id="interior" selected value="interior">Interior</option>
											<option id="eksterior"  value="eksterior">Eksterior</option>
											<option id="komersial"  value="komersial">Komersial</option>
										</select>
									</div>
									
									<button type="submit"  class="btn btn-primary mb-3">Edit</button>
							</form>
						</div>
											
					</div>
				</div>
			</div>
@endsection

@section('script')
	<script>
		$("#sidebarCollapse").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
			$('#sidebarCollapse').toggleClass('open');
		});

		let kategori = ["interior","eksterior","komersial"];
		let value = "<?= $data->kategori?>";

		for(let i=0; i<kategori.length; i++){
			if(value == kategori[i]){
				document.getElementById(kategori[i]).setAttribute('selected', true);
			}
		}
		// if(kategori == "")

	</script>
@endsection