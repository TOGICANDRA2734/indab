@extends('layout.index')

@section('title-utama', "HOME")

@section('content')
    <div class="row row-deck row-cards">
        <div class="col-6">
            <a class="card" href="{{ route('induksi.index') }}">
                <div class="card-body text-center">
                    <div class="d-flex align-items-center">
                        <div class="header mb-3">Induksi</div>
                    </div>
                    <i class="fa-solid fa-passport text-primary font-bold"
                        style="font-size: 4rem; @media screen and (min-width: 640px){ font-size:1px; }"></i>
                </div>
            </a>
        </div>
        <div class="col-6">
            <a class="card" href="{{ route('absensi.create') }}">
                <div class="card-body text-center">
                    <div class="d-flex align-items-center">
                        <div class="header mb-3">Absensi</div>
                    </div>
                    <i class="fa-solid fa-user text-primary font-bold"
                        style="font-size: 4rem; @media screen and (min-width: 640px){ font-size:1px; }"></i>
                </div>
            </a>
        </div>
    </div>
@endsection
