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
            <th>Nama</th>
            <th>Mentor</th>
            <th>Tanggal Kegiatan</th>
            <th>Jam</th>
            <th>Harga</th>
            <th>Bayar</th>
          </tr>
        </thead>
        <tbody>                        
          @foreach ($pemesanan as $value)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->mentor->nama}}</td>
            <td>{{$value->tanggal_kegiatan}}</td>                      
            <td>{{$value->jam}}</td>
            <td>{{ 'Rp. ' . number_format($value->mentor->harga, 0, ',', '.') }}</td>
            <td>
                @if($value->bayar == 0)
                        <b>Belum Bayar</b>    
                @elseif($value->bayar == 1)
                        <b>Lunas</b>
                @endif
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>

  <script>
      window.print();
  </script>

</body>
</html>
