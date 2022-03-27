<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('template')

    @section('content')
    <h3>Info Kegiatan</h3>
    <p>Informasi Kegiatan Siswa bulan ini:</p>
    <ul>
        <li>10 Agustus - Masa Orientasi Siswa</li>
        <li>17 Agustus - Upacara Kemerdekaan</li>
    </ul>
    <p>Informasi Kegiatan Siswa bulan depan:</p>
    <ul>
        <li>12 September - Ujian Tengah Semester</li>
    </ul>
    @endsection
</body>
</html>