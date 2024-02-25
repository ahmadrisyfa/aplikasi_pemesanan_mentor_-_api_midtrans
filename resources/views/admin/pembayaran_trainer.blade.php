@extends('template_admin.index')

@section('content')
<div class="pagetitle">
    <h1>Data pembayaran Trainer</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data pembayaran Trainer</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('pembayaran_trainer_cetak_tanggal')}}" method="post" target="_blank">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <input class="form-control mt-2" required type="date" name="tanggal_awal" id="tanggal_awal">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control mt-2" required type="date" name="tanggal_akhir" id="tanggal_akhir">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info mt-2" >Cetak Data (Laporan)</button>
                        </div>
                    </div>
                </form>     
            <table class="table table-borderless datatable">
              <h5 class="card-title">Daftar pembayaran Trainer</h5>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                    Tambah Data Pembayaran Mentor
                </button>
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nik</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis Trainer</th>
                  <th scope="col">Tanggal Bulan Tahun</th>
                  <th scope="col">Jumlah Potongan</th>
                  <th scope="col">Jumlah Pembayaran</th>
                  <th scope="col">Foto Pembayaran</th>
                  <th scope="col">Aksi</th>
                  </tr>
              </thead>
            <tbody>
              @foreach ($pembayaran_trainer as $data)                    
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->nik}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->mentor->jenis_mentor}}</td>
                <td>{{$data->tanggal}}</td>                
                <td>{{ 'Rp. ' . number_format($data->jumlah_potongan, 0, ',', '.') }}</td>                
                <td>{{ 'Rp. ' . number_format($data->jumlah_pembayaran, 0, ',', '.') }}</td>
                <td><img src="{{asset('storage/'.$data->foto_pembayaran)}}" alt="foto pembayaran" width="200px">
                </td>                
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
  <div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tambah Data Pembayaran Trainer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="createForm">
                @csrf           
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nik</label>
                    <select required id="nik" class="form-select" onchange="get_create()">
                        <option selected disabled style="text-align: center" value="">--- Nik ---</option>                    
                        @foreach ($mentor as $data_mentor)                            
                            <option value="{{$data_mentor->nik}}" data-nama="{{$data_mentor->nama_lengkap}}"  data-id="{{$data_mentor->id}}" data-jenis="{{$data_mentor->jenis_mentor}}">{{$data_mentor->nik}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Nama</label>
                    <input required readonly type="text" class="form-control" id="nama">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Tanggal</label>
                    <input required type="date" class="form-control" id="tanggal">
                </div>                  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jenis Trainer</label>
                    <input required readonly type="text" class="form-control" id="jenis_trainer_mentor">                
                    <input required readonly type="hidden" class="form-control" id="jenis_trainer">                

                </div>                 
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Potongan</label>
                    <input required type="number" class="form-control" id="jumlah_potongan">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Pembayaran</label>
                    <input required type="number" class="form-control" id="jumlah_pembayaran">
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Foto Pembayaran</label>
                    <input required type="file" class="form-control" id="foto_pembayaran">
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

  <script>
    function get_create() {
        var selectedId = document.getElementById("nik").value;
        var selectedOption = document.querySelector(`#nik option[value='${selectedId}']`);

        var namaLengkap = selectedOption.getAttribute("data-nama");
        var jenisMentor = selectedOption.getAttribute("data-jenis");
        var id = selectedOption.getAttribute("data-id");

        document.getElementById("nama").value = namaLengkap;
        document.getElementById("jenis_trainer").value = id;
        document.getElementById("jenis_trainer_mentor").value = jenisMentor;
    }
</script>

  <div class="modal fade" id="EditModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Data Pembayaran Trainer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="EditForm">
                @csrf                        
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nik</label>
                    <input required  type="hidden" class="form-control" id="edit_id">
                    <select required id="edit_nik" class="form-select" onchange="get_edit()">
                        <option selected disabled style="text-align: center" value="">--- Nik ---</option>                    
                        @foreach ($mentor as $data_mentor)                            
                        <option value="{{$data_mentor->nik}}" data-nama="{{$data_mentor->nama_lengkap}}"  data-id="{{$data_mentor->id}}" data-jenis="{{$data_mentor->jenis_mentor}}">{{$data_mentor->nik}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Nama</label>
                    <input required  type="text" readonly class="form-control" id="edit_nama">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Tanggal</label>
                    <input required type="date" class="form-control" id="edit_tanggal">
                </div>                  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jenis Trainer</label>
                    <input required  type="text" readonly class="form-control" id="edit_jenis_trainer_tampil">
                        <input required  type="hidden" readonly class="form-control" id="edit_jenis_trainer">
                </div>                 
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Potongan</label>
                    <input required type="number" class="form-control" id="edit_jumlah_potongan">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Pembayaran</label>
                    <input required type="number" class="form-control" id="edit_jumlah_pembayaran">
                </div> 
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Foto Pembayaran</label> 
                    <br>
                    <img id="edit_foto_pembayaran_tampil" src="" alt="Uploaded Foto" style="max-width: 300px; max-height: 300px;">   
                    <br>                         
                    <input type="file" class="form-control" id="edit_foto_pembayaran">
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
  <script>
    function get_edit() {
        var selectedId = document.getElementById("edit_nik").value;
        var selectedOption = document.querySelector(`#edit_nik option[value='${selectedId}']`);

        var namaLengkap = selectedOption.getAttribute("data-nama");
        var jenisMentor = selectedOption.getAttribute("data-jenis");
        var id = selectedOption.getAttribute("data-id");

        document.getElementById("edit_nama").value = namaLengkap;
        document.getElementById("edit_jenis_trainer").value = id;
        document.getElementById("edit_jenis_trainer_tampil").value = jenisMentor;
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $("#createForm").submit(function(event) {
        event.preventDefault();

        var formData = new FormData();
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nik", $("#nik").val());
        formData.append("nama", $("#nama").val());
        formData.append("jenis_trainer", $("#jenis_trainer").val());
        formData.append("tanggal", $("#tanggal").val());
        formData.append("jumlah_potongan", $("#jumlah_potongan").val());
        formData.append("jumlah_pembayaran", $("#jumlah_pembayaran").val());
        formData.append("foto_pembayaran", $("#foto_pembayaran")[0].files[0]);
        
        
        $.ajax({
            url: '{{ url('tambah_pembayaran_trainer') }}',
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
            url: '{{ url('edit_pembayaran_trainer') }}/' + id,
            type: 'GET',
            success: function(data) {
                $('#edit_id').val(id);                    
                $('#edit_nik').val(data.nik)
                $('#edit_nama').val(data.nama)
                $('#edit_jenis_trainer').val(data.jenis_trainer)                       
                $('#edit_jenis_trainer_tampil').val(data.mentor.jenis_mentor)                       
                $('#edit_tanggal').val(data.tanggal)                            
                $('#edit_jumlah_potongan').val(data.jumlah_potongan)                       
                $('#edit_jumlah_pembayaran').val(data.jumlah_pembayaran)   
                $('#edit_foto_pembayaran_tampil').attr('src', '<?= asset('storage') ?>/' + data.foto_pembayaran);

            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

    $("#EditForm").submit(function(event) {
        event.preventDefault();

        var id = $('#edit_id').val();
        
        var formData = new FormData();
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nik", $("#edit_nik").val());
        formData.append("nama", $("#edit_nama").val());
        formData.append("jenis_trainer", $("#edit_jenis_trainer").val());
        formData.append("tanggal", $("#edit_tanggal").val());        
        formData.append("jumlah_potongan", $("#edit_jumlah_potongan").val());
        formData.append("jumlah_pembayaran", $("#edit_jumlah_pembayaran").val());    
        formData.append("foto_pembayaran", $("#edit_foto_pembayaran")[0].files[0]); 

        $.ajax({
            url: '{{ url('pembayaran_trainer_update') }}/' + id,
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
    
    $(document).on('click', '.delete', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
            url: '{{ url('pembayaran_trainer_delete') }}/' + id,
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
