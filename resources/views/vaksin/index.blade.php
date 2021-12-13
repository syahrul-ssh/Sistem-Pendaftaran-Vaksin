@extends('layouts.master')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Jenis Vaksin</h1>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <a type="button" class="btn btn-primary" href="{{ route('vaksin.create') }}">Tambah Jenis Vaksin</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Vaksin</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vaksins as $vaksin)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $vaksin->jenis_vaksin }}</td>
                            <td>
                                <form action="{{ route('vaksin.destroy', $vaksin->id) }}" method="POST">
                                    <a type="button" class="btn btn-warning btn-sm"
                                        href="{{ route('vaksin.edit', $vaksin->id) }}" title="edit"><i
                                            class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                        title="delete"><i class="fas fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $vaksins->links() !!}

        </div>

        <!-- Content Row -->
    </div>
@endsection
