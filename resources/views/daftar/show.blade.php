@extends('daftar.layout.app')

@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2>Data Pendaftaran Anda</h2>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success text-center mb-0">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
        </div>

        <div class="row text-center">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                <a class="btn btn-secondary" href="{{ route('cetak', $daftar->id) }}">Cetak Kartu
                    Pendaftaran</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h3>Nomor Pendaftaran:</h3>
                    <h4><b>{{ $daftar->kode_unik }}</b></h4>
                    <p>Harap ingat Nomor Pendaftaran Kamu!</p>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th scope="col">Jenis Vaksin</th>
                    <td>{{ $daftar->jenis_vaksin }}</td>
                </tr>
                <tr>
                    <th scope="col">NIK</th>
                    <td>{{ $daftar->nik }}</td>
                </tr>
                <tr>
                    <th scope="col">Nama</th>
                    <td>{{ $daftar->nama }}</td>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td>{{ $daftar->email }}</td>
                </tr>
                <tr>
                    <th scope="col">Nomor Telepon</th>
                    <td>{{ $daftar->nomor_hp }}</td>
                </tr>
                <tr>
                    <th scope="col">Tempat, Tgl Lahir</th>
                    <td>{{ $daftar->tempat_lahir }}, {{ \Carbon\Carbon::createFromFormat('Y-m-d', $daftar->tanggal_lahir)->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th scope="col">Alamat</th>
                    <td>{{ $daftar->alamat }}</td>
                </tr>
                <tr>
                    <th scope="col">Tanggal Vaksin</th>
                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $daftar->tanggal)->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th scope="col">Tempat Vaksin</th>
                    <td>Aula Desa Cilampeni</td>
                </tr>
            </table>
        </div>
    @endsection
