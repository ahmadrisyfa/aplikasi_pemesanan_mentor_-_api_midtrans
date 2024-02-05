<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan Mentor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>    
<div class="container">
    <div class="card card-body mt-5">

      <section class="section profile">
        <div class="row">
            <div class="col-lg-12">  
                <div class="section-heading">
                    <h4 style="color: #837CE6;">Pemesanan Mentor</h4>
                </div>      
                <form id="contact" action="{{url('pemesanan_mentor/store')}}" method="post">
                    @csrf 
                    <div class="row">                        
                    <div class="col-lg-12">
                    <div class="fill-form">
                    <h3 style="color: #837CE6;margin-bottom:30px">Detail Mentor</h3>
                    <hr>
                    <div class="row">                    
                        <div class="col-lg-6">
                            <span><b>Nama Lengkap: </b>{{$mentor->nama_lengkap}}</span> <br><br>
                            <span><b>Keahlian: </b>{{$mentor->keahlian}}</span> <br><br>
                            <span><b>Pendidikan: </b>{{$mentor->pendidikan}}</span> <br><br>
                            <span><b>Vidio profile: <br></b><video src="{{$mentor->cuplikan_vidio_profile}}" width="400" height="300" controls>Your browser does not support the video tag.</video></span> <br><br>                        
                        </div>                    
                        <div class="col-lg-6">
                            {{-- <span><b>Harga: </b>{{ 'Rp. ' . number_format($mentor->harga, 0, ',', '.') }}</span> <br><br> --}}
                            <span><b>Portofolio: </b>{{$mentor->portofolio_kegiatan}}</span> <br><br>
                            <span><b>Jenis: </b>{{$mentor->jenis_mentor}}</span> <br><br>
                            <span><b>Alamat: </b>{{$mentor->alamat}}</span> <br><br>
                            <span><b>Foto Mentor: <br> </b><img src="{{$mentor->upload_foto}}" style="max-width: 300px; max-height: 300px;" alt=""></span> <br><br>
                        </div>   
                        <div class="col-lg-12">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            
                            <div class="accordion-item">
                            {{-- <h2 class="accordion-header">
                                <button class="accordion-button collapsed" onclick="window.open('https://api.whatsapp.com/send/?phone=6289660787591&text=Teks%20Anda%20Di%20Sini&type=phone_number&app_absent=0', '_blank')" style="text-align: center">
                                    Pesan Mentor Sekarang
                                </button>
                                
                                                
                            </h2> --}}
                            <div>
                                <hr>
                                <input class="form-control" required type="hidden" name="mentor_id" id="mentor_id" value="{{$mentor->id}}" placeholder="Masukan No Whatsapp Anda">
                                {{-- <input class="form-control" required type="hidden" name="jumlah_pembayaran" id="jumlah_pembayaran" value="{{$mentor->harga}}" placeholder="Masukan No Whatsapp Anda"> --}}
                                <div class="accordion-body">
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="subject" name="nama" id="nama" placeholder="Masukan nama Anda">
                                    <label for="floatingInput">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                <input class="form-control" required type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" value="" placeholder="Masukan Harga Deal">
                                    <label for="floatingInput">Harga Deal</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="number" name="no_hp" id="no_hp" placeholder="Masukan No Whatsapp Anda">
                                    <label for="floatingInput">No Whatsapp</label>
                                </div>                              
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="subject" name="instansi" id="instansi" placeholder="Masukan Instansi Atau Perusahaan Anda">
                                    <label for="floatingInput">Instansi Atau Perusahan Anda</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="subject" name="lokasi_kegiatan" id="lokasi_kegiatan" placeholder="Masukan Lokasi Kegiatan Anda">
                                    <label for="floatingInput">Lokasi Kegiatan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" required type="subject" name="alamat_instansi" id="alamat_instansi" placeholder="Masukan Alamat Instansi Anda"></textarea>
                                    <label for="floatingInput">Alamat Instansi</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" placeholder="Masukan Tanggal Kegiatan Anda">
                                    <label for="floatingInput">Tanggal Kegiatan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="time" name="jam" id="jam" placeholder="Masukan Jam Metting Anda Anda">
                                    <label for="floatingInput">Jam Metting</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="subject" name="kendala_yang_di_alami" id="kendala_yang_di_alami" placeholder="Masukan Kendala Yang Di Alami Anda">
                                    <label for="floatingInput">Kendala Yang Di Alami</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required type="subject" name="harapan_dari_adanya_kegiatan" id="harapan_dari_adanya_kegiatan" placeholder="Masukan Harapan Dari Adanya Kegiatan Anda">
                                    <label for="floatingInput">Harapan Dari Adanya Kegiatan Anda</label>
                                </div>                                                                                      
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                    <button type="submit" id="form-submit" class="btn btn-success main-button ">Submit</button>
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
                        </div>
                </form>

            </div>
        </div>
      </section>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>