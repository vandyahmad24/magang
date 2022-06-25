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
  <table width="100%">
    <tr>
        <td align="center">
            <h2>SURAT KETERANGAN</h2>
            <hr width="35%" style="margin-top: -20px">
            <h5 style="margin-top: -10px">Nomor :</h5>
        </td>
    </tr>
    
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
        1.
      </td>
      <td align="left">
        Yang Bertanda Tanggan dibawah ini :
      </td>
    </tr>
  </table>
  <br/>

  <table width="70%">
      <tr>
        <td align="left">Nama</td>
        <td>:</td>
        <td>Iwan Kusumahari, SH</td>
      </tr>
      <tr>
        <td align="left">NPP</td>
        <td>:</td>
        <td>6908391279</td>
      </tr>
      <tr>
        <td align="left">Pangkat/Gol.</td>
        <td>:</td>
        <td>Staf Madya(D/1)</td>
      </tr>
      <tr>
        <td align="left">Jabatan</td>
        <td>:</td>
        <td>Kepala Bagian Kepegawaian</td>
      </tr>
  </table>

  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
        2.
      </td>
      <td align="left">
        Dengan ini menerangkan bahwa :
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
      <td align="left">Program Studi</td>
        <td>:</td>
        <td>{{$user->universitas}}</td>
    </tr>
    <tr>
      <td align="left"></td>
      <td></td>
      <td style="color: white">Kepala Bagian Kepegawaian</td>
    </tr>
</table>

  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
       Telah melaksanakan Praktek Kerja Lapangan di Perusahaan Umum Daerah Air Minum Tirta Moedal Kota Semarang dari tanggal {{date("d-m-Y", strtotime($user->profile->start_magang))}} sampai dengan {{date("d-m-Y", strtotime($user->profile->selesai_magang))}}.
      </td>
    </tr>
  
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td align="left">
        3.
      </td>
      <td align="left">
        Demikian surat keterangan ini dibuat untuk digunakan sebagaimana semestinya
      </td>
    </tr>
  </table>
  <table width="100%" style="margin-top: 30px;">
    <tr>
      <td></td>
      <td align="center">
        @php
          $today = date('d M Y');
        @endphp
        Semarang, {{$today}}
        <br>
        A.n Direksi Perusahaan Daerah Air Minum
        <br>
        Tirta Modal Kota Semarang
        <br>
        Pjs. Direktur Umum
        Ub
        Kepala Bagian Kepegawaian
        <br>
        <br>
        <br>
        <br>
        <b><u>Iwan Kusumahari, SH</u></b>
        <br>
        Staf. Madya <br>
        NPP. 6908391279
      </td>
    </tr>
   
  </table>
  
</body>
</html>
