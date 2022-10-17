@extends('layout.index')

@section('title-utama', 'Galeri')

@section('head')
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('popup/dist/magnific-popup.css') }}">
@endsection

@section('content')
    <div class="row row-cards">
        @foreach ($images as $img)
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="popup-gallery">
                        <a href="{{ 'http://127.0.0.1:8000' . Storage::url($img) }}" title="{{ $img }}" class="d-block">
                            <img src="{{ 'http://127.0.0.1:8000' . Storage::url($img) }}" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center" id="gallery">
                            <div>{{ $img }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('js')
    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <!-- Magnific Popup core JS file -->
    <script src="{{asset('popup/dist/jquery.magnific-popup.js')}}"></script>
        
    <script>
        $(document).ready(function() {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                    }
                }
            });
        });
    </script>
@endsection
