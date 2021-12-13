@extends('layouts.master')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Jadwal Vaksinasi</h1>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Content Row -->
        <div class="row">
            <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Pilih Jenis Vaksin:</strong>
                            <select class="custom-select" id="inputGroupSelect01" name="jenis_vaksin" required>
                                <option selected value="{{ $jadwal->jenis_vaksin }}">
                                    {{ $jadwal->jenis_vaksin }}</option>
                                @foreach ($vaksins as $vaksins)
                                    <option value="{{ $vaksins->jenis_vaksin }}">
                                        {{ $vaksins->jenis_vaksin }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tanggal:</strong>
                            <input type="date" name="tanggal" class="form-control" value="{{ $jadwal->tanggal }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jam:</strong>
                            <input type="time" name="jam" class="form-control" value="{{ $jadwal->jam }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>

        </div>

        <!-- Content Row -->
    </div>
@endsection
