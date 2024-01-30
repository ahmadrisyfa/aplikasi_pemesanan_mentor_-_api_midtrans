@extends('template_admin.index')

@section('content')
<div class="pagetitle">
    <h1>Data Login Trainer</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Login Trainer</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{-- <form action="{{url('pembayaran_trainer_cetak_tanggal')}}" method="post" target="_blank">
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
                </form>      --}}
            <table class="table table-borderless datatable">
              <h5 class="card-title">Daftar Login Trainer</h5>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah Data Login Trainer
            </button>
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Nama Trainer</th>            
                  <th scope="col">Aksi</th>
                  </tr>
              </thead>
            <tbody>
              @foreach ($data as $value)                    
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->pendaftaranMentor->nama_lengkap}}</td>
                <td>                                       
                  <button data-id="{{ $value->id }}"
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
            <h5 class="modal-title">Tambah Data Login Trainer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form action="{{url('admin/daftar_login_trainer/create')}}" method="POST">
                @csrf           
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nama Trainer</label>
                    <select name="email" id="email" required class="form-control" onchange="updateInput()">
                        <option value="" disabled selected>-- Pilih Nama Trainer --</option>
                        @foreach ($pendaftaran_trainer as $value)
                            <option value="{{$value->email}}">{{$value->nama_lengkap}}</option>    
                        @endforeach
                    </select>                        
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Nama</label>
                    <input required  type="text" class="form-control" id="name" name="name">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Email</label>
                    <input required type="email" disabled class="form-control" id="email_input" name="email_input">
                </div>                                               
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Password</label>
                    <input required type="password" class="form-control" id="password" name="password">
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
    function updateInput() {
        // Mendapatkan elemen select
        var dropdown = document.getElementById("email");
        
        // Mendapatkan nilai yang dipilih
        var selectedValue = dropdown.options[dropdown.selectedIndex].value;
        
        // Mengatur nilai input
        document.getElementById("email_input").value = selectedValue;
    }
</script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    
    $(document).on('click', '.delete', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
            url: '{{ url('admin/daftar_login_trainer/delete') }}/' + id,
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
