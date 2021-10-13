<!DOCTYPE html>
<html>

<head>
    <title>Kartu Pendaftaran Vaksinasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="text-center">Kartu Tanda Vaksinasi</h3>
        <h4 class="text-center mb-5">Dibawah ini adalah data dari pendaftar sudah melakukan vaksinasi di Desa Cilampeni
            dengan nomor pendaftar :
            {{ $selesai->kode_unik }}</h4>
        <table class="table">
            <tr>
                <th scope="col">NIK</th>
                <td>{{ $selesai->nik }}</td>
            </tr>
            <tr>
                <th scope="col">Nama</th>
                <td>{{ $selesai->nama }}</td>
            </tr>
            <tr>
                <th scope="col">Nomor Telepon</th>
                <td>{{ $selesai->nomor_hp }}</td>
            </tr>
            <tr>
                <th scope="col">Tempat, Tgl Lahir</th>
                <td>{{ $selesai->tempat_lahir }}, {{ $selesai->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th scope="col">Alamat</th>
                <td>{{ $selesai->alamat }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
