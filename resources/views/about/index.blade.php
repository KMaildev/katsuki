@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/slider1.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>
                    About of Our Company
                </h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span class="icon-caret"></span></li>
                    <li>
                        Katsuki Co.,Ltd
                    </li>
                </ul>
            </div>
        </div>
    </section>


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

@endsection
