<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    @yield('head')
</head>

<body>
    <div class="wrapper h-screen">
        {{-- Include component Header --}}
        {{-- @include('component.header') --}}
        {{-- Include component Header --}}

        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                INDAB - RCI
                            </div>
                            <h2 class="page-title font-bold">
                                @yield('title-utama')
                            </h2>
                        </div>
                        <div class="col-auto ms-auto">
                            @yield('button-add')
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>

            {{-- Footer --}}
            @include('component.footer')
            {{-- End Footer --}}

        </div>
    </div>
    {{-- Modal --}}
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <form class="modal-dialog modal-lg" role="document" method="POST" action="@yield('modal-route')" @yield('form-tambahan')>
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@yield('modal-title')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @yield('modal-body')
                </div>
                <div class="modal-footer">
                    @yield('modal-footer')
                </div>
            </div>
        </form>
    </div>
    {{-- End Modal --}}
    {{-- Component JavaScript Class --}}
    @include('component.jsClass')
    @yield('js')
    {{-- Component JavaScript Class --}}

    {{-- Include Sweet Alert --}}
    @include('sweetalert::alert')
</body>

</html>
