@extends('daftar.layout.app')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Vaksinasi</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            @if ($jadwals->count())
                <form action="{{ route('daftar.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Pilih Tanggal:</strong>
                                <select class="custom-select" id="inputGroupSelect01" name="tanggal_vaksin">
                                    @foreach ($jadwals as $jadwals)
                                        <option selected value="{{ $jadwals->tanggal }}">
                                            {{ $jadwals->tanggal }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>NIK:</strong>
                                <input type="number" name="nik" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama:</strong>
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nomor Telepon yang bisa dihubungi:</strong>
                                <input type="number" name="nomor_hp" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tempat Lahir:</strong>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggal Lahir:</strong>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                <textarea class="form-control" style="height:150px" name="alamat"
                                    placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="kode_unik" value="{{ random_int(100000, 999999) }}">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            @else
                <h2 class="alert alert-danger text-center">Periode Pendaftaran Telah Brakhir</h2>
            @endif
        </div>

        <!-- Content Row -->
    </div>
@endsection
