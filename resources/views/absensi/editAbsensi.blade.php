@extends('layout.index')

@section('title-utama', 'EDIT MEETING')

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <form action="{{ route('absensi-edit.update', $id) }}" method="post" class="card" id="absensi" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4 class="card-title">Data Diri {{$errors}}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Tempat Meeting</label>
                                <select name="lokasi" id="lokasi" class="form-control" required>
                                    @foreach ($lokasi as $dt)
                                        <option value="{{$dt->kode}}" {{old('lokasi', $data->lokasi) == $dt->kode ? "selected" : ""}} >{{$dt->lokasi}}</option>            
                                    @endforeach
                                </select>
                                @error('lokasi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Judul Meeting</label>
                                <input type="text" class="form-control" required value="{{old('judul_meeting', $data->judul_meeting)}}" name="judul_meeting">
                                @error('judul_meeting')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Meeting</label>
                                <input type="date" class="form-control" required value="{{old('tgl', $data->tgl)}}" name="tgl">
                                @error('tgl')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Waktu Meeting</label>
                                <input type="text" class="form-control" required value="{{old('waktu', $data->waktu)}}" name="waktu">
                                @error('waktu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Link Meeting</label>
                                <input type="text" class="form-control" value="{{old('link_meeting', $data->link_meeting)}}" name="link_meeting">
                                @error('link_meeting')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Peserta dari mana</label>
                                <input type="text" class="form-control" value="{{old('peserta', $data->peserta)}}" name="peserta">
                                @error('peserta')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Peserta</label>
                                <input type="text" class="form-control" value="{{old('jumlah', $data->jumlah)}}" name="jumlah">
                                @error('jumlah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Petugas Notulen</label>
                                <input type="text" class="form-control" value="{{old('notulen', $data->notulen)}}" name="notulen">
                                @error('notulen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">File Notulen</label>
                                <input type="file" class="form-control" name="file_notulen">
                                @error('file_notulen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Dokumen</label>
                                <input type="file" class="form-control" name="dok_1">
                                @error('dok_1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Dokumen</label>
                                <input type="file" class="form-control" name="dok_2">
                                @error('dok_2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Dokumen</label>
                                <input type="file" class="form-control" name="dok_3">
                                @error('dok_3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Dokumen</label>
                                <input type="file" class="form-control" name="dok_4">
                                @error('dok_4')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Dokumen</label>
                                <input type="file" class="form-control" name="dok_5">
                                @error('dok_5')
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
                let token = $('meta value="{{$data->csrf}}"[name="csrf-token"]').attr('content');
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
