<section class="main-slider main-slider-two">
<div class="swiper-container thm-swiper__slider"
    data-swiper-options='{"slidesPerView": 1, "loop": true,
"effect": "fade",
"pagination": {
"el": "#main-slider-pagination",
"type": "bullets",
"clickable": true
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
},
"autoplay": {
"delay": 5000
}}'>
    <div class="swiper-wrapper">

        <!--Start Main Slider One-->
        <div class="swiper-slide">
            <div class="image-layer"
                style="background-image:url({{ asset('assets/images/backgrounds/slider-v2-bg.jpg') }})">
            </div>
            <div class="main-slider-two__bg"></div>
            <div class="main-slider-two__img">
                <img src="{{ asset('assets/images/slides/slider-v2-img1.png') }}" alt="#">
            </div>
            <div class="shape1"></div>
            <div class="shape2 float-bob-y"></div>
            <div class="shape3">
                <img src="{{ asset('assets/images/shapes/main-slider-v2-shape2.png') }}" alt="#">
            </div>
            <div class="container">
                <div class="main-slider-two__content">
                    <div class="main-slider-two__list">
                        <ul>
                            <li>Modern</li>
                            <li>Business</li>
                            <li>Industry</li>
                        </ul>
                    </div>

                    <div class="title">
                        <h2>Technology <br> Automation <br> Solutions</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="contact.html">
                            <span class="txt">Free Consultation</span>
                            <i class="icon-double-chevron"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Slider One-->
    </div>

    <!-- If we need navigation buttons -->
    <div class="main-slider__nav style2">
        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
            <i class="icon-left-arrow"></i>
        </div>
        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
            <i class="icon-right-arrow"></i>
        </div>
    </div>
</div>
</section>
