<!DOCTYPE html>
<html>

<head>
    <title>Kartu Pendaftaran Vaksinasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="text-center">Kartu Pendaftaran Vaksinasi</h3>
        <h4 class="text-center mb-5">Dibawah ini adalah data dari pendaftar vaksinasi dengan nomor pendaftar :
            {{ $daftar->kode_unik }}</h4>
        <table class="table">
            <tr>
                <th scope="col">NIK</th>
                <td>{{ $daftar->nik }}</td>
            </tr>
            <tr>
                <th scope="col">Nama</th>
                <td>{{ $daftar->nama }}</td>
            </tr>
            <tr>
                <th scope="col">Nomor Telepon</th>
                <td>{{ $daftar->nomor_hp }}</td>
            </tr>
            <tr>
                <th scope="col">Tempat, Tgl Lahir</th>
                <td>{{ $daftar->tempat_lahir }}, {{ $daftar->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th scope="col">Alamat</th>
                <td>{{ $daftar->alamat }}</td>
            </tr>
        </table>
        <h4 class="text-center mt-5 mb-5">Dengan ini menyatakan siap untuk divaksin pada :</h4>
        <table class="table">
            <tr>
                <th scope="col">Tanggal</th>
                <td>{{ $daftar->tanggal_vaksin }}</td>
            </tr>
            <tr>
                <th scope="col">Tempat</th>
                <td>Aula Desa Cilampeni</td>
            </tr>
        </table>
    </div>
</body>

</html>
