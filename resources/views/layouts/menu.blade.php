<header class="main-header main-header-two">

    <div class="main-header-two__top">
        <div class="auto-container">
            <div class="main-header-two__top-inner">
                <div class="main-header-two__top-left">
                    <ul class="main-header-two__contact-info">
                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-clock"></span>
                                </div>
                                <div class="text-box">
                                    <p>Our Opening Hours Mon- Fri</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text-box">
                                    <p><a href="mailto:md@katsukimm.com">md@katsukimm.com</a></p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text-box">
                                    <p>+959 5410 806</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="main-header-two__top-right">
                    <div class="number">
                        <p>
                            <span class="icon-phone-call-2"></span>
                            <a href="tel:+959 5410 806">
                                +959 5410 806
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-two__bottom">
        <div class="main-header-two__bottom-inner">
            <nav class="main-menu main-menu-one">
                <div class="main-menu__wrapper clearfix">
                    <div class="auto-container">
                        <div class="main-menu__wrapper-inner">

                            <div class="main-header-two__bottom-left">
                                <div class="logo-box-one">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('data/logo.jpg') }}" alt="Awesome Logo" title=""
                                            style="width: 130px;">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-two__bottom-middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <ul class="main-menu__list">

                                        <li class="current">
                                            <a href="{{ route('home') }}">
                                                Home
                                                <span class="line"></span>
                                            </a>
                                        </li>

                                        <li class="current">
                                            <a href="javascript::void(0)">
                                                About Us
                                                <span class="line"></span>
                                                <i class="icofont-simple-down"></i>
                                            </a>
                                            <ul>
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

                                                <li hidden>
                                                    <a href="{{ route('team') }}">
                                                        Our Executive Team Members
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="current">
                                            <a href="{{ route('school') }}">
                                                Japanese School
                                                <span class="line"></span>
                                            </a>
                                        </li>


                                        <li class="current">
                                            <a href="javascript::void(0)">
                                                Job Category
                                                <span class="line"></span>
                                                <i class="icofont-simple-down"></i>
                                            </a>
                                            <ul>
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
                                            </ul>
                                        </li>


                                        <li class="current">
                                            <a href="javascript::void(0)">
                                                Activities
                                                <span class="line"></span>
                                                <i class="icofont-simple-down"></i>
                                            </a>
                                            <ul>
                                                @foreach ($categories as $category)
                                                    <li>
                                                        <a href="{{ route('activities.show', $category->id) }}">
                                                            {{ $category->title ?? '' }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="current">
                                            <a href="{{ route('contact.index') }}">
                                                Contact Us
                                                <span class="line"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="main-header-two__bottom-right">
                                <div class="main-header-one__bottom-right-btn">
                                    <a href="contact.html">Get a Quote</a>
                                </div>
                                <ul class="header-social-links-style2">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</header>

<div class="stricky-header stricky-header--two stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>
