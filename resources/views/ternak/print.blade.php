<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f0f0;
        }

        .sertifikat {
            position: relative;
            /* width: 800px; Sesuaikan dengan ukuran yang diinginkan */
            padding: 50px;
            /* background: rgba(255, 255, 255, 0.8); Warna putih dengan opacity */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .sertifikat::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ public_path('background.jpeg') }}") no-repeat center center;
            background-size: cover;
            opacity: 0.3; /* Mengatur opacity gambar */
            z-index: -1; /* Meletakkan gambar di belakang konten */
        }

        .judul {
            margin-bottom: 100px;
        }

        .isi {
            font-size: 16px;
            line-height: 1.5;
        }

        .ttd {
            margin-top: 120px;
        }

        .ttd-nama {
            text-align: left;
            margin-bottom: 10px;
        }

        .stempel {
            display: inline-block;
            width: 100px;
            height: 100px;
            border: 2px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

    </style>
</head>

<body>
    <div class="sertifikat">
        <h1 class="judul">Sertifikat Burung</h1>
        <p class="isi">
            <strong>No Ring Burung:</strong> {{ $ternak->nomor_ring }}<br>
            <strong>Seri Burung:</strong> {{ $ternak->seri_burung }}<br>
            <strong>Jenis Kelamin:</strong> {{ $ternak->jenis_kelamin }}<br>
            <strong>Tanggal Netas:</strong> {{ Carbon\Carbon::parse($ternak->tanggal_netas)->format('d-M-Y') }}<br>
            <strong>Seri indukan Jantan:</strong> {{ $ternak->seri_indukan_jantan }}<br>
            <strong>Seri indukan Betina:</strong> {{ $ternak->seri_indukan_betina }}<br>
        </p>
        <div class="ttd">
            <p class="ttd-nama">Nama Peternak</p>
            <div class="stempel">
                Stempel
            </div>
        </div>
    </div>
</body>

</html>
