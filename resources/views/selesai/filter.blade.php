@extends('layouts.master')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Selesai Vaksin</h1>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Content Row -->
        <div class="container">
            <form class="form" method="get" action="{{ route('selesai.filter') }}">
                {{ csrf_field() }}
                <div class="form-row mb-3">
                    <div class="container">
                        <strong>Cari Data:</strong>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="filter1" id="filter2" placeholder="NIK">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="filter2" id="filter2" placeholder="kode pendaftaran">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mr-1">Cari</button>
                    <a href="{{ route('selesai.index') }}" class="btn btn-success mb-3">Tampilkan Semua Data</a>
                </div>
            </form>

            <div class="row">
                <table class="table">
                    <thead>
                        <tr class="text-sm-center">
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tempat, Tgl Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kode Pendaftaran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($selesais as $selesai)
                            <tr>
                                <td>{{ $selesai->nik }}</td>
                                <td>{{ $selesai->nama }}</td>
                                <td>{{ $selesai->nomor_hp }}</td>
                                <td>{{ $selesai->email }}</td>
                                <td>{{ $selesai->tempat_lahir }}, {{ \Carbon\Carbon::createFromFormat('Y-m-d', $selesai->tanggal_lahir)->format('d-m-Y') }}</td>
                                <td>{{ $selesai->alamat }}</td>
                                <td class="text-sm-center">{{ $selesai->kode_unik }}</td>
                                <td class="text-sm-center">
                                    <form action="{{ route('selesai.destroy', $selesai->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $selesais->links() !!}
    
            </div>
        </div>

        <!-- Content Row -->
    </div>
@endsection
