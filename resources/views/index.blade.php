@extends('layouts.app')
@section('pagecss')
 <!-- Page leve stylesheets -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
@endsection
@section('content')
    <!-- slider banner starst -->
    <section class="owl-carsousel-banner">
        <!-- Slider Starts -->
        <div class="homeSliderContainer">
            <div class="item-slider2 mainSliderHome owl-carousel owl-theme">
                <div class="item">
                    <div class="img-holders">
                        <img src="{{asset('assets')}}/images/slider/s1.jpg" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="item">
                    <div class="img-holders">
                        <img src="{{asset('assets')}}/images/slider/s2.jpg" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="item">
                    <div class="img-holders">
                        <img src="{{asset('assets')}}/images/slider/s3.jpg" alt="" class="img-responsive">
                    </div>
                </div>


            </div>
            <div class="society-from">
                <h1>Over 100,000+jobs are waiting for you</h1>
                <div class="form-transparencys">
                    <form>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="far fa-briefcase"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="job title/keywords/company name">
                                </div>
                            </div>
                            <!---->
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="far fa-map-marker"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="city/zip code/location">
                                </div>
                            </div>
                            <!---->
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Find</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="slider-services">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-service">
                                <div class="row">
                                    <div class="single-serve-container">
                                        <div class="col-sm-8">
                                            <div class="service-heading">
                                                <h2>Company Name</h2>
                                                <a href="#">Explore More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="service-icon">
                                                <i class="far fa-trophy"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!---->
                        <div class="col-sm-4">
                            <div class="single-service">
                                <div class="row">
                                    <div class="single-serve-container">
                                        <div class="col-sm-8">
                                            <div class="service-heading">
                                                <h2>TOP MANAGEMENT PROFILE</h2>
                                                <a href="#">Explore More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="service-icon">
                                                <i class="far fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="col-sm-4">
                            <div class="single-service">
                                <div class="row">
                                    <div class="single-serve-container">
                                        <div class="col-sm-8">
                                            <div class="service-heading">
                                                <h2>PROFILE VALIDATION</h2>
                                                <a href="#">Explore More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="service-icon">
                                                <i class="far fa-user-tag"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Close -->

    </section>
    <!-- slider banner close -->

    <!-- jobs section starst -->
    <section class="jobs-section">
        <div class="container">
            <div class="job-heading">
                <h1>
                    Featured Jobs
                    <a href="#">See all jobs</a>
                </h1>
            </div>

            <!-- table -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="bg-white">
                            <th class="title-job">JOB TITLE / COMPANY NAME</th>
                            <th class="title-job">TYPE</th>
                            <th class="title-job">LOCATION</th>
                            <th class="title-job">EXPIRED DATE</th>
                            <th class="title-job">SALARY</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-white">
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="job-image">
                                            <img src="{{asset('assets')}}/images/jobs/jobs.jpg" alt="">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="col-sm-9">
                                        <div class="job-details">
                                            <h1><a href="#">Web Designer needed</a></h1>
                                            <span>QUICK STUDIO</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="full-time">Full Time</span>
                            </td>
                            <td>
                                Cupertino <span class="grey-loc">CA</span>
                            </td>
                            <td>
                                Nov 14 <sup>th</sup> <span class="grey-loc">2017</span>
                            </td>
                            <td>
                                <sup>$</sup>60 <span class="grey-loc"> /hour</span>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="job-image">
                                            <img src="{{asset('assets')}}/images/jobs/jobs.jpg" alt="">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="col-sm-9">
                                        <div class="job-details">
                                            <h1><a href="#">Web Designer needed</a></h1>
                                            <span>QUICK STUDIO</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="part-time">part Time</span>
                            </td>
                            <td>
                                Cupertino <span class="grey-loc">CA</span>
                            </td>
                            <td>
                                Nov 14 <sup>th</sup> <span class="grey-loc">2017</span>
                            </td>
                            <td>
                                <sup>$</sup>60 <span class="grey-loc"> /hour</span>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="job-image">
                                            <img src="{{asset('assets')}}/images/jobs/jobs.jpg" alt="">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="col-sm-9">
                                        <div class="job-details">
                                            <h1><a href="#">Web Designer needed</a></h1>
                                            <span>QUICK STUDIO</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="full-time">Full Time</span>
                            </td>
                            <td>
                                Cupertino <span class="grey-loc">CA</span>
                            </td>
                            <td>
                                Nov 14 <sup>th</sup> <span class="grey-loc">2017</span>
                            </td>
                            <td>
                                <sup>$</sup>60 <span class="grey-loc"> /hour</span>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="job-image">
                                            <img src="{{asset('assets')}}/images/jobs/jobs.jpg" alt="">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="col-sm-9">
                                        <div class="job-details">
                                            <h1><a href="#">Web Designer needed</a></h1>
                                            <span>QUICK STUDIO</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="part-time">part Time</span>
                            </td>
                            <td>
                                Cupertino <span class="grey-loc">CA</span>
                            </td>
                            <td>
                                Nov 14 <sup>th</sup> <span class="grey-loc">2017</span>
                            </td>
                            <td>
                                <sup>$</sup>60 <span class="grey-loc"> /hour</span>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <!---->
                <div class="tabel-pagisnation">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- jobs section close -->

    <!-- company services section starts -->
    <section class="company-services-section">
        <div class="container">
            <div class="job-heading">
                <h1>
                    Company Services
                </h1>
            </div>
            <div class="row">
                <div class="onel-line">
                    <!---->
                    <div class="col-sm-4">
                        <div class="company-service-container">
                            <div class="service-image">
                                <img src="{{asset('assets')}}/images/business/1.jpg" alt="">
                            </div>
                            <div class="services-details">
                                <h2>Career Expert</h2>
                                <p>With our expert guidance, our members can affordably and reliably grow and groom individual.</p>
                                <a href="#" class="btn btn-primary">view more</a>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="col-sm-4">
                        <div class="company-service-container">
                            <div class="service-image">
                                <img src="{{asset('assets')}}/images/business/1.jpg" alt="">
                            </div>
                            <div class="services-details">
                                <h2>Live Interview Preparation</h2>
                                <p>With our expert guidance, our members can affordably and reliably grow and groom individual.</p>
                                <a href="#" class="btn btn-primary">view more</a>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="col-sm-4">
                        <div class="company-service-container">
                            <div class="service-image">
                                <img src="{{asset('assets')}}/images/business/1.jpg" alt="">
                            </div>
                            <div class="services-details">
                                <h2>Build social profile</h2>
                                <p>With our expert guidance, our members can affordably and reliably grow and groom individual.</p>
                                <a href="#" class="btn btn-primary">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- company services section close -->

    <!-- partner companies section starts -->
    <section class="partners-compnies">
        <div class="container">
            <div class="job-heading">
                <h1>
                    Our Partner Companies
                </h1>
            </div>

            <div class="row">
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/1.jpg" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/2.jpg" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/3.gif" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/4.gif" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/5.gif" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/6.jpg" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/7.gif" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/8.gif" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/9.jpg" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/10.jpg" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/11.jpg" alt="">
                    </div>
                </div>
                <!---->
                <div class="col-sm-2 col-xs-4">
                    <div class="partner-image">
                        <img src="{{asset('assets')}}/images/partners/12.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- partner companies section close -->

@endsection
@section('pagejs')
    <!-- Page level scripts -->
    <script src="{{asset('assets')}}/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <!--Slider Script-->

    <script>
        $('.mainSliderHome').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            items: 1,
        })

    </script>
@endsection