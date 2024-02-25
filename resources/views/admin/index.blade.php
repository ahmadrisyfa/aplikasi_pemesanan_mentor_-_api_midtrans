@extends('template_admin.index')
@section('content')
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="col-lg-12">
    <div class="row">

      <!-- Sales Card -->
      <div class="col-xxl-4 col-md-4">
        <div class="card info-card sales-card">
          

          <div class="card-body">
            <h5 class="card-title">Total Pendaftaran Trainer </h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="ps-3">
                <h6>{{$total_daftar_mentor}}</h6>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Sales Card -->

      <!-- Revenue Card -->
      <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
          

          <div class="card-body">
            <h5 class="card-title">Daftar Trainer</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-square"></i>
              </div>
              <div class="ps-3">
                <h6>{{$total_mentor}}</h6>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Revenue Card -->
      <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

            

            <div class="card-body">
              <h5 class="card-title">Total Pemesanan</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person-circle"></i>
                </div>
                <div class="ps-3">
                  <h6>{{$total_pemesanan}}</h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->
        
        

    </div>
  </div>
</div>
</section>
@endsection