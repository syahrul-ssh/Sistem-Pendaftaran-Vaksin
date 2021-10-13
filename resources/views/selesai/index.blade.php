@extends('layouts.master')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data yang sudah vaksin</h1>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Content Row -->
        <div class="row">
            <table class="table">
                <thead>
                    <tr class="text-sm-center">
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Tempat, Tgl Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Vaksin</th>
                        <th scope="col">Kode Pendaftaran</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($selesai as $p)
                        <tr>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->nomor_hp }}</td>
                            <td>{{ $p->tempat_lahir }}, {{ $p->tanggal_lahir }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->tanggal_vaksin }}</td>
                            <td class="text-sm-center">{{ $p->kode_unik }}</td>
                            <td class="text-sm-center">
                                <form action="{{ route('selesai.destroy', $p->id) }}" method="POST">
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
            {!! $selesai->links() !!}

        </div>

        <!-- Content Row -->
    </div>
@endsection
