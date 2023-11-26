@include('template.header')


<div id="DaftarMentor" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Pembatalan Pemesanan Mentor</h6>
            <h4>Silahkan Input Pembatalan mentor Anda</h4>
            {{-- @if(session()->has('LoginError'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                        {{ session('LoginError') }}
            </div>
          @endif  --}}
          @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                      {{ session('message') }}
          </div>
          @endif 
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{url('pembatalan/store')}}" method="post">
            @csrf 
            <div class="row">                        
              <div class="col-lg-12">
                <div class="fill-form">
                  <h3 style="color: #837CE6;margin-bottom:30px">Silahkan Input Form Pembatalan</h3>
                  <div class="row">                                       
                    <div class="col-lg-12">
                            <fieldset>
                              <input required type="subject" name="nama" id="nama" placeholder="Masukan nama Anda">
                            </fieldset>
                            <fieldset>
                              <input required type="number" name="no_hp" id="no_hp" placeholder="Masukan No Whatsapp Anda">
                            </fieldset>                              
                            <fieldset>
                              <input required type="subject" name="instansi" id="instansi" placeholder="Masukan Instansi Atau Perusahaan Anda">
                            </fieldset>
                            <fieldset>
                              <input required type="subject" name="lokasi_kegiatan" id="lokasi_kegiatan" placeholder="Masukan Lokasi Kegiatan Anda">
                            </fieldset>
                            <fieldset>
                              <input required type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" placeholder="Masukan Tanggal Kegiatan Anda">
                            </fieldset>
                            <fieldset>
                              <input required type="time" name="jam" id="jam" placeholder="Masukan Jam Metting Anda Anda">
                            </fieldset>
                            <fieldset>
                              <input required type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" placeholder="Masukan Jumlah Pembayaran Anda">
                            </fieldset>
                            <fieldset>
                              <input required type="subject" name="alasan_pembatalan" id="alasan_pembatalan" placeholder="Masukan Alasan Pembatalan Anda">
                            </fieldset>
                            <fieldset>
                              <textarea required type="subject" name="alamat_instansi" id="alamat_instansi" placeholder="Masukan Alamat Instansi Anda"></textarea>
                            </fieldset>
                            {{-- <fieldset>
                              <input required type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" placeholder="Masukan Jumlah Pembayaran Anda">
                            </fieldset> --}}
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Submit</button>
                              </fieldset>
                            </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>
  @include('template.footer')

  