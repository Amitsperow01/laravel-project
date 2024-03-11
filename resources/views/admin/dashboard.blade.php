@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">DASHBOARD</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="main-box mb-red">
                <a href="#">
                    <i class="fa fa-bolt fa-5x"></i>
                    <h5>Zero Issues</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box mb-dull">
                <a href="#">
                    <i class="fa fa-plug fa-5x"></i>
                    <h5>40 Task In Check</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box mb-pink">
                <a href="#">
                    <i class="fa fa-dollar fa-5x"></i>
                    <h5>200K Pending</h5>
                </a>
            </div>
        </div>
    </div>
    
    <div class="panel panel-default">

        <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

            <div class="carousel-inner">
                <div class="item active">

                    <img src="{{asset('assets/img/slideshow/1.jpg')}}" alt="" />

                </div>
                <div class="item">
                    <img src="{{asset('assets/img/slideshow/2.jpg')}}" alt="" />

                </div>
                <div class="item">
                    <img src="{{asset('assets/img/slideshow/3.jpg')}}" alt="" />

                </div>
            </div>
            <!--INDICATORS-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol>
            <!--PREVIUS-NEXT BUTTONS-->
            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
@endsection
