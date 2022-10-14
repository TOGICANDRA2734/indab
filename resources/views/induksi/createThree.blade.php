@extends('layout.index')

@section('title-utama', 'BUAT INDUKSI')

@section('content')
    <form action="{{route('induksi.postCreateThree')}}" method="POST" class="container-tight py-4">
        @csrf
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36"
                    alt=""></a>
        </div>
        <div class="card card-md">
            <div class="card-body text-center py-4 p-sm-5">
                <img src="http://ptrci.co.id/gambar/logo/RCI.png" height="128" class="mb-n2" height="120"
                    alt="">
                <h1 class="mt-5">PT RPP CONTRACTORS INDONESIA</h1>
                <p class="text-muted">Pengajuan Permohonan Induksi</p>
            </div>
            <div class="hr-text hr-text-center hr-text-spaceless">Data Diri</div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Site</label>
                    {{-- <input type="text" class="form-control p-1" autocomplete="off"> --}}
                    <select name="site" id="site" class="form-control">
                        <option value="">Site 1</option>
                    </select>
                    <div class="form-hint">Silahkan memilih site rujukan.</div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <div class="progress">
                    <div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100">
                        <span class="visually-hidden">75% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="btn-list justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
{{-- 
@section('modal-route', route('induksi.createThree'))

@section('modal-title', 'Induksi')

@section('modal-body')
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') border border-red-100 @enderror"
                            name="nama" placeholder="Nama">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Perusahaan</label>
                        <input type="text" class="form-control @error('perusahaan') border border-red-100 @enderror"
                            name="perusahaan" placeholder="Perusahaan">
                        @error('perusahaan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') border border-red-100 @enderror"
                            name="jabatan" placeholder="Jabatan">
                        @error('jabatan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keperluan</label>
                        <input type="text" class="form-control @error('keperluan') border border-red-100 @enderror"
                            name="keperluan" placeholder="Keperluan">
                        @error('keperluan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Waktu</label>
                        <select class="form-select @error('waktu') border border-red-100 @enderror" name="waktu">
                            <option value="" selected disabled>Pilih Waktu</option>
                            <option value="3-5 Jam">1-3 Jam</option>
                            <option value="3-5 Jam">3-5 Jam</option>
                            <option value="5-8 Jam">5-8 Jam</option>
                            <option value="1-3 Hari">1-3 Hari</option>
                            <option value="4-5 Hari">4-5 Hari</option>
                            <option value="1 Minggu">1 Minggu</option>
                        </select>
                        @error('waktu')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. HP</label>
                        <input type="text" class="form-control @error('no_hp') border border-red-100 @enderror"
                            name="no_hp" placeholder="No. HP">
                        @error('no_hp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @for ($i = 0; $i < 10; $i++)
                        <div class="mb-3">
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" name="chck_1">
                                <span class="form-check-label">Kebijakan K3LH</span>
                                @error('chck_1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </label>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal-footer')
    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
        Batal
    </a>
    <button type="submit" class="btn btn-primary ms-auto">Kirim</button>
@endsection --}}
