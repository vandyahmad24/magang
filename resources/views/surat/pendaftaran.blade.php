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
            Surat Pendaftaran Magang
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
       Kepala PDAM Kota Semarang
     </td>
   
    </tr>
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
        Dengan Hormat
      </td>
    </tr>
    <tr>
        <td align="left">
            Saya Bertanda Tangan di bawah ini:
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
        <td align="left">Jenis Kelamin</td>
        <td>:</td>
        <td>{{$profile->jenis_kelamin}}</td>
      </tr>
      <tr>
        <td align="left">Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td>{{$profile->tempat_lahir}} / {{date("d-m-Y", strtotime($profile->tanggal_lahir));}}</td>
      </tr>
      <tr>
        <td align="left">Universitas</td>
        <td>:</td>
        <td>{{$user->universitas}}</td>
      </tr>
      <tr>
        <td align="left">Fakultas</td>
        <td>:</td>
        <td>{{$profile->fakultasi}}</td>
      </tr>
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
        Sehubung itu saya mendaftar magang mulai dari <b>{{date("d-m-Y", strtotime($profile->start_magang))}}</b> Sampai <b>{{date("d-m-Y", strtotime($profile->selesai_magang))}}</b> mohon kiranya untuk dapat diterima
      </td>
    </tr>
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="right">
        Semarang,  {{date("d/m/Y")}}
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
            {{$user->name}}
          </td>
    </tr>
  </table>
  
</body>
</html>
