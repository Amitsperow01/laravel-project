@extends('layouts.web')

@section('content')
    <!-- Carousel Start -->

    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            @php
                $i = 1;
            @endphp
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $i ? 'active' : '' }}"{{ $i = 0 }}>
                        <img class="w-100" src="{{ $slider->getFirstMediaUrl('image') }}" alt="">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-primary m-0">{{ $slider->title }}</h4>
                            <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">Best Security Service</h4>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Learn More</a>
                        </div>
                    </div>
					@endforeach
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 py-lg-0 feature">
        <div class="row py-5 py-lg-0">
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="flaticon-policeman display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">Professional Staff</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci
                            velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="flaticon-helmet display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">Latest Equipments</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci
                            velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center px-5">
                    <i class="flaticon-surveillance display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci
                            velit id libero
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
    <!-- About Start -->
    <div class="container-fluid mb-5" style="background: #f6f6f6;">
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid" src="img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3">About Us</h5>
                <h1 class="mb-4">15 Years Experience</h1>
                <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-approved display-3 text-primary"></i>
                        <h5 class="mt-2">Govt Approved</h5>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-3 text-primary"></i>
                        <h5 class="mt-2">Award Winning</h5>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                </div>
                <a href="" class="btn btn-lg px-4 btn-primary">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Services Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Our Services</h5>
            <h1 class="m-0">Premium Security Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/service-1.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3"
                            style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Office Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum
                        sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/service-2.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-home font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3"
                            style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Home Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum
                        sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/service-3.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-factory font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3"
                            style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Industry Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum
                        sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/service-4.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-transportation font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3"
                            style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Transport Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum
                        sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/service-5.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3"
                            style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Objects Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum
                        sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/service-6.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-bodyguard font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3"
                            style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Private Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum
                        sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- Team Start -->
    <div class="container pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Security Officers</h5>
            <h1 class="m-0">Meet Our Security Officers</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-end">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-1.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-2.jpg" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-start">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-end">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-3.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-4.jpg" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-start">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

	<!-- Blog Start -->
    <div class="container pt-5">
		@foreach($blogs as $blog)
      
        <div class="d-flex flex-column text-center mb-5">
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">	<h5 class="text-primary mb-3">{{$blog->title}}</h5>
                <h1 class="m-0">{{$blog->heading}}</h1>
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{ $blog->getFirstMediaUrl('image') }}" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
						<div class="d-flex mb-2">
							<small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">{{$blog->description}}</p>
                    </div>
                </div>
            </div>
			@endforeach	
        </div>
    </div>
    <!-- Blog End -->
@endsection
