@extends('layout.index')

@section('title-utama', "Absen - " . $dataMeeting->judul_meeting)

@section('button-add')
    {{-- TODO: Galeri --}}
    <a href="{{$dataMeeting->link_dok_1}}" class="btn btn-success d-sm-inline-block">Slide</a>

    {{-- TODO: Resource --}}
    <a href="{{route('galeri.index')}}" class="btn btn-success d-sm-inline-block">Galeri</a>

    <a href="{{route('absensi.edit', $id)}}" class="btn btn-primary d-sm-inline-block">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        Input Hadir
    </a>
@endsection

@section('content')

    <div class="col-12">
        {{-- <img src="http://ptrci.co.id/indab_file/lokasi/{{$image->file}}" alt=""> --}}
    </div>
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Perusahaan</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                            <th>Kontak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $dt)
                            <tr>
                                <td data-label="Nama">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ $dt->nama }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td data-label="Perusahaan">
                                    <div>{{ $dt->perusahaan }}</div>
                                </td>
                                <td data-label="Alamat">
                                    <div>{{ $dt->alamat }}</div>
                                </td>
                                <td class="text-muted" data-label="Jabatan">
                                    {{ $dt->jabatan }}
                                </td>

                                <td class="text-muted" data-label="Email">
                                    {{ $dt->kontak }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
