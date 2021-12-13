@extends('daftar.layout.app')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Jadwal Vaksinasi</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            @if ($jadwals->count())
                @foreach ($jadwals as $jadwal)
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <a type="button" class="btn"
                                        href="{{ route('pendaftar.create', $jadwal->id) }}">
                                        <div class="col mr-2 text-center">
                                            <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                                                <p class="mb-0 font-weight-bold text-primary">Tanggal
                                                </p>
                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $jadwal->tanggal)->format('d-m-Y') }}</div>
                                                <p class="mb-0 font-weight-bold text-gray-800">Jenis Vaksin :
                                                    {{ $jadwal->jenis_vaksin }}
                                                </p>
                                                <p class="mb-0 font-weight-bold text-gray-800">Tempat : Aula Desa Cilampeni
                                                </p>
                                                <p class="mb-0 font-weight-bold text-gray-800">Jam :
                                                {{ $jadwal->jam }} - Selesai
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $jadwals->links() !!}
            @else
                <h2 class="alert alert-danger text-center">Saat ini tidak ada Vaksinasi yang tersedia!</h2>
            @endif
        </div>

        <!-- Content Row -->
    </div>

@endsection
