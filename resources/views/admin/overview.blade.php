@extends('layout.base')

@section('title',' Overview | Migunani ')

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
        <a href="/admin/overview" class="list-group-item list-group-item-action icon-sidebar sidebar-color-active">
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
      <div class="content-admin overview ">
        
        <div class="container-fluid my-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item">Overview</a></li>
            </ol>
          </nav>
          <h2 class="mt-2">Overview </h2>
          <form class="form-inline  mt-2 mr-3" action="" method="get">
              <input class="form-control mr-1 ml-auto search" type="search" placeholder=" cari judul file" aria-label="Search" name="cari">
              <button class="btn btn-outline-info  my-sm-1 " type="submit" >CARI</button>
          </form>
          @if (session('status'))
              <div class="alert alert-success ">
                  {{ session('status') }}
              </div>
          @endif        
          
          <!-- cart -->
          <div class="container"  class="card" id="foot">
              <div class="row">
              
              @foreach($data as $data_file)
              
                  <div class=" col-sm-6 col-lg-4 col-xl-4 mb-3 ">
                
                      <div class="card img-thumbnail" style="width: 18rem;">
                          <div class="card-body">
                              <p class="card-text  ">
                              @if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
                                    <img class="img-fluid img-thumbnail" src="{{ Storage::url('public/'.$data_file->file) }}" alt="" id="thumnails">  
                              @endif

                              @if($data_file->type =='mp4' || $data_file->type =='3gp') 
                                  <video  class="thumnails-admin img-thumbnail" controls  id="click" >
                                      <source  src="{{ Storage::url('public/'.$data_file->file) }}"  >
                                  </video>
                              @endif 
                              <h6 class="card-title text-center mb-0">{{$data_file->judul}}</h6>
                              <h6 class="card-kategori text-center">{{$data_file->kategori}}</h6>
                              <div class="row justify-content-center">
                                <div class="col-4">
                                <a href=" {{$data_file->id}}/edit" class="btn btn-outline-info ">Edit</a>
                                </div>
                                <div class="col-4">
                                  <form action=" {{$data_file->id}} " method="post" class="d-inline ">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('yakin data ingin di hapus?');" type="submit" class="btn btn-outline-danger" >Delete</button>
                                  </form>
                                </div>
                              </div>
                              
                          </div>
                      </div>
                  </div>
          
              @endforeach
              </div>
          </div>
          <!-- endcart -->
        </div>

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