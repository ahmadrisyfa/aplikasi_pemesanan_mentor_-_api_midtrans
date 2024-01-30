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
                                <label for="jenis_satuan_barang" class="form-label">Keahlian</label>
                                <input disabled type="text" class="form-control" id="detail_pendaftaran_keahlian">
                            </div>  
                            <div class="col-12">
                                <label for="jenis_satuan_barang" class="form-label">Sertifikat Keahlian</label> <br>
                                {{-- <input disabled type="text" class="form-control" id="detail_pendaftaran_sertifikat_keahlian"> --}}
                                {{-- <img id="detail_pendaftaran_sertifikat_keahlian" src="" alt="Uploaded Sertifikat Keahlian" style="max-width: 300px; max-height: 300px;">                             --}}
                                
                                <div id="container_for_images" ></div>
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
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
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

  <div class="modal fade" id="EditModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Pendaftaran Trainer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="EditForm">
                @csrf           
                <div class="col-12">
                    <input type="hidden" id="detail_admin_id" class="form-label">
                    <label for="nama_barang" class="form-label">Nama Lengkap</label>
                    <input required  type="text" class="form-control" id="edit_nama" name="edit_nama" >
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Foto</label> <br>
                    <img id="tampil_foto" src="" alt="Uploaded Foto" style="max-width: 300px; max-height: 300px;">                            
                    <input  type="file" class="form-control" id="edit_photo"  name="edit_photo">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Pendidikan</label>
                    <input required  type="text" class="form-control" id="edit_pendidikan" name="edit_pendidikan">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Keahlian</label>
                    <input required  type="text" class="form-control" id="edit_keahlian" name="edit_keahlian">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Portofolio</label>
                    <input required  type="text" class="form-control" id="edit_portofolio" name="edit_portofolio">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Vidio Profile</label><br>
                    <video id="tampil_vidio" width="400" height="300" controls>
                        Your browser does not support the video tag.
                    </video>
                    <input   type="file" class="form-control" id="edit_vidio_profile" name="edit_vidio_profile">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Harga</label>
                    <input required  type="number" class="form-control" id="edit_harga"  name="edit_harga">
                </div>  
                {{-- <div class="col-12">
                    <input required  type="text" class="form-control" id="edit_jenis" nama="edit_jenis">
                </div>   --}}
                <div class="col-12">
                        <label for="jenis_satuan_barang" class="form-label">Jenis</label>
                        {{-- <select name="edit_jenis" required="" id="edit_jenis" class="form-select">
                          <option selected disabled style="text-align: center">--- Jenis Trainer ---</option>
                          <option value="Trainer">Trainer</option>
                          <option value="Motivator">Motivator</option>
                          <option value="Konselor & Hypnotherapist">Konselor & Hypnotherapist</option>
                          <option value="Psikolog">Psikolog</option>
                          <option value="Coach">Coach</option>
                        </select> --}}
                        <label>
                            <input type="checkbox" style="width: 20px;" id="edit_jenis[]" value="Trainer"> Trainer
                          </label>
                          
                          <label>
                            <input type="checkbox" style="width: 20px;" id="edit_jenis[]" value="Motivator"> Motivator
                          </label>                                                  
                          <label>
                            <input type="checkbox" style="width: 20px;" id="edit_jenis[]" value="Psikolog"> Psikolog
                          </label>
                          
                          <label>
                            <input type="checkbox" style="width: 20px;" id="edit_jenis[]" value="Coach"> Coach
                          </label>
                          <label>
                            <input type="checkbox" style="width: 20px;" id="edit_jenis[]" value="Konselor & Hypnotherapist"> Konselor & Hypnotherapist
                          </label>
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Alamat</label>
                    <textarea required   class="form-control" id="edit_alamat"  name="edit_alamat"></textarea>
                </div>  

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>

    </div>
    </div>
  </div>
  <div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tambah Data Pendaftaran Trainer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="createForm">
                @csrf           
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nama Lengkap</label>
                    <input required  type="text" class="form-control" id="nama" >
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Foto</label>
                    <input required  type="file" class="form-control" id="photo">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Pendidikan</label>
                    <input required  type="text" class="form-control" id="pendidikan">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Keahlian</label>
                    <input required  type="text" class="form-control" id="keahlian">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Portofolio</label>
                    <input required  type="text" class="form-control" id="portofolio">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Vidio Profile</label>
                    <input required  type="file" class="form-control" id="vidio_profile">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Harga</label>
                    <input required  type="number" class="form-control" id="harga">
                </div>  
                {{-- <div class="col-12">
                    <input required  type="text" class="form-control" id="jenis">
                </div>   --}}
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jenis</label>
                    <select name="jenis" required id="jenis" class="form-select">
                      <option selected disabled style="text-align: center">--- Jenis Trainer ---</option>
                      <option value="Trainer">Trainer</option>
                      <option value="Motivator">Motivator</option>
                      <option value="Konselor & Hypnotherapist">Konselor & Hypnotherapist</option>
                      <option value="Psikolog">Psikolog</option>
                      <option value="Coach">Coach</option>
                    </select>
            </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Alamat</label>
                    <textarea required   class="form-control" id="alamat"></textarea>
                </div>  

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>

    </div>
    </div>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $("#createForm").submit(function(event) {
        event.preventDefault();

        var formData = new FormData();
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nama_lengkap", $("#nama").val());
        formData.append("upload_foto", $("#photo")[0].files[0]); // Assuming #photo is a file input
        formData.append("keahlian", $("#keahlian").val());
        formData.append("pendidikan", $("#pendidikan").val());
        formData.append("portofolio_kegiatan", $("#portofolio").val());
        formData.append("cuplikan_vidio_profile", $("#vidio_profile")[0].files[0]); // Assuming #vidio_profile is a file input
        formData.append("ratecard", $("#harga").val());
        formData.append("jenis_mentor", $("#jenis").val());
        formData.append("alamat", $("#alamat").val());

        $.ajax({
            url: '{{ url('tambah_mentor_store') }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
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
            url: '{{ url('tambah_mentor_admin_edit') }}/' + id,
            type: 'GET',
            success: function(data) {
                $('#detail_admin_id').val(id);                    
                $('#edit_nama').val(data.nama_lengkap)
                // $('#edit_photo').val(data.photo)
                $('#edit_keahlian').val(data.keahlian)
                $('#edit_pendidikan').val(data.pendidikan)
                $('#edit_portofolio').val(data.portofolio_kegiatan)
                // $('#edit_vidio_profile').val(data.vidio_profile)
                $('#tampil_vidio').attr('src', data.cuplikan_vidio_profile);
                $('#tampil_foto').attr('src', data.upload_foto);

                $('#edit_harga').val(data.ratecard)

                var jenisMentorValues = data.jenis_mentor;
                $('input[id="edit_jenis[]"]').each(function() {
                    var checkboxValue = $(this).val();

                    if (jenisMentorValues.indexOf(checkboxValue) !== -1) {
                        $(this).prop('checked', true);
                    } else {
                        $(this).prop('checked', false);
                    }
                });

                $('#edit_alamat').val(data.alamat)
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

    $("#EditForm").submit(function(event) {
    event.preventDefault();

    var id = $('#detail_admin_id').val();
    
    var formData = new FormData();
    formData.append("_token", "{{ csrf_token() }}");
    formData.append("edit_nama", $("#edit_nama").val());
    formData.append("edit_photo", $("#edit_photo")[0].files[0]); 
    formData.append("edit_keahlian", $("#edit_keahlian").val());
    formData.append("edit_pendidikan", $("#edit_pendidikan").val());
    formData.append("edit_portofolio", $("#edit_portofolio").val());
    formData.append("edit_vidio_profile", $("#edit_vidio_profile")[0].files[0]);
    formData.append("edit_harga", $("#edit_harga").val());

    var selectedEditJenis = [];
    $('input[id="edit_jenis[]"]:checked').each(function() {
        selectedEditJenis.push($(this).val());
    });
    formData.append("edit_jenis", selectedEditJenis);
    // formData.append("edit_jenis", $("#edit_jenis").val());
    formData.append("edit_alamat", $("#edit_alamat").val());

    $.ajax({
        url: '{{ url('tambah_mentor_update') }}/' + id,
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            alert(response.message);
            location.reload();
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