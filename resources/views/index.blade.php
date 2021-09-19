@extends('layouts.master')

@section('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('Services')
    <div class="col-lg-6">
        <div class="box wow fadeInRight">
            <div class="icon"><i class="fa fa-picture-o"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="box wow fadeInRight">
            <div class="icon"><i class="fa fa-picture-o"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
        </div>
    </div>

@endsection
@section('Client')
    <img src="img/clients/client-3.png" alt="">
    <img src="img/clients/client-3.png" alt="">
    <img src="img/clients/client-3.png" alt="">
@endsection
@section('Portfoloi')
    <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                    <div class="portfolio-info">
                        <h2 class="wow fadeInUp">Portfolio Item 1</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                    <div class="portfolio-info">
                        <h2 class="wow fadeInUp">Portfolio Item 1</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                    <div class="portfolio-info">
                        <h2 class="wow fadeInUp">Portfolio Item 1</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                    <div class="portfolio-info">
                        <h2 class="wow fadeInUp">Portfolio Item 1</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
@section('team')
    <div class="col-lg-3 col-md-6">
        <div class="member">
            <div class="pic"><img src="img/portfolio/1.jpg" alt=""></div>
            <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="member">
            <div class="pic"><img src="img/portfolio/1.jpg" alt=""></div>
            <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
