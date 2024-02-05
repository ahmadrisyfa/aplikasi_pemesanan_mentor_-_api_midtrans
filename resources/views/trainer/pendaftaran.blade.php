@extends('template_admin.index')

@section('content')
<div class="pagetitle">
    <h1>Data Trainer Anda</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#detaiL_pendaftaran_">Home</a></li>
        <li class="breadcrumb-item active">Data Trainer Anda</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
        <div class="card-body">
        <form id="update">
            <div class="col-12">
                    <input  type="hidden" value="{{$data->id}}" class="form-control" id="detail_pendaftaran_detail_id" name="detail_pendaftaran_detail_id">
                <label for="nama_barang" class="form-label">Nama Lengkap</label>
                <input  type="text" class="form-control" id="detail_pendaftaran_nama_lengkap" >
            </div>
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">TTL</label>
                <input  type="text" class="form-control" id="detail_pendaftaran_ttl">
            </div>                
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Nik</label>
                <input  type="text" class="form-control" id="detail_pendaftaran_nik">
            </div>   
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Alamat</label>
                <textarea  class="form-control" id="detail_pendaftaran_alamat"></textarea>
            </div>   
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Pendidikan</label>
                <input  type="text" class="form-control" id="detail_pendaftaran_pendidikan">
            </div>   
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Pendidikan Non Akademik</label>
                <input  type="text" class="form-control" id="detail_pendaftaran_pendidikan_non_akademik">
            </div>                       
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Keahlian</label>
                <input  type="text" class="form-control" id="detail_pendaftaran_keahlian">
            </div>  
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Sertifikat Keahlian</label> <br>
                <input  type="file" name="detail_pendaftaran_sertifikat_keahlian" id="detail_pendaftaran_sertifikat_keahlian" multiple placeholder="Sertifikat Keahlian">

                
                <div id="container_for_images" ></div>
                <br>

            </div>   
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Portofolio Kegiatan</label>
                <input  type="text" class="form-control" id="detail_pendaftaran_portofolio_kegiatan">
            </div>   
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Cuplikan Vidio Profile</label>
                <br>
                {{-- <input  type="text" class="form-control" id="detail_pendaftaran_cuplikan_vidio_profile"> --}}
                <video id="detail_pendaftaran_cuplikan_vidio_profile_tampil" width="400" height="300" controls>
                    Your browser does not support the video tag.
                </video> <br>
                <input  type="file" name="detail_pendaftaran_cuplikan_vidio_profile" id="detail_pendaftaran_cuplikan_vidio_profile" placeholder="Cuplikan video Profile (max 20Mb)">

            </div>   
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Upload Foto</label>
                <br>
                <img id="detail_pendaftaran_upload_foto_tampil" src="" alt="Uploaded Foto" style="max-width: 300px; max-height: 300px;">   
                <br>
                        <input  type="file" name="detail_pendaftaran_upload_foto" id="detail_pendaftaran_upload_foto" placeholder="Upload photo (max 1 mb)">

            </div>   
            {{-- <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Jenis Trainer</label> <br>
                <label>
                    <input type="checkbox" style="width: 20px;" id="detail_pendaftaran_jenis_mentor[]" value="Trainer"> Trainer
                  </label>
                  
                  <label>
                    <input type="checkbox" style="width: 20px;" id="detail_pendaftaran_jenis_mentor[]" value="Motivator"> Motivator
                  </label>                                                  
                  <label>
                    <input type="checkbox" style="width: 20px;" id="detail_pendaftaran_jenis_mentor[]" value="Psikolog"> Psikolog
                  </label>
                  
                  <label>
                    <input type="checkbox" style="width: 20px;" id="detail_pendaftaran_jenis_mentor[]" value="Coach"> Coach
                  </label>
                  <label>
                    <input type="checkbox" style="width: 20px;" id="detail_pendaftaran_jenis_mentor[]" value="Konselor & Hypnotherapist"> Konselor & Hypnotherapist
                  </label>
            </div>    --}}
            <div class="col-12">
                <label for="jenis_satuan_barang" class="form-label">Rate Card</label>
                <input  type="number" class="form-control" id="detail_pendaftaran_ratecard">
            </div>   
            <div class="col-12 mt-2">
              <button type="reset" class="btn btn-primary">Reset</button>            
              <button type="submit" class="btn btn-success">Submit</button>
            </div>                                    
        </form>
        </div>
        </div>    
    </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    
    $(document).ready(function () {
        var id = $('#detail_pendaftaran_detail_id').val();
        $.ajax({
            url: '{{ url('daftar_pendaftaran') }}/' + id,
            type: 'GET',
            success: function(data) {
                    // $('#detail_pendaftaran_detail_id').val(id);                    
                $('#detail_pendaftaran_nama_lengkap').val(data.nama_lengkap);
                $('#detail_pendaftaran_ttl').val(data.ttl);
                $('#detail_pendaftaran_nik').val(data.nik);
                $('#detail_pendaftaran_alamat').val(data.alamat);
                $('#detail_pendaftaran_pendidikan').val(data.pendidikan);
                $('#detail_pendaftaran_pendidikan_non_akademik').val(data.pendidikan_non_akademik);
                $('#detail_pendaftaran_keahlian').val(data.keahlian);
                $('#detail_pendaftaran_portofolio_kegiatan').val(data.portofolio_kegiatan);
                // $('#detail_pendaftaran_sertifikat_keahlian').attr('src', data.sertifikat_keahlian);
                var containerForImages = $('#container_for_images');
                containerForImages.empty(); // Kosongkan container untuk menghindari duplikasi

                if (Array.isArray(data.sertifikat_keahlian) && data.sertifikat_keahlian.length > 0) {
                    for (var i = 0; i < data.sertifikat_keahlian.length; i++) {
                        var imgElement = $('<img  style="max-width: 300px;margin-bottom:20px;margin-right:20px">').attr('src', data.sertifikat_keahlian[i]).addClass('sertifikat-image');
                        containerForImages.append(imgElement);
                    }
                } else {
                    containerForImages.append('<p>Tidak ada sertifikat keahlian yang diunggah.</p>');
                }
                $('#detail_pendaftaran_cuplikan_vidio_profile_tampil').attr('src', data.cuplikan_vidio_profile);
                $('#detail_pendaftaran_upload_foto_tampil').attr('src', data.upload_foto);
                // $('#detail_pendaftaran_jenis_mentor').val(data.jenis_mentor);
                var jenisMentorValues = data.jenis_mentor;
                $('input[id="detail_pendaftaran_jenis_mentor[]"]').each(function() {
                    var checkboxValue = $(this).val();

                    if (jenisMentorValues.indexOf(checkboxValue) !== -1) {
                        $(this).prop('checked', true);
                    } else {
                        $(this).prop('checked', false);
                    }
                });
                $('#detail_pendaftaran_ratecard').val(data.ratecard);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
    $("#update").submit(function(event) {
        event.preventDefault();

        // Create a FormData object to handle file uploads
        var formData = new FormData();

        // Append form data, including files, to FormData
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("detail_pendaftaran_nama_lengkap", $("#detail_pendaftaran_nama_lengkap").val());
        formData.append("detail_pendaftaran_email", $("#detail_pendaftaran_email").val());
        formData.append("detail_pendaftaran_ttl", $("#detail_pendaftaran_ttl").val());
        formData.append("detail_pendaftaran_nik", $("#detail_pendaftaran_nik").val());
        formData.append("detail_pendaftaran_alamat", $("#detail_pendaftaran_alamat").val());
        formData.append("detail_pendaftaran_pendidikan", $("#detail_pendaftaran_pendidikan").val());
        formData.append("detail_pendaftaran_pendidikan_non_akademik", $("#detail_pendaftaran_pendidikan_non_akademik").val());
        formData.append("detail_pendaftaran_keahlian", $("#detail_pendaftaran_keahlian").val());
        formData.append("detail_pendaftaran_portofolio_kegiatan", $("#detail_pendaftaran_portofolio_kegiatan").val());
        var selectedMentorTypes = [];
        $('input[id="detail_pendaftaran_jenis_mentor[]"]:checked').each(function() {
            selectedMentorTypes.push($(this).val());
        });

        formData.append("detail_pendaftaran_jenis_mentor", selectedMentorTypes);

        formData.append("detail_pendaftaran_ratecard", $("#detail_pendaftaran_ratecard").val());
        
      
    
        var sertifikatFiles = $("#detail_pendaftaran_sertifikat_keahlian")[0].files;

        for (var i = 0; i < sertifikatFiles.length; i++) {
            formData.append("detail_pendaftaran_sertifikat_keahlian[]", sertifikatFiles[i]);
        }

        formData.append("detail_pendaftaran_upload_foto", $("#detail_pendaftaran_upload_foto")[0].files[0]);
        formData.append("detail_pendaftaran_cuplikan_vidio_profile", $("#detail_pendaftaran_cuplikan_vidio_profile")[0].files[0]);

        // Use AJAX to submit the form with FormData
        var id = $('#detail_pendaftaran_detail_id').val();
        $.ajax({
            url: '{{ url('daftar_pendaftaran/update') }}/' + id, 
            type: 'POST',
            data: formData,
            contentType: false, // Don't set content type when sending FormData
            processData: false, // Don't process data (needed for FormData)
            success: function(response) {
                alert(response.message);
                location.reload();
                // window.location.href = '{{ url('/') }}';
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
  </script>
@endsection
