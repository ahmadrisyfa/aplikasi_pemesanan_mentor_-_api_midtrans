<!DOCTYPE html>
<html>
<head>
  <title>Tabel Cetak</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
    <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Jenis Trainer</th>
            <th>Tanggal Bulan Tahun</th>
            <th>Jumlah Potongan</th>
            <th>Jumlah Pembayaran</th>
          </tr>
        </thead>
        <tbody>                        
          @foreach ($PembayaranTrainer as $value)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$value->nik}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->mentor->nama_lengkap}}</td>
            <td>{{$value->tanggal}}</td>                      
            <td>{{ 'Rp. ' . number_format($value->jumlah_potongan, 0, ',', '.') }}</td>
            <td>{{ 'Rp. ' . number_format($value->jumlah_pembayaran, 0, ',', '.') }}</td>          
          </tr>
          @endforeach
        
        </tbody>
      </table>

  <script>
      window.print();
  </script>

</body>
</html>
