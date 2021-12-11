
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rekap Peserta Magang</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: 15px;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: 15px;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>
  <h4 align="center">Rekap Peserta Magang</h4>
  <table width="100%" style="margin-left: 30px;">
    <tr>
      <td align="left">
        Rekap Peserta Magang Dari {{date('d-M-Y',strtotime($tanggal_awal))}} Sampai {{date('d-M-Y',strtotime($tanggal_akhir))}}
      </td>
    </tr>
  </table>
  
  <br/>

  <table width="100%" style="margin-left: 30px;">
    <thead style="background-color: lightgray;">
            <tr>
                <th>No</th>
                <th>No Peserta</th>
                <th>Nama</th>
                <th>Universitas</th>
                <th>NIM</th>
                <th>Tanggal Daftar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $u)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$u->no_peserta}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->universitas}}</td>
                    <td>{{$u->nim}}</td>
                    <td>{{date('d-m-Y',strtotime($u->created_at))}}</td>
                    <td>{{$u->status_magang}}</td>
                  
                </tr>
            @endforeach
        </tbody>
  </table>
  
</body>
</html>
