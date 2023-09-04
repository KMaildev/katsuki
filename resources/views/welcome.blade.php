@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <section class="about-two">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h3>About Us</h3>
                                <div class="round-two"></div>
                            </div>
                            <h2>
                                Katsuki Co.,Ltd
                            </h2>
                        </div>
                        <div class="text-box1">
                            <p style="text-align: justify; color: black;">
                                KATSUKI KABUSHIKIKAISHA is an employment agency located in Inazawa City in Aichi Prefecture.
                                Our main service is to introduce jobs in Japan. We have a partner company called KATSUKI
                                COMPANY LIMITED, which is located in Myanmar, is set up in 2017 and is approved to send
                                workers to foreign countries in June 2018.
                                <br><br>
                                There, young people who love Japan and desire to work in Japan are learning Japanese with
                                high motivation. For the above mention facts, our partner company educates Myanmar young
                                people both Japanese Language and Japanese culture. It educates mainly Care-giver, and
                                Technicians and Agricultural Specialists.
                                <br><br>
                                In April this year, our company received an employment agency permit so that we can
                                introduce not only Technicians and Agricultural Specialists but also general jobs to young
                                people.
                            </p>
                        </div>
                    </div>
                </div>


                <!--Start About Two Right-->
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="row filter-layout masonary-layout">
                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="about-two__right-single">
                                    <div class="img-box">
                                        <img src="{{ asset('data/001.jpg') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->
                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="about-two__right-single mb30">
                                    <div class="img-box">
                                        <img src="{{ asset('data/002.jpg') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->

                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="about-two__right-single">
                                    <div class="counter-box">
                                        <h2>
                                            <span class="odometer" data-count="4000">
                                                00
                                            </span>
                                            <span class="plus">+</span>
                                            <br>
                                            Sending <br> Labour
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->

                            <!--Start About Two Right Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="about-two__right-single">
                                    <div class="img-box">
                                        <img src="{{ asset('data/003.jpg') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!--End About Two Right Single-->
                        </div>
                    </div>
                </div>
                <!--End About Two Right-->

            </div>
        </div>
    </section>


    <section class="testimonial-two">
        <div class="testimonial-two__img wow slideInLeft" data-wow-delay="500ms" data-wow-duration="2500ms">
            <img src="{{ asset('assets/images/testimonial/testimonial-v2-img1.png') }}" alt="#">
        </div>
        <div class="shape2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-v2-shape1.png') }}" alt="#">
        </div>
        <div class="shape3 float-bob-x">
            <img src="{{ asset('assets/images/shapes/testimonial-v2-shape2.png') }}" alt="#">
        </div>
        <div class="container">
            <div class="sec-title-two">
                <div class="sub-title">
                    <h3>
                        Katsuki Co.,Ltd
                    </h3>
                    <div class="round-two"></div>
                </div>
                <h2>
                    WHY CHOOSE US
                </h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-two__inner">

                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel"
                            data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 2
                                }
                            }
                        }'>

                            <div class="testimonial-two__single">
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>From its medieval origins to the digital learn everything there
                                            is to know about the ubiquitous lorem ipsum passage esse and
                                            dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.
                                        </p>
                                        <br>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('data/logo.jpg') }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>
                                                Our Vision
                                            </h3>
                                            <p>
                                                Katsuki Co.,Ltd
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="testimonial-two__single">
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <ul>
                                            <li>
                                                -Processing fees, F.O.C. ;
                                            </li>
                                            <li>
                                                -For limited year but over 1 year of employing, 50% of one-year-salary will
                                                be charged as service fees;
                                            </li>
                                            <li>
                                                -For unlimited year of employing, 50% of one-year-salary will be charged as
                                                service fees;
                                            </li>
                                            <br>
                                        </ul>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('data/logo.jpg') }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>
                                                Our Company’s Service Charges Are As Follow.
                                            </h3>
                                            <p>
                                                Katsuki Co.,Ltd
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="testimonial-two__single">
                                <div class="quote-icon">
                                    <span class="icon-quote-left"></span>
                                </div>
                                <div class="testimonial-two__single-inner">
                                    <div class="rating-box">
                                        <ul>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fas fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box">
                                        <p>
                                            Address: Room 105, Nakanoshou Haitsu, Nakanoshou-kaidochou 28-1 Inazawa City,
                                            Aichi Prefecture
                                            <br>
                                            (Post Code: 492-8436)
                                            <br>
                                            Phone: (+81)- 587-22-6727;
                                            <br>
                                            Fax: (+81)-587-22-6727
                                            <br>
                                            E-mail: katsuki.jp@outlook.jp
                                        </p>
                                    </div>

                                    <div class="client-info">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('data/logo.jpg') }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h3>
                                                KABUSHIKIKAISHA KATSUKI
                                            </h3>
                                            <p>
                                                Katsuki Co.,Ltd
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <style>
        @keyframes textShine {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        .font-design1 {
            font-size: clamp(2.8rem, 1.5vw, 3rem);
            font-weight: bold;
            margin: 5px;
            background: linear-gradient(to right,
                    #061E5E 20%,
                    #00affa 30%,
                    #0190cd 70%,
                    #c43477 80%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            background-size: 500% auto;
            animation: textShine 5s ease-in-out infinite alternate;
        }
    </style>

    <section class="services-one services-one--about" style="padding: 20px 0px 10px;">
        <div class="auto-container">
            <div class="sec-title text-center text-design">
                <h2 class="font-design1">
                    Katsuki Co.,Ltd
                    <br>
                    Japanese Language School
                </h2>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/study.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="fa fa-book"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Study Japanese Language</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/2.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="fa fa-file"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Certificate</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/004.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Interview</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/3.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="icon-factory"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Work in Japan</a></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-one about-one--about">
        <div class="about-one__bg" style="background-image: url({{ asset('data/bg1.jpg') }});">
        </div>
        <div class="shape1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/about-v1-shape2.png') }}" alt="#">
        </div>
        <div class="shape4 float-bob-y">
            <img src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt="#">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__img">
                        <div class="inner">
                            <div class="shape2" hidden></div>
                            <div class="shape3">
                                <img src="{{ asset('assets/images/shapes/about-v1-shape3.png') }}" alt="#">
                            </div>
                            <img src="{{ asset('data/4.jpg') }}" alt="#"
                                style="width: 100%; height: 500px; background-size: center; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <h2>
                                About of Japanese Language School
                            </h2>
                        </div>

                        <div class="about-one__content-text">
                            <p style="text-align: justify; color: black;">
                                In cooperation with KATSUKI COMPANY LIMITED in Myanmar, young technicians in the field of
                                engineering, agricultural and computer can concentrate while working in Japan, they are
                                introduced Japanese Culture starting from “Trash”, to Japanese food, how to interact in
                                working environment etc., by Japanese Native Speakers.In addition, preparation course for
                                students who intend to take specific skilled exam in the field of Caring, Food Industry,
                                Restaurant Services and Agricultural Sector.
                            </p>
                        </div>

                        <div class="about-one__content-text2">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="about-one__content-text2-single">
                                        <ul>
                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-checkmark"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>Characteristics</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text">
                                            <p style="color: black">
                                                Aside from basic Japanese language courses, Japanese language schools
                                                provide university
                                                preparation courses, business Japanese courses, and others.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-three">
        <div class="shape1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/feature-v3-shape2.png') }}" alt="#">
        </div>
        <div class="shape2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/feature-v3-shape2.png') }}" alt="#">
        </div>
        <div class="feature-three__bg" style="background-image: url({{ asset('data/bg2.png') }});">
        </div>
        <div class="feature-three__pattern"
            style="background-image: url({{ asset('assets/images/pattern/thm-pattern.png') }});">
        </div>
        <div class="container">
            <div class="feature-three__inner">
                <ul class="feature-three__box">
                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-checking"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="bridge-costruction.html">
                                    N5
                                    <br>
                                    Basic Level
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="fa fa-check-double"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="bridge-costruction.html">
                                    N4 <br> "able to understand basic Japanese"
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-programmer"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="">
                                    N3
                                    <br>
                                    Intermediate Level
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-wallpaper"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="bridge-costruction.html">
                                    N2 <br> Pre-Advanced Level
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-like"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="">
                                    N1
                                    <br>
                                    Advanced Level
                                </a>
                            </h2>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>



    <section class="portfolio-page" style="padding: 20px 0px 10px;">
        <div class="container">

            <style>
                .box {
                    color: #fff;
                    position: relative;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 40px auto;
                    padding: 10px;
                    background: #060c21;
                    box-sizing: border-box;
                    border-radius: 5px;
                    transition: 0.5s all linear;
                }

                .box::before {
                    z-index: -1;
                }

                .box::after {
                    z-index: -2;
                    filter: blur(10px);
                }

                .box::before,
                .box::after {
                    content: "";
                    position: absolute;
                    top: -5px;
                    left: -5px;
                    right: -5px;
                    bottom: -5px;
                    background: #fff;
                    background: linear-gradient(0deg, #2196f3, #060c21, #F00000);
                    border-radius: 5px;
                }
            </style>

            <div class="box">
                <div class="faq-two__title text-center" style="margin-bottom: 0px;">
                    <h2>
                        Event & Activities
                    </h2>
                </div>
            </div>


            <div class="row">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-xl-4 col-lg-4 col-md-6  wow animated fadeInUp " data-wow-delay="0.1s">
                            <div class="portfolio-page__single box" style="background-color: white;">
                                <div class="portfolio-page__single-img">
                                    <div class="portfolio-page__link">
                                        <a class="img-popup" href="{{ $image }}">
                                            <span class="icon-plus"></span>
                                        </a>
                                    </div>
                                    <img data-enlargeable="" src="{{ $image }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    <div class="overlay-content">
                                        <div class="text-box">
                                            <h3>
                                                <a href="javascript::void(0)">
                                                    {{ $activity->title ?? '' }}
                                                </a>
                                            </h3>
                                            <p>
                                                Katsuki Co.,Ltd
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

@endsection
