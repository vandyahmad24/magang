<html>

<head>
    <style type='text/css'>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
            border: 20px solid tan;
        }

      

        .logo {
            color: tan;
            margin-top: 120px;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
        }

        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }

        .reason {
            margin: 20px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            PDAM Semarang 
        </div>

        <div class="marquee">
            Sertifikat Kelulusan Magang
        </div>

        <div class="assignment">
            Sertifikat ini Dipersembahkan Untuk
        </div>

        <div class="person">
           {{$user->name}}
        </div>

        <div class="reason">
            Dengan Total Nilai {{$user->nilai}}<br/>
            PKL Dilaksanakan pada tanggal {{date("d-m-Y", strtotime($user->profile->start_magang))}} - {{date("d-m-Y", strtotime($user->profile->selesai_magang))}}
        </div>
    </div>
</body>

</html>
