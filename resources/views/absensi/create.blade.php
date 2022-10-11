@extends('layout.index')

@section('title-utama', "AGENDA MEETING")


@section('button-add')
    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        Create new report
    </a>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                    <thead>
                        <tr>
                            <th>Judul Meeting</th>
                            <th>Tanggal Meeting</th>
                            <th>Durasi</th>
                            <th>Peserta</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $dt)
                            <tr>
                                <td data-label="Name">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{$dt->judul_meeting}}</div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td data-label="Title">
                                    <div>{{$dt->tgl}}</div>
                                </td>
                                <td data-label="Title">
                                    <div>{{$dt->waktu}}</div>
                                </td>
                                <td class="text-muted" data-label="Role">
                                    {{$dt->peserta}}
                                </td>
                                <td>
                                    <div class="flex-nowrap justify-content-center align-items-center">
                                        <a href="{{route('absensi.show', $dt->id)}}" class="btn btn-primary">
                                            Daftar Hadir
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('modal-route', route('absensi.store'))

@section('modal-title', 'Transaksi Meeting')

@section('modal-body')
    <div class="mb-3">
        <label class="form-label">Judul Meeting</label>
        <input type="text" class="form-control" name="judul_meeting" placeholder="Your report name">
        @error('judul_meeting')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Waktu (Cth: 08.00 - 10.00)</label>
        <input type="text" class="form-control" name="waktu" placeholder="Your report name">
        @error('waktu')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Peserta</label>
        <input type="text" class="form-control" name="peserta" placeholder="Your report name">
        @error('peserta')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Jumlah Partisipan</label>
        <input type="text" class="form-control" name="jumlah" placeholder="Your report name">
        @error('jumlah')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Notulen</label>
        <input type="text" class="form-control" name="notulen" placeholder="Your report name">
        @error('notulen')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Dokumen</label>
        <input type="text" class="form-control" name="dok_1" placeholder="Your report name">
        @error('dok_1')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
@endsection

@section('modal-footer')
    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
        Cancel
    </a>
    <button class="btn btn-primary ms-auto" data-bs-dismiss="modal" type="submit">
        Kirim
    </button>
@endsection