@include('template.header')


<div id="DaftarMentor" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Detail Trainer</h6>
            <h4>SIlahkan Pilih Trainer Yang Anda Inginkan</h4>
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
          {{-- <form id="contact" action="{{url('pemesanan_mentor/store')}}" method="post"> --}}
            @csrf 
            <form id="contact" >
            <div class="row">                        
              <div class="col-lg-12">
                <div class="fill-form">
                  <h3 style="color: #837CE6;margin-bottom:30px">Detail Trainer</h3>
                  <div class="row">                    
                    <div class="col-lg-6">
                        <span><b>Nama Lengkap: </b>{{$mentor->nama_lengkap}}</span> <br><br>
                        <span><b>Keahlian: </b>{{$mentor->keahlian}}</span> <br><br>
                        <span><b>Pendidikan: </b>{{$mentor->pendidikan}}</span> <br><br>
                        <span><b>Portofolio: </b>{{$mentor->portofolio_kegiatan}}</span> <br><br>
                        <span><b>Vidio profile: <br></b><video src="{{$mentor->cuplikan_vidio_profile}}" width="400" height="300" controls>Your browser does not support the video tag.</video></span> <br><br>                        
                      </div>                    
                      <div class="col-lg-6">
                        {{-- <span><b>Harga: </b>{{ 'Rp. ' . number_format($mentor->harga, 0, ',', '.') }}</span> <br><br> --}}
                        <span><b>Jenis: </b>{{$mentor->jenis_mentor}}</span> <br><br>
                        <span><b>Alamat: </b>{{$mentor->alamat}}</span> <br><br>
                        <span><b>Foto Trainer: <br> </b><img src="{{$mentor->upload_foto}}" style="max-width: 300px; max-height: 300px;" alt=""></span> <br><br>
                    </div>   
                    <div class="col-lg-12">
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" onclick="window.open('https://api.whatsapp.com/send/?phone=6285867770343&text=Saya Ingin Berdiskusi Detail Mentor Dengan Id%20{{$mentor->id}}&type=phone_number&app_absent=0', '_blank')" style="text-align: center">
                              Pesan Trainer Sekarang
                            </button>
                          
                          
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <fieldset>
                                <input required type="subject" name="nama" id="nama" placeholder="Masukan nama Anda">
                              </fieldset>
                              <fieldset>
                                <input required type="number" name="no_hp" id="no_hp" placeholder="Masukan No Whatsapp Anda">
                                <input required type="hidden" name="mentor_id" id="mentor_id" value="{{$mentor->id}}" placeholder="Masukan No Whatsapp Anda">
                                <input required type="hidden" name="jumlah_pembayaran" id="jumlah_pembayaran" value="{{$mentor->harga}}" placeholder="Masukan No Whatsapp Anda">

                              </fieldset>                              
                              <fieldset>
                                <input required type="subject" name="instansi" id="instansi" placeholder="Masukan Instansi Atau Perusahaan Anda">
                              </fieldset>
                              <fieldset>
                                <input required type="subject" name="lokasi_kegiatan" id="lokasi_kegiatan" placeholder="Masukan Lokasi Kegiatan Anda">
                              </fieldset>
                              <fieldset>
                                <textarea required type="subject" name="alamat_instansi" id="alamat_instansi" placeholder="Masukan Alamat Instansi Anda"></textarea>
                              </fieldset>
                              <fieldset>
                                <input required type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" placeholder="Masukan Tanggal Kegiatan Anda">
                              </fieldset>
                              <fieldset>
                                <input required type="time" name="jam" id="jam" placeholder="Masukan Jam Metting Anda Anda">
                              </fieldset>
                              <fieldset>
                                <input required type="subject" name="kendala_yang_di_alami" id="kendala_yang_di_alami" placeholder="Masukan Kendala Yang Di Alami Anda">
                              </fieldset>
                              <fieldset>
                                <input required type="subject" name="harapan_dari_adanya_kegiatan" id="harapan_dari_adanya_kegiatan" placeholder="Masukan Harapan Dari Adanya Kegiatan Anda">
                              </fieldset>                                                                                      
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
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>
  @include('template.footer')

  