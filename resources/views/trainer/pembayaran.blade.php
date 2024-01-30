@extends('template_admin.index')

@section('content')
<div class="pagetitle">
    <h1>Data pembayaran Trainer Anda</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data pembayaran Trainer Anda</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    
            <table class="table table-borderless datatable">
              <h5 class="card-title">Daftar pembayaran Trainer Anda</h5>             
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
              @foreach ($pembayaran as $data)                    
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->nik}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->mentor->nama_lengkap}}</td>
                <td>{{$data->tanggal}}</td>                
                <td>{{ 'Rp. ' . number_format($data->jumlah_potongan, 0, ',', '.') }}</td>                
                <td>{{ 'Rp. ' . number_format($data->jumlah_pembayaran, 0, ',', '.') }}</td>
                <td><img src="{{asset($data->foto_pembayaran)}}" alt="" width="200px"></td>                

                <td>
                  <button type="button" class="btn btn-primary btn-sm detail-button"
                        data-id="{{ $data->id }}" data-bs-toggle="modal"
                        data-bs-target="#DetailModal">
                        Detail
                  </button>           
            
                 
            </tr>
            @endforeach

                
            </tbody>
            </table>

            </div>
        </div>    
    </div>
    </div>
  </section>

  <div class="modal fade" id="DetailModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Detail Data Pembayaran Trainer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="EditForm">
                @csrf                        
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nik</label>
                    <input disabled required  type="number" class="form-control" id="edit_nik">
                    <input  required  type="hidden" class="form-control" id="edit_id">                    
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Nama</label>
                    <input disabled required  type="text" class="form-control" id="edit_nama">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Tanggal</label>
                    <input disabled required type="date" class="form-control" id="edit_tanggal">
                </div>       
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Nama Trainer</label>
                    <input disabled required type="text" class="form-control" id="edit_jenis_trainer">
                </div>                
                {{-- <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jenis</label>
                    <select required id="edit_jenis_trainer" class="form-select">
                        <option selected disabled style="text-align: center" value="">--- Jenis Mentor ---</option>                    
                        @foreach ($mentor as $data_mentor)                            
                        <option value="{{$data_mentor->id}}">{{$data_mentor->nama_lengkap}}</option>
                        @endforeach
                    </select>
                </div>                  --}}
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Potongan</label>
                    <input disabled required type="number" class="form-control" id="edit_jumlah_potongan">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Pembayaran</label>
                    <input disabled required type="number" class="form-control" id="edit_jumlah_pembayaran">
                </div> 
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Foto Pembayaran</label>
                    {{-- <input disabled required type="number" class="form-control" id="edit_jumlah_pembayaran"> --}}
                    <br>
                    <img id="edit_foto_pembayaran_tampil" src="" alt="Uploaded Foto" style="max-width: 300px; max-height: 300px;">   

                </div> 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
        </div>
        </form>

    </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>


    $(document).on('click', '.detail-button', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        $.ajax({
            url: '{{ url('daftar_pembayaran') }}/' + id,
            type: 'GET',
            success: function(data) {
                $('#edit_id').val(id);                    
                $('#edit_nik').val(data.nik)
                $('#edit_nama').val(data.nama)
                $('#edit_jenis_trainer').val(data.jenis_trainer)                       
                $('#edit_tanggal').val(data.tanggal)                       
                $('#edit_jumlah_potongan').val(data.jumlah_potongan)                       
                $('#edit_jumlah_pembayaran').val(data.jumlah_pembayaran)                       
                $('#edit_foto_pembayaran_tampil').attr('src', data.foto_pembayaran);                    

            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

</script>
@endsection
