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
    <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat Datang di Portal Informasi Siswa SMA 404</p>
        <a href="/info-kegiatan" class="btn btn-dark">Info Kegiatan</a>
        <a href="/data-siswa" class="btn btn-primary">Data Siswa</a>
    </div>
    @endsection

</body>
</html>