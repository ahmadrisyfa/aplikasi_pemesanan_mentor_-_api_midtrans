@include('template.header')
<div id="DaftarMentor" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Pendaftaran Mentor</h6>
            <h4>SIlahkan Untuk Mendaftar Menjadi Mentor</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{url('daftar_mentor/create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">                        
              <div class="col-lg-12">
                <div class="fill-form">
                  <h3>Pendaftaran Mentor</h3>
                  <div class="row">                    
                    <div class="col-lg-6">
                      <fieldset>
                        <input required type="subject" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap Dan Gelar" >
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="ttl" id="ttl" placeholder="TTL">
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="nik" id="nik" placeholder="NIK">
                      </fieldset>                    
                      <fieldset>
                        <input required type="subject" name="keahlian" id="keahlian" placeholder="Keahlian">
                      </fieldset>
                      <fieldset style="margin-top:7px">
                        <span style="padding-right: 340px;">Sertifikat Keahlian</span>
                        <input required type="file" name="sertifikat_keahlian" id="sertifikat_keahlian" placeholder="Sertifikat Keahlian(PDF)">
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="portofolio_kegiatan" id="portofolio_kegiatan" placeholder="Portofolio Kegiatan (text)">
                      </fieldset>
                      <fieldset style="margin-top:7px">
                        <span style="padding-right: 380px;">Upload Foto</span>
                        <input required type="file" name="upload_foto" id="upload_foto" placeholder="Upload photo (max 1 mb)">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input required type="subject" name="pendidikan" id="pendidikan" placeholder="Pendidikan (S1,S2,S3)">
                      </fieldset>                    
                      <fieldset style="margin-top:7px">
                        <span style="padding-right: 300px;;">Cuplikan video Profile</span>
                        <input required type="file" name="cuplikan_vidio_profile" id="cuplikan_vidio_profile" placeholder="Cuplikan video Profile (max 20Mb)">
                      </fieldset>
                      <fieldset>
                        <select name="jenis_mentor" required="" id="jenis_mentor" class="form-select" style="margin-top: 33px;border-radius:500px">
                          <option selected disabled style="text-align: center">--- Jenis Mentor ---</option>
                          <option value="Trainer">Trainer</option>
                          <option value="Motivator">Motivator</option>
                          <option value="Konselor & Hypnotherapist">Konselor & Hypnotherapist</option>
                          <option value="Psikolog">Psikolog</option>
                          <option value="Coach">Coach</option>
                        </select>
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="pendidikan_non_akademik" id="pendidikan_non_akademik" placeholder="Pendidikan Non Akademik">
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="ratecard" id="ratecard" placeholder="Masukan Ratecard anda">
                      </fieldset>
                      <fieldset>
                        <textarea required name="alamat" class="form-control" id="alamat" placeholder="Alamat (Kecamatan,Kota,Provinsi)"></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Submit</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $("#contact").submit(function(event) {
        event.preventDefault();

        // Create a FormData object to handle file uploads
        var formData = new FormData();

        // Append form data, including files, to FormData
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nama_lengkap", $("#nama_lengkap").val());
        formData.append("ttl", $("#ttl").val());
        formData.append("nik", $("#nik").val());
        formData.append("alamat", $("#alamat").val());
        formData.append("pendidikan", $("#pendidikan").val());
        formData.append("pendidikan_non_akademik", $("#pendidikan_non_akademik").val());
        formData.append("keahlian", $("#keahlian").val());
        formData.append("portofolio_kegiatan", $("#portofolio_kegiatan").val());
        formData.append("jenis_mentor", $("#jenis_mentor").val());
        formData.append("ratecard", $("#ratecard").val());
        
        // Append files to FormData
        formData.append("sertifikat_keahlian", $("#sertifikat_keahlian")[0].files[0]);
        formData.append("upload_foto", $("#upload_foto")[0].files[0]);
        formData.append("cuplikan_vidio_profile", $("#cuplikan_vidio_profile")[0].files[0]);

        // Use AJAX to submit the form with FormData
        $.ajax({
            url: '{{ url('daftar_mentor/create') }}',
            type: 'POST',
            data: formData,
            contentType: false, // Don't set content type when sending FormData
            processData: false, // Don't process data (needed for FormData)
            success: function(response) {
                alert(response.message);
                // location.reload();
                window.location.href = '{{ url('/') }}';
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
</script>

@include('template.footer')
