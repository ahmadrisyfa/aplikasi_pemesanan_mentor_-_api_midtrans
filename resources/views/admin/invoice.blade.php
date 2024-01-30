<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
       
        body {
            background-color: #47b375;
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: auto;
            margin-top: 30px;
            font-family:  sans-serif;
        }

        .card {
            width: 800px;
            /* text-align: center; */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }  
        .no_transaksi {
        display: flex;
        justify-content: space-between;
        /* padding: 10px; */
        }   
        #printButton {
            display: block;
        }

        /* Media query untuk mencetak halaman */
        @media print {
            /* Sembunyikan tombol cetak saat mencetak */
            #printButton {
                display: none;
            }
        }
    </style>
</head>
<body>
    
    <div class="card">
        <button id="printButton" class="btn btn-success btn-sm">Cetak</button>
        <div class="card-body">
            <div class="header">
                <h2 style="text-align: center"><b>Invoice</b></h2>
                <h4>PT. Hafara Aqiba Nusanta</h4>
                Jl. Cibolerang, Cinunuk, Kec. Cileunyi, Bandung, Jawa Barat <br>
                Mobile: 081324511570 <br>
                Email: info@hafaragroup.com <br>
                www.HafaraGroup.com</p>
                <hr>
            </div>
            <div class="no_transaksi">
                <table>
                    <tr>
                        <td style="padding-right: 400px">Alamat Instansi</td>                       
                        <td>Tanggal Pemesanan</td>
                    </tr>
                    <tr>
                        <th>{{$data->alamat_instansi}}</th>
                        <th>{{ Carbon\Carbon::parse($data->created_at)->format('M, d D H:i:s') }}</th>
                    </tr>
                </table>
            </div>
            <hr>
            <h5 class="text-success">Detail Trainer</h5>
            <div class="no_transaksi">
                <table class="table">
                    <tr>
                        <th>Nama trainer</th>                       
                        <th>Tanggal Kegiatan</th>
                        <th>Harga</th>
                    </tr>                
                    <tr>
                        <td>{{$data->mentor->nama}}</td>
                        <td>{{$data->tanggal_kegiatan}}</td>
                        <td>Rp.{{ number_format($data->jumlah_pembayaran, 2, ',', '.') }}</td>
                    </tr>
                   
                </table>
            </div>

            <h5 class="text-success">Detail Pemesan</h5>
            <div class="no_transaksi">
                <table class="table">
                    <tr>
                        <th>Nama</th>                                               
                        <th>Alamat Instansi</th>
                        <th>Lokasi Kegiatan</th>
                        <th>Tanggal Kegiatan Dan Jam</th>
                        <th>Kendala Yang Di Alami</th>
                        <th>Harapan Dari Adanya Kegiatan</th>
                        <th>Pembayaran</th>
                    </tr>
                
                    <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->alamat_instansi}}</td>
                        <td>{{$data->lokasi_kegiatan }}</td>                        
                        <td>{{$data->tanggal_kegiatan }} {{ $data->jam }}</td>                        
                        <td>{{$data->kendala_yang_di_alami}}</td>
                        <td>{{$data->harapan_dari_adanya_kegiatan}}</td>
                        <td>
                        @if($data->bayar == 0)
                            <button class="btn btn-danger">Belum Bayar</button>
                        @elseif($data->bayar == 1)
                            <button class="btn btn-success">Lunas</button>
                        @endif                       
                        </td>
                    </tr>
                   
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        function printPage() {
            window.print();
        }
    
        var printButton = document.getElementById("printButton");
        printButton.addEventListener("click", printPage);
    </script>
</body>
</html>