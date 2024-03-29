@extends('template_admin.index')

@section('content')
<div class="pagetitle">
    <h1>Data Pembayaran Layanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Pembayaran Layanan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <table class="table table-striped ">
              <h5 class="card-title">Daftar Pembayaran Layanan</h5>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#CreateModal">
                Tambah Data Pembayaran Layanan
            </button>     
            <form action="{{url('pemesanan_cetak_tanggal')}}" method="post" target="_blank">
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
            {{-- <a href="{{url('pemesanan_cetak')}}" class="btn btn-success mt-2" target="_blank">Cetak data (Laporan)</a> --}}
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal Kegiatan</th>
                  <th scope="col">Trainer</th>           
                  <th scope="col">Pembayaran</th>     
                  <th scope="col">Aksi</th>
                  </tr>
              </thead>
            <tbody>
              @foreach ($pemesanan as $data)                    
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->nama}}</td>
                <td>{{$data->tanggal_kegiatan}}</td>
                @if($data->mentor)
                <td>{{$data->mentor->nama_lengkap}}</td>
                @endif
                <td>                    
                    @if($data->bayar == 0)
                        <button class="btn btn-danger">Belum Bayar</button>
                    @elseif($data->bayar == 1)
                        <button class="btn btn-success">Lunas</button>
                    @endif
                </td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm edit-button"
                        data-id="{{ $data->id }}" data-bs-toggle="modal"
                        data-bs-target="#EditModal">
                        Edit
                  </button>           
            
                  <button data-id="{{ $data->id }}"
                    class="delete btn btn-danger btn-sm">Hapus</button>
                    <a href="{{url('invoice/'.$data->id.'/pemesanan')}}" class="btn btn-info" target="_blank">Cetak</a>
                    {{-- <a href="{{url('invoice/'.$data->id.'/pemesanan')}}" class="btn btn-success">Link</a> --}}
                    <button onclick="copyToClipboard('{{url('pemesanan_mentor/'.$data->id)}}')" class="btn btn-success">Link</button>

            </tr>
            @endforeach

            <script>
                function copyToClipboard(text) {
                  var input = document.createElement('input');
                  input.setAttribute('value', text);
                  document.body.appendChild(input);
                  input.select();
                  document.execCommand('copy');
                  document.body.removeChild(input);
                  alert('Tautan berhasil disalin: ' + text);
                }
                </script>
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
            <h5 class="modal-title">Create Pembayaran Layanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="createForm">                  
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nama Trainer</label>
                    <select name="mentor_id" id="create_mentor_id" class="form-control" required>
                        <option value="" selected disabled style="text-align: center">-- Silahkan Pilih Trainer --</option>
                        @foreach ($mentor as $value)                            
                        <option value="{{$value->id}}">{{$value->nama_lengkap}}</option>
                        @endforeach
                    </select>
                </div>      
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nama Lengkap</label>
                    <input class="form-control" required type="text"  name="nama" id="create_nama" placeholder="Masukan nama Anda">
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">No Hp</label> <br>
                    <input class="form-control" required type="number" name="no_hp" id="create_no_hp" placeholder="Masukan No Whatsapp Anda">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Instansi</label>
                    <input class="form-control" required type="text"  name="instansi" id="create_instansi" placeholder="Masukan Instansi Atau Perusahaan Anda">

                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Lokasi Kegiatan</label>
                    <input class="form-control" required type="text"  name="lokasi_kegiatan" id="create_lokasi_kegiatan" placeholder="Masukan Lokasi Kegiatan Anda">
                    
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Tanggal Kegiatan</label>
                    <input class="form-control" required type="date" name="tanggal_kegiatan" id="create_tanggal_kegiatan" placeholder="Masukan Tanggal Kegiatan Anda">
                    
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jam</label><br>
                    <input class="form-control" required type="time" name="jam" id="create_jam" placeholder="Masukan Jam Metting Anda Anda">

                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Kendala Yang Di Alami</label>
                    <input class="form-control" required type="text"  name="kendala_yang_di_alami" id="create_kendala_yang_di_alami" placeholder="Masukan Kendala Yang Di Alami Anda">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Harapan Dari Adanya Kegiatan</label>
                    <input class="form-control" required type="text"  name="harapan_dari_adanya_kegiatan" id="create_harapan_dari_adanya_kegiatan" placeholder="Masukan Kendala Yang Di Alami Anda">
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Pembayaran</label>
                    <input class="form-control" required type="number"  name="jumlah_pembayaran" id="create_jumlah_pembayaran" placeholder="Masukan Jumlah Pembayaran Anda">
                </div>
                
                <div class="col-12">
                        <label for="jenis_satuan_barang" class="form-label">Payment</label>
                        <select name="bayar" required="" id="create_bayar" class="form-select">
                          <option selected disabled style="text-align: center">--- Payment ---</option>
                          <option value="0">Belum Bayar</option>
                          <option value="1">Lunas</option>                         
                        </select>
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Alamat Instansi</label>
                    <textarea required type="subject" name="alamat_instansi" id="create_alamat_instansi"  class="form-control" placeholder="Masukan Alamat Instansi Anda"></textarea>
                    
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
  <div class="modal fade" id="EditModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Pembayaran Layanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">     
            <form id="EditForm">   
                <div class="col-12">
                    <label for="nama_barang" class="form-label">Nama Trainer</label>
                    <select name="mentor_id" id="mentor_id" class="form-control" required>
                        <option value="" selected disabled style="text-align: center">-- Silahkan Pilih Trainer --</option>
                        @foreach ($mentor as $value)                            
                        <option value="{{$value->id}}">{{$value->nama_lengkap}}</option>
                        @endforeach
                    </select>
                </div>                      
                <div class="col-12">
                    <input type="hidden" id="detail_admin_id" class="form-label">
                    <label for="nama_barang" class="form-label">Nama Lengkap</label>
                    <input class="form-control" required type="text"  name="nama" id="nama" placeholder="Masukan nama Anda">
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">No Hp</label> <br>
                    <input class="form-control" required type="number" name="no_hp" id="no_hp" placeholder="Masukan No Whatsapp Anda">
                </div>                                                                                                    
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Instansi</label>
                    <input class="form-control" required type="text"  name="instansi" id="instansi" placeholder="Masukan Instansi Atau Perusahaan Anda">

                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Lokasi Kegiatan</label>
                    <input class="form-control" required type="text"  name="lokasi_kegiatan" id="lokasi_kegiatan" placeholder="Masukan Lokasi Kegiatan Anda">
                    
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Tanggal Kegiatan</label>
                    <input class="form-control" required type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" placeholder="Masukan Tanggal Kegiatan Anda">
                    
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jam</label><br>
                    <input class="form-control" required type="time" name="jam" id="jam" placeholder="Masukan Jam Metting Anda Anda">

                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Kendala Yang Di Alami</label>
                    <input class="form-control" required type="text"  name="kendala_yang_di_alami" id="kendala_yang_di_alami" placeholder="Masukan Kendala Yang Di Alami Anda">
                </div>  
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Harapan Dari Adanya Kegiatan</label>
                    <input class="form-control" required type="text"  name="harapan_dari_adanya_kegiatan" id="harapan_dari_adanya_kegiatan" placeholder="Masukan Kendala Yang Di Alami Anda">
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Jumlah Pembayaran</label>
                    <input class="form-control" required type="number"  name="jumlah_pembayaran" id="jumlah_pembayaran" placeholder="Masukan Jumlah Pembayaran Anda">
                </div>
                
                <div class="col-12">
                        <label for="jenis_satuan_barang" class="form-label">Payment</label>
                        <select name="bayar" required="" id="bayar" class="form-select">
                          <option selected disabled style="text-align: center">--- Payment ---</option>
                          <option value="0">Belum Bayar</option>
                          <option value="1">Lunas</option>                         
                        </select>
                </div>
                <div class="col-12">
                    <label for="jenis_satuan_barang" class="form-label">Alamat Instansi</label>
                    <textarea required type="subject" name="alamat_instansi" id="alamat_instansi"  class="form-control" placeholder="Masukan Alamat Instansi Anda"></textarea>
                    
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

        var data = {
            "_token": "{{ csrf_token() }}",
            "mentor_id": $("#create_mentor_id").val(),
            "nama": $("#create_nama").val(),
            "instansi": $("#create_instansi").val(),
            "alamat_instansi": $("#create_alamat_instansi").val(),
            "lokasi_kegiatan": $("#create_lokasi_kegiatan").val(),            
            "tanggal_kegiatan": $("#create_tanggal_kegiatan").val(),
            "jam": $("#create_jam").val(),
            "no_hp": $("#create_no_hp").val(),
            "kendala_yang_di_alami": $("#create_kendala_yang_di_alami").val(),
            "jumlah_pembayaran": $("#create_jumlah_pembayaran").val(),
            "harapan_dari_adanya_kegiatan": $("#create_harapan_dari_adanya_kegiatan").val(),            
            "bayar": $("#create_bayar").val(),            
        }

        $.ajax({
            url: '{{ url('pemesanan_create') }}',
            type: 'post',
            data: data,
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
            url: '{{ url('pemesanan_edit') }}/' + id,
            type: 'GET',
            success: function(data) {
                $('#detail_admin_id').val(id);                    
                $('#mentor_id').val(data.mentor_id)
                $('#nama').val(data.nama)
                $('#instansi').val(data.instansi)
                $('#alamat_instansi').val(data.alamat_instansi)
                $('#lokasi_kegiatan').val(data.lokasi_kegiatan)            
                $('#tanggal_kegiatan').val(data.tanggal_kegiatan)
                $('#jam').val(data.jam)
                $('#no_hp').val(data.no_hp)
                $('#kendala_yang_di_alami').val(data.kendala_yang_di_alami)
                $('#jumlah_pembayaran').val(data.jumlah_pembayaran)
                $('#harapan_dari_adanya_kegiatan').val(data.harapan_dari_adanya_kegiatan)            
                $('#bayar').val(data.bayar)            

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
            formData.append("mentor_id", $("#mentor_id").val());
            formData.append("nama", $("#nama").val());
            formData.append("instansi", $("#instansi").val());
            formData.append("alamat_instansi", $("#alamat_instansi").val());
            formData.append("lokasi_kegiatan", $("#lokasi_kegiatan").val());
            formData.append("tanggal_kegiatan", $("#tanggal_kegiatan").val());
            formData.append("jam", $("#jam").val());
            formData.append("no_hp", $("#no_hp").val());
            formData.append("kendala_yang_di_alami", $("#kendala_yang_di_alami").val());
            formData.append("harapan_dari_adanya_kegiatan", $("#harapan_dari_adanya_kegiatan").val());
            formData.append("bayar", $("#bayar").val());
            formData.append("jumlah_pembayaran", $("#jumlah_pembayaran").val());

            

            $.ajax({
                url: '{{ url('pemesanan_update') }}/' + id,
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
                        url: '{{ url('pemesanan_delete') }}/' + id,

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
