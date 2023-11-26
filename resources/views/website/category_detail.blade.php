@include('template.header')  

  <div id="mentor" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Detail Category mentor {{$jenis_mentor->jenis}} </h6>
            <h4>Plih Mentor Anda Jenis Mentor ({{$jenis_mentor->jenis}})</em></h4>
          <form class="form-inline d-flex align-items-center" action="{{ url('jenis_mentor/'.$jenis_mentor->jenis) }}" method="post">
            @csrf
            <input class="form-control" type="search" name="search" placeholder="Search Alamat Mentor" value="{{ request('search') }}">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>       
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="col-sm-12">
        <div class="row">
            @if(count($mentor) > 0)
                @foreach ($mentor as $data_mentor)                
                    <div class="col-sm-3">                
                        <div class="item">
                            <a href="{{url('pemesanan_mentor/'.$data_mentor->id.'/detail')}}">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{$data_mentor->photo}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{$data_mentor->nama}}</h4>
                                        <span>{{substr($data_mentor->alamat, 0, 70)}}</span>
                                    </div>
                                </div>
                            </a>  
                        </div>
                    </div>                                     
                @endforeach
            @else
                <div class="col-sm-12">
                    <h5 style="text-align: center">Tidak Ada Data Mentor Dengan Alamat Tersebut.</h5>
                </div>
            @endif
        </div>
    </div>
    

    </div>
  </div>
  
@include('template.footer')