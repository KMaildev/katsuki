@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/slider1.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>
                    Gallery & Activities
                </h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span class="icon-caret"></span></li>
                    <li>
                        {{ $category->title ?? '' }}
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
