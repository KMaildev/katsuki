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
                <div class="image-layer" style="background-image:url({{ asset('data/slider1.jpg') }})">
                </div>
               
                <div class="container">
                    <div class="main-slider-two__content">
                        
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
