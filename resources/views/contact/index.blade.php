@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/slider2.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span class="icon-caret"></span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Start Contact Page -->
    <section class="contact-page">
        <div class="container">

            <div class="contact-page__top">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h3>Head Officee</h3>
                                <div class="round-two"></div>
                            </div>
                            <h2>in Japan</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__top-single text-center">
                            <div class="icon-box">
                                <span class="icon-phone-call-3"></span>
                            </div>

                            <div class="content-box">
                                <h2>Call Us</h2>
                                <p>
                                    <a href="tel:(+81)-587-22-6727">
                                        (+81)-587-22-6727
                                    </a>
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__top-single text-center">
                            <div class="icon-box">
                                <span class="icon-pin"></span>
                            </div>

                            <div class="content-box">
                                <h2>Address</h2>
                                <p>
                                    〒　492-8436　愛知県稲沢市中ノ庄 海道町２８－１ 中ノ庄はいつ１０５号
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__top-single text-center">
                            <div class="icon-box">
                                <span class="icon-email"></span>
                            </div>

                            <div class="content-box">
                                <h2>E-mail</h2>
                                <p>
                                    <a href="mailto:katsuki.jp@outlook.jp">
                                        katsuki.jp@outlook.jp
                                    </a>
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h3>Head Officee</h3>
                                <div class="round-two"></div>
                            </div>
                            <h2>in Myanmar</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__top-single text-center">
                            <div class="icon-box">
                                <span class="icon-phone-call-3"></span>
                            </div>

                            <div class="content-box">
                                <h2>Call Us</h2>
                                <p>
                                    <a href="tel:+959 5410 806">
                                        +959 5410 806
                                    </a>
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__top-single text-center">
                            <div class="icon-box">
                                <span class="icon-pin"></span>
                            </div>

                            <div class="content-box">
                                <h2>Address</h2>
                                <p>
                                    No.157 Nantthargone St, Nantthargone Ward,Insein Tsp(11011), Yangon
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__top-single text-center">
                            <div class="icon-box">
                                <span class="icon-email"></span>
                            </div>

                            <div class="content-box">
                                <h2>E-mail</h2>
                                <p>
                                    <a href="mailto:md@katsukimm.com">
                                        md@katsukimm.com
                                    </a>
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Start Contact Page Bottom-->
            <div class="contact-page__bottom">
                <div class="row">
                    <!--Start Contact Page Form-->
                    <div class="col-xl-6">
                        <div class="contact-page__form">
                            <div class="title-box">
                                <h2>
                                    Contact Us
                                </h2>
                                <p>
                                    Alternatively, you may contact us by filling up the contact form. Our team will response
                                    you shortly.
                                </p>
                            </div>
                            <form class="comment-one__form contact-form-validated" method="post"
                                action="{{ route('contact.store') }}" autocomplete="off">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 comment-form__input-box">
                                            <input name="name" type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 comment-form__input-box">
                                            <input name="email" type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 comment-form__input-box">
                                            <input name="phone" type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 comment-form__input-box">
                                            <input name="subject" type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 comment-form__input-box">
                                            <textarea name="message" class="form-control" rows="2" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">Send Message </span>
                                            <i class="icon-double-chevron"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Start Contact Page Form-->

                    <!--Start Contact Page Map-->
                    <div class="col-xl-6">
                        <div class="contact-page__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3817.66640400871!2d96.109083!3d16.892389!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1693716945337!5m2!1sen!2smm"
                                width="600" height="640" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!--End Contact Page Map-->
                </div>
            </div>
            <!--End Contact Page Bottom-->
        </div>
    </section>
    <!--End Contact Page -->
@endsection
