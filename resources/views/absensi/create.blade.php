@extends('layout.index')

@section('title-utama', 'AGENDA MEETING')

@section('button-add')
    <div class="d-flex">
        <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Cari Rapat" id="cariRapat">
        <input type="hidden" value="{{route('absensi.create')}}" id="urlCariRapat">

        <a href="#" class="btn btn-success d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-danger"
            id="modal">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            Buat Meeting
        </a>
    </div>

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
                                            <div class="font-weight-medium">{{ $dt->judul_meeting }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td data-label="Tanggal">
                                    <div>{{ $dt->tgl }}</div>
                                </td>
                                <td data-label="Jam">
                                    <div>{{ $dt->waktu }}</div>
                                </td>
                                <td data-label="Link Meeting">
                                    <div>
                                        @if ($dt->link_meeting === 'Meeting Offline')
                                            <p>
                                                {{ $dt->link_meeting }}
                                            </p>                                            
                                        @else
                                            <a href="{{$dt->link_meeting}}">Meeting Online</a>
                                        @endif
                                    </div>
                                </td>
                                <td data-label="Status">
                                    <div>{{ $dt->status_meeting }}</div>
                                </td>
                                <td data-label="Link">
                                    <div>
                                        <a href="{{route('absensi.detail_dokumen', $dt->id)}}">Download Link</a>
                                    </div>
                                </td>
                                <td class="mb-3">
                                    <div class="flex-nowrap btn-list">
                                        <a href="{{ route('absensi.show', $dt->id) }}" class="btn btn-primary">
                                            Daftar Hadir
                                        </a>
                                        <a href="{{ route('absensi-edit.edit', $dt->id) }}" class="btn btn-warning">
                                            Ubah
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

    {{-- Modal - 2 --}}
    <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 9v2m0 4v.01"></path>
                        <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75">
                        </path>
                    </svg>
                    <label class="form-label">Password Meeting</label>
                    <input type="password" class="form-control mb-3" name="Password" id="password">
                    <input type="hidden" value="{{ route('passwordAbsensi.index') }}" id="url">
                    <h3>Apakah kamu yakin?</h3>
                    <div class="text-muted">Jika ada kendala hubungi Tim IT Head Office.</div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Batal
                                </a>
                            </div>
                            <div class="col">
                                <button onclick="checkPassword()" class="btn btn-danger w-100" data-bs-dismiss="modal">
                                    Masuk
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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
                <option value="{{ $dt->kode }}">{{ $dt->lokasi }}</option>
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
        <input type="text" class="form-control" name="link_meeting">
        @error('link_meeting')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Peserta dari mana</label>
        <input type="text" class="form-control" name="peserta">
        @error('peserta')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Jumlah Peserta</label>
        <input type="text" class="form-control" name="jumlah">
        @error('jumlah')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Petugas Notulen</label>
        <input type="text" class="form-control" name="notulen">
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

    <div class="mb-3">
        <label class="form-label">Token</label>
        <input type="text" class="form-control bg-danger text-white font-bold " name="edit" value="{{strtoupper(\Illuminate\Support\Str::random(1)) . rand(0,1) . rand(0,1)}}" readonly="readonly" /> 
    </div>

@endsection

@section('form-tambahan', 'enctype=multipart/form-data')

@section('modal-footer')
    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
        Batal
    </a>
    <button class="btn btn-primary ms-auto" data-bs-dismiss="modal" type="submit">
        Kirim
    </button>
@endsection

@section('js')
    <script>
        function checkPassword() {
            var password = $('#password').val();
            var url = $('#url').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            console.log(password)


            $.ajax({
                type: 'POST',
                data: {
                    'password': password,
                },
                url: url,
                success: function(result) {
                    console.log(result);
                    if(result == 1){
                        $('#modal').attr('data-bs-target', '#modal-report');
                    }
                },
                error: function(result) {

                },
            });
        }
    </script>

    <script>
        $("#cariRapat").on('change', function(){
            var search = $(this).val();
            var url = $("#urlCariRapat").val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            console.log(search);

            $.ajax({
                type: "GET",
                url: url,
                data: {
                    'search': search
                },
                success: function(result){
                    createRows(result);
                },
                error: function(result){
                    
                }
            })
        })

        // Create table rows
        function createRows(response) {
            var len = 0;
            console.log(response)
            $('table tbody').empty(); // Empty <tbody>
            if (response['data'] != null) {
                len = response['data'].length;
            }
            
            var result = "";
            for (let i = 0; i < len; i++) {
                result += "<tr class=\"mb-3\">" + 
                    "<td data-label=\"Judul Meeting\">" +
                        "<div class=\"d-flex py-1 align-items-center\">" +
                            "<div class=\"flex-fill\">" +
                                "<div class=\"font-weight-medium\">"+response['data'][i]['judul_meeting']+"</div>" +
                            "</div>" +
                        "</div>" +
                    "</td>" +

                    "<td data-label=\"Tanggal\">" +
                        "<div>"+response['data'][i]['tgl']+"</div>" +
                    "</td>" +
                    "<td data-label=\"Jam\">" +
                        "<div>"+response['data'][i]['waktu']+"</div>" +
                    "</td>" +
                    "<td data-label=\"Link Meeting\">" +
                        "<div>" +
                            response['data'][i]['link_meeting'] +
                        "</div>" +
                    "</td>" +
                    "<td data-label=\"Status\">" +
                        "<div>"+response['data'][i]['status_meeting']+"</div>" +
                    "</td>" +
                    "<td data-label=\"Link\">" +
                        "<div>" +
                            "<a href=\"#\">Download Link</a>" +
                        "</div>" +
                    "</td>" +
                    "<td class=\"mb-3\">" +
                        "<div class=\"flex-nowrap btn-list\">" +
                            "<a href=\"{{ route('absensi.show', $dt->id) }}\" class=\"btn btn-primary\">" +
                                "Daftar Hadir" +
                            "</a>" +
                            "<a href=\"{{ route('absensi-edit.edit', $dt->id) }}\" class=\"btn btn-warning\">" +
                                "Ubah" +
                            "</a>" +
                        "</div>" +
                    "</td>" +
                "</tr>"
            }
            $("table tbody").append(result);

        }
    </script>
@endsection
