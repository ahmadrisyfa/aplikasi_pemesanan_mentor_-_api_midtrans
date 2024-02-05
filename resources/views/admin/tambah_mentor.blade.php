@extends('template_admin.index')

@section('content')
    <div class="pagetitle">
        <h1>Data Trainer</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Trainer</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Data Pendaftaran Trainer</h5>
            <table class="table table-borderless datatable">
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">pendidikan</th>
                  <th scope="col">Jenis Trainer</th>          
                  <th scope="col">Ratecard</th>    
                  <th scope="col">Accept</th>
                  <th scope="col">Aksi</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($pendaftaran_mentor as $value)                    
              <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$value->nama_lengkap}}</td>
                  <td>{{$value->pendidikan}}</td>
                  <td>{{$value->jenis_mentor}}</td>
                  <td>{{$value->ratecard}}</td>  
                  <td>
                  <button  data-id="{{ $value->id }}"
                    class="accept_pendaftaran_mentor btn btn-success">Accept</button>
                  
                  <button  data-id="{{ $value->id }}"
                    class="delete_pendaftaran_mentor btn btn-danger">Non Accept</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm detail-pendaftaran-button"
                      data-id="{{ $value->id }}" data-bs-toggle="modal"
                      data-bs-target="#detail_pendaftaran_mentor">
                      Detail
                  </button>
                  </td>                                            
              </tr>
              @endforeach
              <div class="modal fade" id="detail_pendaftaran_mentor" tabindex="-1">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Pendaftaran Trainer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">                
                            <div class="col-12">
                                <input readonly type="hidden" class="form-control" id="detail_pendaftaran_detail_id" name="detail_pendaftaran_detail_id">
                                <label for="nama_barang" class="form-label">Nama Lengkap</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_nama_lengkap" >
                            </div>
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">TTL</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_ttl">
                            </div>                
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Nik</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_nik">
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Alamat</label>
                                <textarea disabled class="form-control" id="detail_pendaftaran_alamat"></textarea>
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Pendidikan</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_pendidikan">
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Pendidikan Non Akademik</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_pendidikan_non_akademik">
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Email</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_email">
                            </div>                    
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Keahlian</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_keahlian">
                            </div>  
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Sertifikat Keahlian</label> <br>
                                {{-- <input disabled type="text" class="form-control" id="detail_pendaftaran_sertifikat_keahlian"> --}}
                                {{-- <img id="detail_pendaftaran_sertifikat_keahlian" src="" alt="Uploaded Sertifikat Keahlian" style="max-width: 300px; max-height: 300px;">                             --}}
                                
                                <div id="detail_gambar_sertifikat" ></div>
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Portofolio Kegiatan</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_portofolio_kegiatan">
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Cuplikan Vidio Profile</label>
                                <br>
                                {{-- <input disabled type="text" class="form-control" id="detail_pendaftaran_cuplikan_vidio_profile"> --}}
                                <video id="detail_pendaftaran_cuplikan_vidio_profile" width="400" height="300" controls>
                                    Your browser does not support the video tag.
                                </video>
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Upload Foto</label>
                                <br>
                                {{-- <input disabled type="text" class="form-control" id="detail_pendaftaran_upload_foto"> --}}
                                <img id="detail_pendaftaran_upload_foto" src="" alt="Uploaded Foto" style="max-width: 300px; max-height: 300px;">                            
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Jenis Trainer</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_jenis_mentor">
                            </div>   
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Rate Card</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_ratecard">
                            </div>   
                                                                                    
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>





            <table class="table table-borderless datatable ">
              <h5 class="card-title mt-5">Daftar Trainer Yang Di Tampilkan Di Website</h5>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#CreateModal">
                Tambah Data Trainer
            </button>     
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Jenis Trainer</th>                  
                  <th scope="col">Aksi</th>
                  </tr>
              </thead>
            <tbody>
              @foreach ($mentor as $data)                    
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->nama_lengkap}}</td>
                {{-- <td>{{$data->harga}}</td> --}}
                <td>{{ 'Rp. ' . number_format($data->ratecard, 0, ',', '.') }}</td>

                <td>{{$data->jenis_mentor}}</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm edit-button"
                        data-id="{{ $data->id }}" data-bs-toggle="modal"
                        data-bs-target="#EditModal">
                        Edit
                  </button>           
            
                  <button data-id="{{ $data->id }}"
                    class="delete btn btn-danger btn-sm">Hapus</button>
            </tr>
            @endforeach

                
            </tbody>
            </table>

            </div>
        </div>    
    </div>
    </div>
  </section>
    <div class="modal fade" id="CreateModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Pendaftaran Trainer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">     
                    <form id="createForm">
                        <div class="col-12">
                            <label for="nama_barang" class="form-label">Nama Lengkap</label>
                            <input  type="text" class="form-control" id="nama_lengkap" >
                        </div>
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">TTL</label>
                            <input  type="text" class="form-control" id="ttl">
                        </div>                
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Nik</label>
                            <input  type="text" class="form-control" id="nik">
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Alamat</label>
                            <textarea  class="form-control" id="alamat"></textarea>
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Pendidikan</label>
                            <input  type="text" class="form-control" id="pendidikan">
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Pendidikan Non Akademik</label>
                            <input  type="text" class="form-control" id="pendidikan_non_akademik">
                        </div> 
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Email</label>
                            <input  type="email" class="form-control" id="email">
                        </div>                       
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Keahlian</label>
                            <input  type="text" class="form-control" id="keahlian">
                        </div>  
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Sertifikat Keahlian</label> <br>
                            <input  type="file" name="detail_pendaftaran_sertifikat_keahlian" id="sertifikat_keahlian" multiple placeholder="Sertifikat Keahlian">
                                                    
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Portofolio Kegiatan</label>
                            <input  type="text" class="form-control" id="portofolio_kegiatan">
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Cuplikan Vidio Profile</label>
                            <br>
                            <input  type="file" name="detail_pendaftaran_cuplikan_vidio_profile" id="cuplikan_vidio_profile" placeholder="Cuplikan video Profile (max 20Mb)">
            
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Upload Foto</label>
                            <br>
                            <input  type="file" name="detail_pendaftaran_upload_foto" id="upload_foto" placeholder="Upload photo (max 1 mb)">
            
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Jenis Trainer</label> <br>
                            <label>
                                <input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Trainer"> Trainer
                            </label>
                            
                            <label>
                                <input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Motivator"> Motivator
                            </label>                                                  
                            <label>
                                <input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Psikolog"> Psikolog
                            </label>
                            
                            <label>
                                <input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Coach"> Coach
                            </label>
                            <label>
                                <input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Konselor & Hypnotherapist"> Konselor & Hypnotherapist
                            </label>
                        </div>   
                        <div class="col-12">
                            <label for="jenis_satuan_barang" class="form-label">Rate Card</label>
                            <input  type="number" class="form-control" id="ratecard">
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
  <div class="modal fade" id="EditModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Pendaftaran Trainer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="EditForm">
                <div class="col-12">
                        <input  type="hidden" class="form-control" id="edit_pendaftaran_detail_id" name="detail_pendaftaran_detail_id">
                    <label for="nama_barang" class="form-label">Nama Lengkap</label>
                    <input  type="text" class="form-control" id="edit_pendaftaran_nama_lengkap" >
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">TTL</label>
                    <input  type="text" class="form-control" id="edit_pendaftaran_ttl">
                </div>                
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Nik</label>
                    <input  type="text" class="form-control" id="edit_pendaftaran_nik">
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Alamat</label>
                    <textarea  class="form-control" id="edit_pendaftaran_alamat"></textarea>
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Pendidikan</label>
                    <input  type="text" class="form-control" id="edit_pendaftaran_pendidikan">
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Pendidikan Non Akademik</label>
                    <input  type="text" class="form-control" id="edit_pendaftaran_pendidikan_non_akademik">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Email</label>
                    <input  type="email" class="form-control" id="edit_pendaftaran_email">
                </div>    

                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Keahlian</label>
                    <input  type="text" class="form-control" id="edit_pendaftaran_keahlian">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Sertifikat Keahlian</label> <br>
                    <input  type="file" name="detail_pendaftaran_sertifikat_keahlian" id="edit_pendaftaran_sertifikat_keahlian" multiple placeholder="Sertifikat Keahlian">
    
                    
                    <div id="container_for_images" ></div>
                    <br>
    
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Portofolio Kegiatan</label>
                    <input  type="text" class="form-control" id="edit_pendaftaran_portofolio_kegiatan">
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Cuplikan Vidio Profile</label>
                    <br>
                    {{-- <input  type="text" class="form-control" id="edit_pendaftaran_cuplikan_vidio_profile"> --}}
                    <video id="edit_pendaftaran_cuplikan_vidio_profile_tampil" width="400" height="300" controls>
                        Your browser does not support the video tag.
                    </video> <br>
                    <input  type="file" name="detail_pendaftaran_cuplikan_vidio_profile" id="edit_pendaftaran_cuplikan_vidio_profile" placeholder="Cuplikan video Profile (max 20Mb)">
    
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Upload Foto</label>
                    <br>
                    <img id="edit_pendaftaran_upload_foto_tampil" src="" alt="Uploaded Foto" style="max-width: 300px; max-height: 300px;">   
                    <br>
                            <input  type="file" name="detail_pendaftaran_upload_foto" id="edit_pendaftaran_upload_foto" placeholder="Upload photo (max 1 mb)">
    
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jenis Trainer</label> <br>
                    <label>
                        <input type="checkbox" style="width: 20px;" id="edit_pendaftaran_jenis_mentor[]" value="Trainer"> Trainer
                      </label>
                      
                      <label>
                        <input type="checkbox" style="width: 20px;" id="edit_pendaftaran_jenis_mentor[]" value="Motivator"> Motivator
                      </label>                                                  
                      <label>
                        <input type="checkbox" style="width: 20px;" id="edit_pendaftaran_jenis_mentor[]" value="Psikolog"> Psikolog
                      </label>
                      
                      <label>
                        <input type="checkbox" style="width: 20px;" id="edit_pendaftaran_jenis_mentor[]" value="Coach"> Coach
                      </label>
                      <label>
                        <input type="checkbox" style="width: 20px;" id="edit_pendaftaran_jenis_mentor[]" value="Konselor & Hypnotherapist"> Konselor & Hypnotherapist
                      </label>
                </div>   
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Rate Card</label>
                    <input  type="number" class="form-control" id="edit_pendaftaran_ratecard">
                </div>   
                <div class="col-12 mt-2">
                  <button type="reset" class="btn btn-primary">Reset</button>            
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>                                    
            </form>

    </div>
    </div>
  </div>
    
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    
    $("#createForm").submit(function(event) {
        event.preventDefault();

        // Create a FormData object to handle file uploads
        var formData = new FormData();

        // Append form data, including files, to FormData
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nama_lengkap", $("#nama_lengkap").val());
        formData.append("email", $("#email").val());
        formData.append("ttl", $("#ttl").val());
        formData.append("nik", $("#nik").val());
        formData.append("alamat", $("#alamat").val());
        formData.append("pendidikan", $("#pendidikan").val());
        formData.append("pendidikan_non_akademik", $("#pendidikan_non_akademik").val());
        formData.append("keahlian", $("#keahlian").val());
        formData.append("portofolio_kegiatan", $("#portofolio_kegiatan").val());
        var selectedMentorTypes = [];
        $('input[id="jenis_mentor[]"]:checked').each(function() {
            selectedMentorTypes.push($(this).val());
        });

        formData.append("jenis_mentor", selectedMentorTypes);

        formData.append("ratecard", $("#ratecard").val());
        
      
        // formData.append("sertifikat_keahlian", $("#sertifikat_keahlian")[0].files[0]);
        var sertifikatFiles = $("#sertifikat_keahlian")[0].files;

        for (var i = 0; i < sertifikatFiles.length; i++) {
            formData.append("sertifikat_keahlian[]", sertifikatFiles[i]);
        }

        formData.append("upload_foto", $("#upload_foto")[0].files[0]);
        formData.append("cuplikan_vidio_profile", $("#cuplikan_vidio_profile")[0].files[0]);

        // Use AJAX to submit the form with FormData
        $.ajax({
            url: '{{ url('tambah_mentor_store') }}',
            type: 'POST',
            data: formData,
            contentType: false, // Don't set content type when sending FormData
            processData: false, // Don't process data (needed for FormData)
            success: function(response) {
                alert(response.message);
                location.reload();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });


    
    $(document).on('click', '.edit-button', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            // url: '{{ url('daftar_pendaftaran') }}/' + id,
            url: '{{ url('tambah_mentor_admin_edit') }}/' + id,

            type: 'GET',
            success: function(data) {
                    $('#edit_pendaftaran_detail_id').val(id);                    
                $('#edit_pendaftaran_nama_lengkap').val(data.nama_lengkap);
                $('#edit_pendaftaran_ttl').val(data.ttl);
                $('#edit_pendaftaran_nik').val(data.nik);
                $('#edit_pendaftaran_email').val(data.email);
                $('#edit_pendaftaran_alamat').val(data.alamat);
                $('#edit_pendaftaran_pendidikan').val(data.pendidikan);
                $('#edit_pendaftaran_pendidikan_non_akademik').val(data.pendidikan_non_akademik);
                $('#edit_pendaftaran_keahlian').val(data.keahlian);
                $('#edit_pendaftaran_portofolio_kegiatan').val(data.portofolio_kegiatan);
                // $('#edit_pendaftaran_sertifikat_keahlian').attr('src', data.sertifikat_keahlian);
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
                $('#edit_pendaftaran_cuplikan_vidio_profile_tampil').attr('src', data.cuplikan_vidio_profile);
                $('#edit_pendaftaran_upload_foto_tampil').attr('src', data.upload_foto);
                // $('#edit_pendaftaran_jenis_mentor').val(data.jenis_mentor);
                var jenisMentorValues = data.jenis_mentor;
                $('input[id="edit_pendaftaran_jenis_mentor[]"]').each(function() {
                    var checkboxValue = $(this).val();

                    if (jenisMentorValues.indexOf(checkboxValue) !== -1) {
                        $(this).prop('checked', true);
                    } else {
                        $(this).prop('checked', false);
                    }
                });
                $('#edit_pendaftaran_ratecard').val(data.ratecard);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
    $("#EditForm").submit(function(event) {
        event.preventDefault();

        // Create a FormData object to handle file uploads
        var formData = new FormData();

        // Append form data, including files, to FormData
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("edit_pendaftaran_nama_lengkap", $("#edit_pendaftaran_nama_lengkap").val());
        formData.append("edit_pendaftaran_email", $("#edit_pendaftaran_email").val());
        formData.append("edit_pendaftaran_ttl", $("#edit_pendaftaran_ttl").val());
        formData.append("edit_pendaftaran_nik", $("#edit_pendaftaran_nik").val());
        formData.append("edit_pendaftaran_alamat", $("#edit_pendaftaran_alamat").val());
        formData.append("edit_pendaftaran_pendidikan", $("#edit_pendaftaran_pendidikan").val());
        formData.append("edit_pendaftaran_pendidikan_non_akademik", $("#edit_pendaftaran_pendidikan_non_akademik").val());
        formData.append("edit_pendaftaran_keahlian", $("#edit_pendaftaran_keahlian").val());
        formData.append("edit_pendaftaran_portofolio_kegiatan", $("#edit_pendaftaran_portofolio_kegiatan").val());
        var selectedMentorTypes = [];
        $('input[id="edit_pendaftaran_jenis_mentor[]"]:checked').each(function() {
            selectedMentorTypes.push($(this).val());
        });

        formData.append("edit_pendaftaran_jenis_mentor", selectedMentorTypes);

        formData.append("edit_pendaftaran_ratecard", $("#edit_pendaftaran_ratecard").val());
        
      
    
        var sertifikatFiles = $("#edit_pendaftaran_sertifikat_keahlian")[0].files;

        for (var i = 0; i < sertifikatFiles.length; i++) {
            formData.append("edit_pendaftaran_sertifikat_keahlian[]", sertifikatFiles[i]);
        }

        formData.append("edit_pendaftaran_upload_foto", $("#edit_pendaftaran_upload_foto")[0].files[0]);
        formData.append("edit_pendaftaran_cuplikan_vidio_profile", $("#edit_pendaftaran_cuplikan_vidio_profile")[0].files[0]);

        // Use AJAX to submit the form with FormData
        var id = $('#edit_pendaftaran_detail_id').val();
        $.ajax({
            // url: '{{ url('daftar_pendaftaran/update') }}/' + id, 
            url: '{{ url('tambah_mentor_update') }}/' + id,

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


      $(document).on('click', '.detail-pendaftaran-button', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        $.ajax({
            url: '{{ url('tambah_mentor_detail') }}/' + id,
            type: 'GET',
            success: function(data) {
                $('#detail_pendaftaran_detail_id').val(id);                    
                $('#detail_pendaftaran_nama_lengkap').val(data.nama_lengkap);
                $('#detail_pendaftaran_ttl').val(data.ttl);
                $('#detail_pendaftaran_nik').val(data.nik);
                $('#detail_pendaftaran_email').val(data.email);                
                $('#detail_pendaftaran_alamat').val(data.alamat);
                $('#detail_pendaftaran_pendidikan').val(data.pendidikan);
                $('#detail_pendaftaran_pendidikan_non_akademik').val(data.pendidikan_non_akademik);
                $('#detail_pendaftaran_keahlian').val(data.keahlian);
                $('#detail_pendaftaran_portofolio_kegiatan').val(data.portofolio_kegiatan);
                // $('#detail_pendaftaran_sertifikat_keahlian').attr('src', data.sertifikat_keahlian);
                var containerForImages = $('#detail_gambar_sertifikat');
                containerForImages.empty(); // Kosongkan container untuk menghindari duplikasi

                if (Array.isArray(data.sertifikat_keahlian) && data.sertifikat_keahlian.length > 0) {
                    for (var i = 0; i < data.sertifikat_keahlian.length; i++) {
                        var imgElement = $('<img  style="max-width: 300px;margin-bottom:20px;margin-right:20px">').attr('src', data.sertifikat_keahlian[i]).addClass('sertifikat-image');
                        containerForImages.append(imgElement);
                    }
                } else {
                    containerForImages.append('<p>Tidak ada sertifikat keahlian yang diunggah.</p>');
                }
                $('#detail_pendaftaran_cuplikan_vidio_profile').attr('src', data.cuplikan_vidio_profile);
                $('#detail_pendaftaran_upload_foto').attr('src', data.upload_foto);
                $('#detail_pendaftaran_jenis_mentor').val(data.jenis_mentor);
                $('#detail_pendaftaran_ratecard').val(data.ratecard);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
      });


      $(document).on('click', '.delete', function(event) {
                event.preventDefault();
                var id = $(this).data('id');

                if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                    $.ajax({
                        url: '{{ url('tambah_mentor_delete') }}/' + id,

                        type: 'get',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            alert(response.message);
                            location.reload();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
        });
        $(document).on('click', '.delete_pendaftaran_mentor', function(event) {
                event.preventDefault();
                var id = $(this).data('id');

                if (confirm("Apakah Anda yakin Tidak Menerima Trainer ini?")) {
                    $.ajax({
                        url: '{{ url('delete_pendaftaran_mentor') }}/' + id,

                        type: 'get',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            alert(response.message);
                            location.reload();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
        });
        $(document).on('click', '.accept_pendaftaran_mentor', function(event) {
                event.preventDefault();
                var id = $(this).data('id');

                if (confirm("Accept Trainer Ini?")) {
                    $.ajax({
                        url: '{{ url('accept_pendaftaran_mentor') }}/' + id,

                        type: 'get',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            alert(response.message);
                            location.reload();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
        });

            
</script>
@endsection