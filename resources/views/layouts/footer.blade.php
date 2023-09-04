<!--Start Cta One -->
<section class="cta-one">
    <div class="shape1"></div>
    <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg);">
    </div>
    <div class="container">
        <div class="row">
            <div class="cta-one__inner">
                <div class="cta-one__content">
                    <div class="text-box">
                        <p>
                            Contact us for better help and services.
                        </p>
                        <h2>Need Our services?</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('contact.index') }}">
                            <span class="txt">Contact Now</span>
                            <i class="icon-double-chevron"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Cta One -->

<!--Start Footer One -->
<footer class="footer-one">
    <div class="footer-one__bg" style="background-image: url(assets/images/backgrounds/footer-v1-bg.png);">
    </div>
    <div class="footer-one__pattern" style="background-image: url(assets/images/pattern/thm-pattern.png);">
    </div>
    <!--Start Footer-->
    <div class="footer">
        <div class="container">
            <div class="row">


                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="footer-widget__single ml30 mt50">
                        <div class="title">
                            <h2>
                                KATSUKI CO.,LTD .,
                            </h2>
                        </div>
                        <div class="footer-widget__single-contact">
                            <p class="text">
                                No.157 Nantthargone St, Nantthargone Ward,
                                Insein Tsp(11011), Yangon
                            </p>
                            <p class="number">
                                <a href="tel:+959 5410 806">
                                    +959 5410 806
                                </a>
                            </p>
                            <p class="email">
                                <a href="mailto:md@katsukimm.com">
                                    md@katsukimm.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="footer-widget__single ml30 mt50">
                        <div class="title">
                            <h2>
                                KABUSHIKIKAISHA KATSUKI
                            </h2>
                        </div>
                        <div class="footer-widget__single-contact">
                            <p class="text">
                                〒　492-8436　愛知県稲沢市中ノ海道町２８－１ 中ノ庄はいつ１０５号
                            </p>
                            <p class="number">
                                <a href="tel:(+81)-587-22-6727">
                                    (+81)-587-22-6727
                                </a>
                            </p>
                            <p class="email">
                                <a href="mailto:katsuki.jp@outlook.jp">
                                    katsuki.jp@outlook.jp
                                </a>
                            </p>
                        </div>
                    </div>
                </div>


                <!--Start Footer Widget Single-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.2s">
                    <div class="footer-widget__single ml30">
                        <div class="title">
                            <h2>Explore</h2>
                        </div>
                        <div class="footer-widget__single-explore">
                            <ul class="footer-widget__single-list">
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        About Us
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}">
                                        MD's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('technical') }}">
                                        Technicians
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('skilled_worker') }}">
                                        Special Skilled Workers
                                    </a>
                                </li>

                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Widget Single-->

                <!--Start Footer Widget Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="footer-widget__single ml30 mt50">
                        <div class="title">
                            <h2>Google Map</h2>
                        </div>
                        <div class="footer-widget__single-contact">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3817.66640400871!2d96.109083!3d16.892389!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1693796851725!5m2!1sen!2smm"
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!--End Footer Widget Single-->

            </div>
        </div>
    </div>
    <!--End Footer-->

    <div class="footer-one__bottom">
        <div class="container">
            <div class="bottom-inner">
                <div class="copyright">
                    <center>
                        <p>Copyright © {{ now()->year }} All Rights Reserved.</p>
                    </center>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--End Footer One-->
