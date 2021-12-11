<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Permintaan Perbaikan</title>

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
  {{-- <h4 align="center">PERMINTAAN PERBAIKAN ALAT</h4> --}}
  <table width="50%">
    <tr>
        <td align="left">
           Hal
        </td>
        <td>:</td>
        <td align="left">
            Surat Penerimaan Magang
         </td>
    </tr>
    <tr>
      <td align="left">
        Lampiran
     </td>
     <td>:</td>
     <td align="left">
        1 Lembar
     </td>
    </tr>
  </table>
  <table width="50%" style="margin-top: 20px;">
    <tr>
        <td align="left">
           Yth
        </td>
    </tr>
    <tr>
      <td align="left">
       Bpk/Ibu Dekan {{$profile->fakultasi}}
       <br>
       {{$user->universitas}}
     </td>
   
    </tr>
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
        Sehubung dengan pelaksanaan magang yang diajukan kepada mahasiswa bapak atas nama :
      </td>
    </tr>
  </table>
  
  <br/>

  <table width="70%">
      <tr>
        <td align="left">Nama</td>
        <td>:</td>
        <td>{{$user->name}}</td>
      </tr>
      <tr>
        <td align="left">NIM</td>
        <td>:</td>
        <td>{{$user->nim}}</td>
      </tr>
      <tr>
        <td align="left">Fakultas</td>
        <td>:</td>
        <td>{{$profile->fakultasi}}</td>
      </tr>
      <tr>
        <td align="left">Universitas</td>
        <td>:</td>
        <td>{{$user->universitas}}</td>
      </tr>
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
       Dengan ini dinyatakan telah selesai melakukan magang pada tanggal {{date("d-m-Y", strtotime($user->profile->start_magang))}} - {{date("d-m-Y", strtotime($user->profile->selesai_magang))}} Dengan Nilai {{$user->nilai}}
      </td>
    </tr>
    <tr>
        <td>Demikian Surat ini dibuat untuk dipergunakan semestinya</td>
    </tr>
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="right">
        Kepala PDAM Kota Semarang
      </td>
    </tr>
    <tr>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td align="right">
            Nama
          </td>
    </tr>
  </table>
  
</body>
</html>
