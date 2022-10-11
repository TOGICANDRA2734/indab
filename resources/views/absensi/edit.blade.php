@extends('layout.index')

@section('title-utama', 'Hadir Rapat - ' . $judulRapat[0]->judul_meeting)

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <form action="{{route('absensi-input.update', $id)}}" method="post" class="card">
                @csrf
                <div class="card-header">
                    <h4 class="card-title">Data Diri</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Input placeholder">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Perusahaan</label>
                                <input type="text" class="form-control" name="perusahaan"
                                    placeholder="Input placeholder">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat"
                                    placeholder="Input placeholder">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan"
                                    placeholder="Input placeholder">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">No. HP</label>
                                <input type="text" class="form-control" name="no_hp"
                                    placeholder="Input placeholder">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="Input placeholder">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div class="d-flex">
                        <a href="#" class="btn btn-link">Cancel</a>
                        <button type="submit" class="btn btn-primary ms-auto">Send data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('modal-route', route('absensi.store'))

@section('modal-title', 'Transaksi Meeting')


@section('modal-footer')
    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
        Cancel
    </a>
    <button class="btn btn-primary ms-auto" data-bs-dismiss="modal" type="submit">
        Kirim
    </button>
@endsection
