@extends('layout.index')


@section('button-add')
    <a href="#" class="btn btn-primary d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        Buat Induksi
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
                            <th>Durasi</th>
                            <th>Durasi</th>
                            <th>Peserta</th>
                            <th>Status</th>
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

                                <td data-label="Jabatan">
                                    <div>{{ $dt->jabatan }}</div>
                                </td>
                                <td data-label="Asal Perusahaan">
                                    <div>{{ $dt->perusahaan }}</div>
                                </td>
                                <td class="text-muted" data-label="Keperluan">
                                    {{ $dt->keperluan }}
                                </td>
                                
                                <td class="text-muted" data-label="Waktu">
                                    {{ $dt->waktu }}
                                </td>
                                <td class="text-muted" data-label="No. HP">
                                    {{ $dt->no_hp }}
                                </td>
                                <td class="text-muted" data-label="Validasi">
                                    {{ $dt->validasi }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('modal-route', route('induksi.store'))

@section('modal-title', "Induksi")

@section('modal-body')
<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-6 col-xl-12">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"
                        class="form-control @error('nama') border border-red-100 @enderror" name="nama"
                        placeholder="Nama">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Perusahaan</label>
                    <input type="text"
                        class="form-control @error('perusahaan') border border-red-100 @enderror"
                        name="perusahaan" placeholder="Perusahaan">
                    @error('perusahaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text"
                        class="form-control @error('jabatan') border border-red-100 @enderror"
                        name="jabatan" placeholder="Jabatan">
                    @error('jabatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Keperluan</label>
                    <input type="text"
                        class="form-control @error('keperluan') border border-red-100 @enderror"
                        name="keperluan" placeholder="Keperluan">
                    @error('keperluan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Waktu</label>
                    <select class="form-select @error('waktu') border border-red-100 @enderror"
                        name="waktu">
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
                    <input type="text"
                        class="form-control @error('no_hp') border border-red-100 @enderror" name="no_hp"
                        placeholder="No. HP">
                    @error('no_hp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                @for ($i=0; $i<10; $i++)
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
@endsection