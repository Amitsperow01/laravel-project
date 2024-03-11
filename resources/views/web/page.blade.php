@extends('layouts.web')
@section('content')
    {{-- {{$page->title}} <br>  
 {{$page->heading}}   
{!!$page->description!!} --}}

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                {{-- banner image --}}
                {{-- @dd($page); --}}

                <img src="{{ $page->getFirstMediaUrl('image') }}" alt="">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <div class="col-6 text-start">
                            {{-- <img class="img-fluid w-100" src="img/about-1.jpg"> --}}
                            <img class="img-fluid w-100" src="{{ $page->getFirstMediaUrl('image') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid" src="{{asset('img/about.jpg')}}" style="width: 85%; margin-top: 15%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid" src="{{asset('img/service-2.jpg')}}" style="width: 85%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100" src="{{asset('img/service-1.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">{{ $page->title }}</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                </div>
                <div class="col-lg-12 wow fadeIn text-center" data-wow-delay="0.5s">
                    <h1 class="mb-4">Description</h1>
                    <p>
                        {!! $page->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
