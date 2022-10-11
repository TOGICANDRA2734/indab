@extends('layout.index')

@section('content')
    <div class="col-12">
        <form action="{{route('induksi.store')}}" method="POST" class="card">
            @csrf
            <div class="card-header">
                <h4 class="card-title">Induksi</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') border border-red-100 @enderror" name="nama"
                                        placeholder="Nama">
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Perusahaan</label>
                                    <input type="text" class="form-control @error('perusahaan') border border-red-100 @enderror" name="perusahaan"
                                        placeholder="Perusahaan">
                                    @error('perusahaan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <input type="text" class="form-control @error('jabatan') border border-red-100 @enderror" name="jabatan"
                                        placeholder="Jabatan">
                                    @error('jabatan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Keperluan</label>
                                    <input type="text" class="form-control @error('keperluan') border border-red-100 @enderror" name="keperluan"
                                        placeholder="Keperluan">
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
                                    <input type="text" class="form-control @error('no_hp') border border-red-100 @enderror" name="no_hp"
                                        placeholder="No. HP">
                                    @error('no_hp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <div class="d-flex">
                    <a href="{{route('home.index')}}" class="btn btn-link">Kembali</a>
                    <button type="submit" class="btn btn-primary ms-auto">Kirim</button>
                </div>
            </div>
        </form>
    </div>
@endsection
