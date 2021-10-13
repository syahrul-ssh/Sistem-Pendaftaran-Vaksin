@extends('daftar.layout.app')

@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2>Cari Data Pendaftaran Anda</h2>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <!-- Start kode untuk form pencarian -->
            <form class="form" method="get" action="{{ route('cari_pendaftar') }}">
                {{ csrf_field() }}
                <div class="form-group w-100 mb-3">
                    <label for="search" class="d-block mr-2">Pencarian</label>
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                        placeholder="Masukan Nomor Pendaftaran Anda!">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
            </form>
        </div>
        <div class="row text-center">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                <a class="btn btn-secondary" href="{{ route('cetak', $daftars->id) }}">Cetak Kartu
                    Pendaftaran</a>
            </div>
            {{-- @foreach ($daftars as $daftar) --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h3>Nomor Pendaftaran:</h3>
                    <h4><b>{{ $daftars->kode_unik }}</b></h4>
                    <p>Harap ingat Nomor Pendaftaran Kamu!</p>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th scope="col">NIK</th>
                    <td>{{ $daftars->nik }}</td>
                </tr>
                <tr>
                    <th scope="col">Nama</th>
                    <td>{{ $daftars->nama }}</td>
                </tr>
                <tr>
                    <th scope="col">Nomor Telepon</th>
                    <td>{{ $daftars->nomor_hp }}</td>
                </tr>
                <tr>
                    <th scope="col">Tempat, Tgl Lahir</th>
                    <td>{{ $daftars->tempat_lahir }}, {{ $daftars->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th scope="col">Alamat</th>
                    <td>{{ $daftars->alamat }}</td>
                </tr>
                <tr>
                    <th scope="col">Tempat & Tanggal Vaksin</th>
                    <td>Aula Desa Cilampeni, {{ $daftars->tanggal_vaksin }}</td>
                </tr>
            </table>
        </div>
    @endsection
