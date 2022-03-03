@extends('layout.base')

@section('title',' Admin | Migunani ')

@section('container')
    

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light " id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="{{ asset('image/logo1.png') }}" width="200px" alt="">
      </div>
      <div class="list-group list-group-flush">
        <a href="/admin" class="list-group-item list-group-item-action icon-sidebar sidebar-color-active"> 
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
      
      <div class="content-admin dashboard">
        <div class="container-fluid  my-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            </ol>
          </nav>
          @if (session('status'))
              <div class="alert alert-success ">
                  {{ session('status') }}
              </div>
          @endif        
          <h2 class="my-4 "> Dashboard</h2>
        </div>
      
          <?php 
              $gambar = 0;
              $video = 0;
              $file = 0;
          ?>
          @foreach($data as $data_file)
          <?php $file++ ?>
            @if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
              <?php  $gambar++; ?>
            @endif
            @if($data_file->type =='mp4' || $data_file->type =='3gp') 
              <?php  $video++; ?>
              @endif
          @endforeach
          <div class="row ">
              <div class="admin-padding" id="file-index">
                <p  >{{$file}}</p>
                <h6>File</h6>
            </div>
              <div class="admin-padding"   id="gambar">
                <p  >{{$gambar}}</p>
                <h6>Gambar</h6>
            </div>
              <div class="admin-padding "   id="video">
                <p >{{$video}}</p>
                <h6>Video</h6>
            </div>
          </div>
          <!-- chart -->

        <div class="my-5 chart-admin">
          <canvas id="myChart"></canvas>
        </div>
      </div>
      
@include('layout.foot')

  </div>
@endsection

@section('script')
  <script src="{{ asset('js/Chart.js') }}"></script>
  <script>
  $("#sidebarCollapse").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $('#sidebarCollapse').toggleClass('open');
    });



    // grafik
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:  ["File","Gambar","Video"],
      datasets: [{
        label: '',
        data: [
          <?php echo json_encode($file); ?>,
          <?php echo json_encode($gambar); ?>,
          <?php echo json_encode($video); ?>
        ],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
  </script>
@endsection



