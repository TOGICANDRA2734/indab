@extends('layout.index')

@section('title-utama', 'Rapat - ' . $judulRapat[0]->judul_meeting)

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <form action="{{ route('absensi-input.update', $id) }}" method="post" class="card" id="absensi">
                @csrf
                <div class="card-header">
                    <h4 class="card-title">Data Diri</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Input placeholder"
                                    required>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Perusahaan</label>
                                <input type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Input placeholder"
                                    required>
                                @error('perusahaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Input placeholder">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Input placeholder">
                                @error('jabatan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">kontak</label>
                                <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Input placeholder">
                                @error('kontak')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div class="d-flex">
                        <a href="#" class="btn btn-link">Batal</a>
                        <button type="submit" class="btn btn-primary ms-auto">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



@section('js')
    <script>
        function submitConfirmation(event) {
            event.preventDefault();
            Swal.fire({
                title: "Apakah anda yakin untuk menginput data?",
                icon: 'question',
                text: "Data akan terekam pada database",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function(e) {
                var action = $("#absensi").attr("action"); //get submit action from form
                var method = $("#absensi").attr("method"); // get submit method

                var nama        = "nama";
                var perusahaan  = "perusahaan";
                var alamat      = "alamat";
                var jabatan     = "jabatan";
                var no_hp       = "no_hp";
                var email       = "email";

                console.log('ALO');
                let token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: method,
                    url: action,
                    data: {
                        _token: token,
                        nama: nama;
                        perusahaan: perusahaan;
                        alamat: alamat;
                        jabatan: jabatan;
                        no_hp: no_hp;
                        email: email;
                    },
                    success: function(resp) {
                        if (resp.success) {
                            swal.fire("Data Berhasil Ditambah!", resp.message, "success");
                            location.replace(window.location.origin + "/");
                        } else {
                            swal.fire("Error!", 'Ada kesalahan dalam menambah data', "error");
                        }
                    },
                    error: function(resp) {
                        swal.fire("Error!", 'Ada kesalahan dalam menambah data', "error");
                    }
                });
            }, function(dismiss) {
                return false;
            })
        }
    </script>
@endsection
