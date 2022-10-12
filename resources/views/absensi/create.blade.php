@extends('layout.index')

@section('title-utama', "AGENDA MEETING")

@section('button-add')
    <a href="#" class="btn btn-primary d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        Buat Meeting
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
                            <th>Jam</th>
                            <th>Link Meeting</th>
                            <th>Status</th>
                            <th>Link</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $dt)
                            <tr class="mb-3">
                                <td data-label="Judul Meeting">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{$dt->judul_meeting}}</div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td data-label="Tanggal">
                                    <div>{{$dt->tgl}}</div>
                                </td>
                                <td data-label="Jam">
                                    <div>{{$dt->waktu}}</div>
                                </td>
                                <td data-label="Link Meeting">
                                    <div>
                                        {{$dt->link_meeting}}
                                    </div>
                                </td>
                                <td data-label="Status">
                                    <div>{{$dt->status_meeting}}</div>
                                </td>
                                <td data-label="Link">
                                    <div>
                                        <a href="#">Download Link</a>
                                    </div>
                                </td>
                                <td class="mb-3">
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
        <label class="form-label">Tempat Meeting</label>
        {{-- <input type="text" class="form-control" required name="lokasi"> --}}
        <select name="lokasi" id="lokasi" class="form-control" required>
            @foreach ($lokasi as $dt)
                <option value="{{$dt->kode}}">{{$dt->lokasi}}</option>            
            @endforeach
        </select>
        @error('lokasi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Judul Meeting</label>
        <input type="text" class="form-control" required name="judul_meeting">
        @error('judul_meeting')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Meeting</label>
        <input type="date" class="form-control" required name="tgl">
        @error('tgl')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Waktu Meeting</label>
        <input type="text" class="form-control" required name="waktu">
        @error('waktu')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Link Meeting</label>
        <input type="text" class="form-control" required name="link">
        @error('link')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Peserta dari mana</label>
        <input type="text" class="form-control" required name="peserta">
        @error('peserta')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Jumlah Peserta</label>
        <input type="text" class="form-control" required name="jumlah">
        @error('jumlah')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Petugas Notulen</label>
        <input type="text" class="form-control" required name="notulen">
        @error('notulen')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">File Notulen</label>
        <input type="file" class="form-control" required name="file_notulen">
        @error('file_notulen')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Dokumen</label>
        <input type="file" class="form-control" required name="dok_1">
        @error('dok_1')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
@endsection

@section('form-tambahan', "enctype='multipart/form-data'")

@section('modal-footer')
    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
        Batal
    </a>
    <button class="btn btn-primary ms-auto" data-bs-dismiss="modal" type="submit">
        Kirim
    </button>
@endsection