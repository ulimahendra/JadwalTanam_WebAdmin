<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <h3>Data Siswa</h3>
        <table class="table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Tanggal Lahir</th>
            </tr>
            <tr>
                <th>Andi Sputra</th>
                <th>101</th>
                <th>2003-12-22</th>
            </tr>
            <tr>
                <th>Budi Cahaya</th>
                <th>102</th>
                <th>2004-01-03</th>
            </tr>
        </table>
    @endsection
</body>
</html>