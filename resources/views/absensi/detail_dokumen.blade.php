@extends('layout.index')

@section('title-utama', 'Dokumen Meeting')


@section('content')
    @foreach ($data as $key => $dt)
        <div class="row row-cards">
            @foreach ($dt as $k => $d)
                @if ($k !== 'tgl' and $d !== '-' )
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/rectangle-vertical -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon " viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <rect x="5" y="3" width="14" height="18" rx="2" />
                                    </svg>
                                </div>
                                <div class="card-title mb-1">{{ $title[$k] }}</div>
                                {{-- <div class="text-muted"></div> --}}
                            </div>
                            <a href="{{'http://127.0.0.1:8000' . Storage::url($dt->tgl . '/meeting/' . $d)}}" class="card-btn">Download</a>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    @endforeach

@endsection
