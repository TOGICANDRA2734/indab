@extends('layout.index')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Title</th>
                            <th>Role</th>
                            <th>Role</th>
                            <th>Role</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $dt)
                            <tr>
                                <td data-label="Name">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{$dt->nama}}</div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td data-label="Title">
                                    <div>{{$dt->perusahaan}}</div>
                                </td>
                                <td data-label="Title">
                                    <div>{{$dt->alamat}}</div>
                                </td>
                                <td class="text-muted" data-label="Role">
                                    {{$dt->jabatan}}
                                </td>
                                
                                <td class="text-muted" data-label="Role">
                                    {{$dt->no_hp}}
                                </td>
                                
                                <td class="text-muted" data-label="Role">
                                    {{$dt->email}}
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn">
                                            Detail
                                        </a>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </div>
                                        </div>
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