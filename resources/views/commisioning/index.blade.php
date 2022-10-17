@extends('layout.index')

@section('title-utama', 'Commisioning')

@section('content')
    <div class="row row-cards">
        {{-- Pemilik --}}
        <div class="col-sm-12 col-md-6">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Identitas Pemilik Kendaraan</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nama Pemilik Kendaraan</th>
                                <th>Alamat Pemilik Kendaraan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Paweł Kuna</td>
                                <td class="text-muted"><a href="#" class="text-reset">paweluna@howstuffworks.com</a>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Identitas Kendaraan --}}
        <div class="col-sm-12 col-md-6">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">IDENTITAS KENDARAAN BERMOTOR</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nomor Uji Kendaraan</th>
                                <th>Nomor Sertifikat Registrasi</th>
                                <th>Tanggal Sertifikat Registrasi</th>
                                <th>Nomor Registrasi Kendaraan</th>
                                <th>Nomor Rangka Kendaraan</th>
                                <th>Nomor Motor Penggerak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Paweł Kuna</td>
                                <td>Paweł Kuna</td>
                                <td>Paweł Kuna</td>
                                <td>Paweł Kuna</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Foto --}}
    <div class="row">
        <div class="mt-3 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">FOTO BERWARNA 5 SISI KENDARAAN</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QE+RXhpZgAATU0AKgAAAAgABQEPAAIAAAAIAAAASgEQAAIAAAAIAAAAUgESAAMAAAABAAEAAAEyAAIAAAAUAAAAWodpAAQAAAABAAAAbgAAAABzYW1zdW5nAFNNLVQyOTUAMjAyMjowNzoxNCAxMTowODo0MwAACoKaAAUAAAABAAAA7IKdAAUAAAABAAAA9IgnAAMAAAABAGgAAJADAAIAAAAUAAAA/JAEAAIAAAAUAAABEJICAAUAAAABAAABJJIHAAMAAAABAAAAAJIJAAMAAAABAAAAAJIKAAUAAAABAAABLKQDAAMAAAABAAAAAAAAAAAAAAAdAAAD6AAAAMgAAABkMjAyMjowNzoxNCAxMTowODo0MwAyMDIyOjA3OjE0IDExOjA4OjQzAAAAAMgAAABkAAABHQAAAGQAAP/iAihJQ0NfUFJPRklMRQABAQAAAhgAAAAAAhAAAG1udHJSR0IgWFlaIAAAAAAAAAAAAAAAAGFjc3AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAD21gABAAAAANMtAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACWRlc2MAAADwAAAAdHJYWVoAAAFkAAAAFGdYWVoAAAF4AAAAFGJYWVoAAAGMAAAAFHJUUkMAAAGgAAAAKGdUUkMAAAGgAAAAKGJUUkMAAAGgAAAAKHd0cHQAAAHIAAAAFGNwcnQAAAHcAAAAPG1sdWMAAAAAAAAAAQAAAAxlblVTAAAAWAAAABwAcwBSAEcAQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWFlaIAAAAAAAAG+iAAA49QAAA5BYWVogAAAAAAAAYpkAALeFAAAY2lhZWiAAAAAAAAAkoAAAD4QAALbPcGFyYQAAAAAABAAAAAJmZgAA8qcAAA1ZAAAT0AAAClsAAAAAAAAAAFhZWiAAAAAAAAD21gABAAAAANMtbWx1YwAAAAAAAAABAAAADGVuVVMAAAAgAAAAHABHAG8AbwBnAGwAZQAgAEkAbgBjAC4AIAAyADAAMQA2/9sAQwDIipavln3Ir6Ov4dXI7v///////////////////////////////////////////////////////////////////9sAQwHV4eH//////////////////////////////////////////////////////////////////////////////////8AAEQgBDgFoAwEiAAIRAQMRAf/EABcAAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAuEAACAQEFBgYDAQEBAAAAAAAAARECEiExQVFhcYGRsfADMlKhwdEiQuETYvH/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABYRAQEBAAAAAAAAAAAAAAAAAAABQf/aAAwDAQACEQMRAD8AAAAAAAAAgewAAnJSQhMY8wKAAAEhPOJAA27LV0IwAAAAAAAAABqmL5jiSqJuAgAAzViQ1VgZgDSwAAABY4nRulLJgcwAAJJSZvgAkSABSA3TZSluXoBgFqcvAgAAAAABopE7pCaeAAAAAAAAAEBQBMNxcSCADKsAmMgBSFAAAAQoAgAAAAAAAIwUgAAAAAABAAGb4AAAAAAAAAAAAAAAGvUtvVG4prUtGP2fA0rknqlIGL1VE3FnVONS1fJqh5AYAaiuVnIAAAAAABCgCFT1BMgNAzgaAhQAAAAEKAIAAAAAgKQAAABARsCgAAAAAAAAEAoIAKAIAAoAJu1esjdMOmJ7kyIQFeG5rqVK5uL0/ozG1mlU1kBKsU9vwyBu/DOQALZ/GacepDVOW3reBm9qYuGJaHC7xIrMNPbHMAB+szMAAMgAAwwAAsggTkCgAAAAICgCAAAQoAgAAGXitzNEfm4AAUjuAACQAJInu8CgJw8g22BACgEAAAAAtpFlamalFUGl4bdKaaAEqyJVS6cYH68QF+rKm5IF5l3kwNFlxFxCSgNJxS0yXNueXFCdoAQtM2usEhFABJXZY88UMlunliJ6fDE/PvIABX3a/Q79v/QA+wFmAT1KTIqTAAsACElTFxeJmEqlEgaAu1XNC7Vc0BAW7Vc0OK5gQBXlgDJH5uHyagz+/BfAC/T3F888y/zqSpxEbeoCGUzaepLT1A00MzMvUS9QNAzLnE0AKQum0CASAAAA14nnN+H5Fx6mPE8y71N+H5eL6gZ8W9rYp90jH6vevg6V57vn+GEsVuAgWK3lsraLN+YF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" class="card-img-top"></a>
                        </div>
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QE+RXhpZgAATU0AKgAAAAgABQEPAAIAAAAIAAAASgEQAAIAAAAIAAAAUgESAAMAAAABAAEAAAEyAAIAAAAUAAAAWodpAAQAAAABAAAAbgAAAABzYW1zdW5nAFNNLVQyOTUAMjAyMjowNzoxNCAxMTowODo0MwAACoKaAAUAAAABAAAA7IKdAAUAAAABAAAA9IgnAAMAAAABAGgAAJADAAIAAAAUAAAA/JAEAAIAAAAUAAABEJICAAUAAAABAAABJJIHAAMAAAABAAAAAJIJAAMAAAABAAAAAJIKAAUAAAABAAABLKQDAAMAAAABAAAAAAAAAAAAAAAdAAAD6AAAAMgAAABkMjAyMjowNzoxNCAxMTowODo0MwAyMDIyOjA3OjE0IDExOjA4OjQzAAAAAMgAAABkAAABHQAAAGQAAP/iAihJQ0NfUFJPRklMRQABAQAAAhgAAAAAAhAAAG1udHJSR0IgWFlaIAAAAAAAAAAAAAAAAGFjc3AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAD21gABAAAAANMtAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACWRlc2MAAADwAAAAdHJYWVoAAAFkAAAAFGdYWVoAAAF4AAAAFGJYWVoAAAGMAAAAFHJUUkMAAAGgAAAAKGdUUkMAAAGgAAAAKGJUUkMAAAGgAAAAKHd0cHQAAAHIAAAAFGNwcnQAAAHcAAAAPG1sdWMAAAAAAAAAAQAAAAxlblVTAAAAWAAAABwAcwBSAEcAQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWFlaIAAAAAAAAG+iAAA49QAAA5BYWVogAAAAAAAAYpkAALeFAAAY2lhZWiAAAAAAAAAkoAAAD4QAALbPcGFyYQAAAAAABAAAAAJmZgAA8qcAAA1ZAAAT0AAAClsAAAAAAAAAAFhZWiAAAAAAAAD21gABAAAAANMtbWx1YwAAAAAAAAABAAAADGVuVVMAAAAgAAAAHABHAG8AbwBnAGwAZQAgAEkAbgBjAC4AIAAyADAAMQA2/9sAQwDIipavln3Ir6Ov4dXI7v///////////////////////////////////////////////////////////////////9sAQwHV4eH//////////////////////////////////////////////////////////////////////////////////8AAEQgBDgFoAwEiAAIRAQMRAf/EABcAAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAuEAACAQEFBgYDAQEBAAAAAAAAARECEiExQVFhcYGRsfADMlKhwdEiQuETYvH/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABYRAQEBAAAAAAAAAAAAAAAAAAABQf/aAAwDAQACEQMRAD8AAAAAAAAAgewAAnJSQhMY8wKAAAEhPOJAA27LV0IwAAAAAAAAABqmL5jiSqJuAgAAzViQ1VgZgDSwAAABY4nRulLJgcwAAJJSZvgAkSABSA3TZSluXoBgFqcvAgAAAAABopE7pCaeAAAAAAAAAEBQBMNxcSCADKsAmMgBSFAAAAQoAgAAAAAAAIwUgAAAAAABAAGb4AAAAAAAAAAAAAAAGvUtvVG4prUtGP2fA0rknqlIGL1VE3FnVONS1fJqh5AYAaiuVnIAAAAAABCgCFT1BMgNAzgaAhQAAAAEKAIAAAAAgKQAAABARsCgAAAAAAAAEAoIAKAIAAoAJu1esjdMOmJ7kyIQFeG5rqVK5uL0/ozG1mlU1kBKsU9vwyBu/DOQALZ/GacepDVOW3reBm9qYuGJaHC7xIrMNPbHMAB+szMAAMgAAwwAAsggTkCgAAAAICgCAAAQoAgAAGXitzNEfm4AAUjuAACQAJInu8CgJw8g22BACgEAAAAAtpFlamalFUGl4bdKaaAEqyJVS6cYH68QF+rKm5IF5l3kwNFlxFxCSgNJxS0yXNueXFCdoAQtM2usEhFABJXZY88UMlunliJ6fDE/PvIABX3a/Q79v/QA+wFmAT1KTIqTAAsACElTFxeJmEqlEgaAu1XNC7Vc0BAW7Vc0OK5gQBXlgDJH5uHyagz+/BfAC/T3F888y/zqSpxEbeoCGUzaepLT1A00MzMvUS9QNAzLnE0AKQum0CASAAAA14nnN+H5Fx6mPE8y71N+H5eL6gZ8W9rYp90jH6vevg6V57vn+GEsVuAgWK3lsraLN+YF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" class="card-img-top"></a>
                        </div>
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QE+RXhpZgAATU0AKgAAAAgABQEPAAIAAAAIAAAASgEQAAIAAAAIAAAAUgESAAMAAAABAAEAAAEyAAIAAAAUAAAAWodpAAQAAAABAAAAbgAAAABzYW1zdW5nAFNNLVQyOTUAMjAyMjowNzoxNCAxMTowODo0MwAACoKaAAUAAAABAAAA7IKdAAUAAAABAAAA9IgnAAMAAAABAGgAAJADAAIAAAAUAAAA/JAEAAIAAAAUAAABEJICAAUAAAABAAABJJIHAAMAAAABAAAAAJIJAAMAAAABAAAAAJIKAAUAAAABAAABLKQDAAMAAAABAAAAAAAAAAAAAAAdAAAD6AAAAMgAAABkMjAyMjowNzoxNCAxMTowODo0MwAyMDIyOjA3OjE0IDExOjA4OjQzAAAAAMgAAABkAAABHQAAAGQAAP/iAihJQ0NfUFJPRklMRQABAQAAAhgAAAAAAhAAAG1udHJSR0IgWFlaIAAAAAAAAAAAAAAAAGFjc3AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAD21gABAAAAANMtAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACWRlc2MAAADwAAAAdHJYWVoAAAFkAAAAFGdYWVoAAAF4AAAAFGJYWVoAAAGMAAAAFHJUUkMAAAGgAAAAKGdUUkMAAAGgAAAAKGJUUkMAAAGgAAAAKHd0cHQAAAHIAAAAFGNwcnQAAAHcAAAAPG1sdWMAAAAAAAAAAQAAAAxlblVTAAAAWAAAABwAcwBSAEcAQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWFlaIAAAAAAAAG+iAAA49QAAA5BYWVogAAAAAAAAYpkAALeFAAAY2lhZWiAAAAAAAAAkoAAAD4QAALbPcGFyYQAAAAAABAAAAAJmZgAA8qcAAA1ZAAAT0AAAClsAAAAAAAAAAFhZWiAAAAAAAAD21gABAAAAANMtbWx1YwAAAAAAAAABAAAADGVuVVMAAAAgAAAAHABHAG8AbwBnAGwAZQAgAEkAbgBjAC4AIAAyADAAMQA2/9sAQwDIipavln3Ir6Ov4dXI7v///////////////////////////////////////////////////////////////////9sAQwHV4eH//////////////////////////////////////////////////////////////////////////////////8AAEQgBDgFoAwEiAAIRAQMRAf/EABcAAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAuEAACAQEFBgYDAQEBAAAAAAAAARECEiExQVFhcYGRsfADMlKhwdEiQuETYvH/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABYRAQEBAAAAAAAAAAAAAAAAAAABQf/aAAwDAQACEQMRAD8AAAAAAAAAgewAAnJSQhMY8wKAAAEhPOJAA27LV0IwAAAAAAAAABqmL5jiSqJuAgAAzViQ1VgZgDSwAAABY4nRulLJgcwAAJJSZvgAkSABSA3TZSluXoBgFqcvAgAAAAABopE7pCaeAAAAAAAAAEBQBMNxcSCADKsAmMgBSFAAAAQoAgAAAAAAAIwUgAAAAAABAAGb4AAAAAAAAAAAAAAAGvUtvVG4prUtGP2fA0rknqlIGL1VE3FnVONS1fJqh5AYAaiuVnIAAAAAABCgCFT1BMgNAzgaAhQAAAAEKAIAAAAAgKQAAABARsCgAAAAAAAAEAoIAKAIAAoAJu1esjdMOmJ7kyIQFeG5rqVK5uL0/ozG1mlU1kBKsU9vwyBu/DOQALZ/GacepDVOW3reBm9qYuGJaHC7xIrMNPbHMAB+szMAAMgAAwwAAsggTkCgAAAAICgCAAAQoAgAAGXitzNEfm4AAUjuAACQAJInu8CgJw8g22BACgEAAAAAtpFlamalFUGl4bdKaaAEqyJVS6cYH68QF+rKm5IF5l3kwNFlxFxCSgNJxS0yXNueXFCdoAQtM2usEhFABJXZY88UMlunliJ6fDE/PvIABX3a/Q79v/QA+wFmAT1KTIqTAAsACElTFxeJmEqlEgaAu1XNC7Vc0BAW7Vc0OK5gQBXlgDJH5uHyagz+/BfAC/T3F888y/zqSpxEbeoCGUzaepLT1A00MzMvUS9QNAzLnE0AKQum0CASAAAA14nnN+H5Fx6mPE8y71N+H5eL6gZ8W9rYp90jH6vevg6V57vn+GEsVuAgWK3lsraLN+YF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" class="card-img-top"></a>
                        </div>
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QE+RXhpZgAATU0AKgAAAAgABQEPAAIAAAAIAAAASgEQAAIAAAAIAAAAUgESAAMAAAABAAEAAAEyAAIAAAAUAAAAWodpAAQAAAABAAAAbgAAAABzYW1zdW5nAFNNLVQyOTUAMjAyMjowNzoxNCAxMTowODo0MwAACoKaAAUAAAABAAAA7IKdAAUAAAABAAAA9IgnAAMAAAABAGgAAJADAAIAAAAUAAAA/JAEAAIAAAAUAAABEJICAAUAAAABAAABJJIHAAMAAAABAAAAAJIJAAMAAAABAAAAAJIKAAUAAAABAAABLKQDAAMAAAABAAAAAAAAAAAAAAAdAAAD6AAAAMgAAABkMjAyMjowNzoxNCAxMTowODo0MwAyMDIyOjA3OjE0IDExOjA4OjQzAAAAAMgAAABkAAABHQAAAGQAAP/iAihJQ0NfUFJPRklMRQABAQAAAhgAAAAAAhAAAG1udHJSR0IgWFlaIAAAAAAAAAAAAAAAAGFjc3AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAD21gABAAAAANMtAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACWRlc2MAAADwAAAAdHJYWVoAAAFkAAAAFGdYWVoAAAF4AAAAFGJYWVoAAAGMAAAAFHJUUkMAAAGgAAAAKGdUUkMAAAGgAAAAKGJUUkMAAAGgAAAAKHd0cHQAAAHIAAAAFGNwcnQAAAHcAAAAPG1sdWMAAAAAAAAAAQAAAAxlblVTAAAAWAAAABwAcwBSAEcAQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWFlaIAAAAAAAAG+iAAA49QAAA5BYWVogAAAAAAAAYpkAALeFAAAY2lhZWiAAAAAAAAAkoAAAD4QAALbPcGFyYQAAAAAABAAAAAJmZgAA8qcAAA1ZAAAT0AAAClsAAAAAAAAAAFhZWiAAAAAAAAD21gABAAAAANMtbWx1YwAAAAAAAAABAAAADGVuVVMAAAAgAAAAHABHAG8AbwBnAGwAZQAgAEkAbgBjAC4AIAAyADAAMQA2/9sAQwDIipavln3Ir6Ov4dXI7v///////////////////////////////////////////////////////////////////9sAQwHV4eH//////////////////////////////////////////////////////////////////////////////////8AAEQgBDgFoAwEiAAIRAQMRAf/EABcAAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAuEAACAQEFBgYDAQEBAAAAAAAAARECEiExQVFhcYGRsfADMlKhwdEiQuETYvH/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABYRAQEBAAAAAAAAAAAAAAAAAAABQf/aAAwDAQACEQMRAD8AAAAAAAAAgewAAnJSQhMY8wKAAAEhPOJAA27LV0IwAAAAAAAAABqmL5jiSqJuAgAAzViQ1VgZgDSwAAABY4nRulLJgcwAAJJSZvgAkSABSA3TZSluXoBgFqcvAgAAAAABopE7pCaeAAAAAAAAAEBQBMNxcSCADKsAmMgBSFAAAAQoAgAAAAAAAIwUgAAAAAABAAGb4AAAAAAAAAAAAAAAGvUtvVG4prUtGP2fA0rknqlIGL1VE3FnVONS1fJqh5AYAaiuVnIAAAAAABCgCFT1BMgNAzgaAhQAAAAEKAIAAAAAgKQAAABARsCgAAAAAAAAEAoIAKAIAAoAJu1esjdMOmJ7kyIQFeG5rqVK5uL0/ozG1mlU1kBKsU9vwyBu/DOQALZ/GacepDVOW3reBm9qYuGJaHC7xIrMNPbHMAB+szMAAMgAAwwAAsggTkCgAAAAICgCAAAQoAgAAGXitzNEfm4AAUjuAACQAJInu8CgJw8g22BACgEAAAAAtpFlamalFUGl4bdKaaAEqyJVS6cYH68QF+rKm5IF5l3kwNFlxFxCSgNJxS0yXNueXFCdoAQtM2usEhFABJXZY88UMlunliJ6fDE/PvIABX3a/Q79v/QA+wFmAT1KTIqTAAsACElTFxeJmEqlEgaAu1XNC7Vc0BAW7Vc0OK5gQBXlgDJH5uHyagz+/BfAC/T3F888y/zqSpxEbeoCGUzaepLT1A00MzMvUS9QNAzLnE0AKQum0CASAAAA14nnN+H5Fx6mPE8y71N+H5eL6gZ8W9rYp90jH6vevg6V57vn+GEsVuAgWK3lsraLN+YF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" class="card-img-top"></a>
                        </div>
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QE+RXhpZgAATU0AKgAAAAgABQEPAAIAAAAIAAAASgEQAAIAAAAIAAAAUgESAAMAAAABAAEAAAEyAAIAAAAUAAAAWodpAAQAAAABAAAAbgAAAABzYW1zdW5nAFNNLVQyOTUAMjAyMjowNzoxNCAxMTowODo0MwAACoKaAAUAAAABAAAA7IKdAAUAAAABAAAA9IgnAAMAAAABAGgAAJADAAIAAAAUAAAA/JAEAAIAAAAUAAABEJICAAUAAAABAAABJJIHAAMAAAABAAAAAJIJAAMAAAABAAAAAJIKAAUAAAABAAABLKQDAAMAAAABAAAAAAAAAAAAAAAdAAAD6AAAAMgAAABkMjAyMjowNzoxNCAxMTowODo0MwAyMDIyOjA3OjE0IDExOjA4OjQzAAAAAMgAAABkAAABHQAAAGQAAP/iAihJQ0NfUFJPRklMRQABAQAAAhgAAAAAAhAAAG1udHJSR0IgWFlaIAAAAAAAAAAAAAAAAGFjc3AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAD21gABAAAAANMtAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACWRlc2MAAADwAAAAdHJYWVoAAAFkAAAAFGdYWVoAAAF4AAAAFGJYWVoAAAGMAAAAFHJUUkMAAAGgAAAAKGdUUkMAAAGgAAAAKGJUUkMAAAGgAAAAKHd0cHQAAAHIAAAAFGNwcnQAAAHcAAAAPG1sdWMAAAAAAAAAAQAAAAxlblVTAAAAWAAAABwAcwBSAEcAQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWFlaIAAAAAAAAG+iAAA49QAAA5BYWVogAAAAAAAAYpkAALeFAAAY2lhZWiAAAAAAAAAkoAAAD4QAALbPcGFyYQAAAAAABAAAAAJmZgAA8qcAAA1ZAAAT0AAAClsAAAAAAAAAAFhZWiAAAAAAAAD21gABAAAAANMtbWx1YwAAAAAAAAABAAAADGVuVVMAAAAgAAAAHABHAG8AbwBnAGwAZQAgAEkAbgBjAC4AIAAyADAAMQA2/9sAQwDIipavln3Ir6Ov4dXI7v///////////////////////////////////////////////////////////////////9sAQwHV4eH//////////////////////////////////////////////////////////////////////////////////8AAEQgBDgFoAwEiAAIRAQMRAf/EABcAAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAuEAACAQEFBgYDAQEBAAAAAAAAARECEiExQVFhcYGRsfADMlKhwdEiQuETYvH/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABYRAQEBAAAAAAAAAAAAAAAAAAABQf/aAAwDAQACEQMRAD8AAAAAAAAAgewAAnJSQhMY8wKAAAEhPOJAA27LV0IwAAAAAAAAABqmL5jiSqJuAgAAzViQ1VgZgDSwAAABY4nRulLJgcwAAJJSZvgAkSABSA3TZSluXoBgFqcvAgAAAAABopE7pCaeAAAAAAAAAEBQBMNxcSCADKsAmMgBSFAAAAQoAgAAAAAAAIwUgAAAAAABAAGb4AAAAAAAAAAAAAAAGvUtvVG4prUtGP2fA0rknqlIGL1VE3FnVONS1fJqh5AYAaiuVnIAAAAAABCgCFT1BMgNAzgaAhQAAAAEKAIAAAAAgKQAAABARsCgAAAAAAAAEAoIAKAIAAoAJu1esjdMOmJ7kyIQFeG5rqVK5uL0/ozG1mlU1kBKsU9vwyBu/DOQALZ/GacepDVOW3reBm9qYuGJaHC7xIrMNPbHMAB+szMAAMgAAwwAAsggTkCgAAAAICgCAAAQoAgAAGXitzNEfm4AAUjuAACQAJInu8CgJw8g22BACgEAAAAAtpFlamalFUGl4bdKaaAEqyJVS6cYH68QF+rKm5IF5l3kwNFlxFxCSgNJxS0yXNueXFCdoAQtM2usEhFABJXZY88UMlunliJ6fDE/PvIABX3a/Q79v/QA+wFmAT1KTIqTAAsACElTFxeJmEqlEgaAu1XNC7Vc0BAW7Vc0OK5gQBXlgDJH5uHyagz+/BfAC/T3F888y/zqSpxEbeoCGUzaepLT1A00MzMvUS9QNAzLnE0AKQum0CASAAAA14nnN+H5Fx6mPE8y71N+H5eL6gZ8W9rYp90jH6vevg6V57vn+GEsVuAgWK3lsraLN+YF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" class="card-img-top"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        {{-- Pemilik --}}
        <div class="col-sm-12 col-md-6">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">SPESIFIKASI TEKNIS KENDARAAN BERMOTOR</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Paweł Kuna</td>
                                <td class="text-muted">
                                    UI Designer, Training
                                </td>
                                <td class="text-muted"><a href="#"
                                        class="text-reset">paweluna@howstuffworks.com</a>
                                </td>
                                <td class="text-muted">
                                    User
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jeffie Lewzey</td>
                                <td class="text-muted">
                                    Chemical Engineer, Support
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                                <td class="text-muted">
                                    Admin
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mallory Hulme</td>
                                <td class="text-muted">
                                    Geologist IV, Support
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">mhulme2@domainmarket.com</a>
                                </td>
                                <td class="text-muted">
                                    User
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dunn Slane</td>
                                <td class="text-muted">
                                    Research Nurse, Sales
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                                <td class="text-muted">
                                    Owner
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Emmy Levet</td>
                                <td class="text-muted">
                                    VP Product Management, Accounting
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                                <td class="text-muted">
                                    Admin
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Identitas Kendaraan --}}
        <div class="col-sm-12 col-md-6">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">KETERANGAN HASIL UJI</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Paweł Kuna</td>
                                <td class="text-muted">
                                    UI Designer, Training
                                </td>
                                <td class="text-muted"><a href="#"
                                        class="text-reset">paweluna@howstuffworks.com</a>
                                </td>
                                <td class="text-muted">
                                    User
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jeffie Lewzey</td>
                                <td class="text-muted">
                                    Chemical Engineer, Support
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                                <td class="text-muted">
                                    Admin
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mallory Hulme</td>
                                <td class="text-muted">
                                    Geologist IV, Support
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">mhulme2@domainmarket.com</a>
                                </td>
                                <td class="text-muted">
                                    User
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dunn Slane</td>
                                <td class="text-muted">
                                    Research Nurse, Sales
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                                <td class="text-muted">
                                    Owner
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Emmy Levet</td>
                                <td class="text-muted">
                                    VP Product Management, Accounting
                                </td>
                                <td class="text-muted"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                                <td class="text-muted">
                                    Admin
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
