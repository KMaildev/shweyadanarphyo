<!-- Main Header-->
<header class="main-header header-style-two">

    <div class="header-top" style="background-color: #F0C851">
        <div class="inner-container">

            <div class="top-left">
                <ul class="list-style-one">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@shweyadanarphyo.com">
                            info@shweyadanarphyo.com
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <a href="tel:09-5095770">
                            09-5095770,
                        </a>
                        <a href="tel:09-778882591">
                            09-778882591,
                        </a>
                        <a href="tel:09-450095878">
                            09-450095878,
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-clock"></i>
                        Mon _ Sat: 9.00 to 6.00
                    </li>
                </ul>
            </div>

            <div class="top-right">

                <ul class="useful-links">
                    <li><a href="{{ route('cv.index') }}">Submit CV</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                </ul>

                <ul class="social-icon-one">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="main-box">
            <div class="logo-box" style="border-right: 0px solid #d4d9e6;">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/web.png') }}" alt=""
                            title="Shwe Yadanar Phyo Co.,Ltd" style="width: 450px;">
                    </a>
                </div>
            </div>

            <div class="nav-outer">

                <nav class="nav main-menu">
                    <ul class="navigation">

                        <li class="current">
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#">
                                About Us
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        Our Company
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}">
                                        President's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        Professional Team
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#">
                                Overseas Jobs
                            </a>
                            <ul>
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#">
                                Application Form
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('cv.index') }}">
                                        Submit CV
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('employer.index') }}">
                                        Employer Form
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#">
                                Gallery & Activities
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

                        <li>
                            <a href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Main Menu End-->

                <div class="outer-box">
                    <a href="tel:+92(8800)9806" class="info-btn">
                        <img class="icon" src="{{ asset('assets/images/icons/icon-phone.png') }}" alt="">
                        <small class="title">Call Anytime</small>
                        <strong class="text">+ 92 ( 8800 ) 86300</strong>
                    </a>

                    <a href="page-contact.html" class="theme-btn btn-style-one"><span class="btn-title">Book
                            Consultation</span></a>

                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo.png') }}" alt="" title=""></a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:09-5095770">09-5095770</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:info@shweyadanarphyo.com">info@shweyadanarphyo.com</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 8:00 - 6:00, Sunday - CLOSED
                    </div>
                </li>
            </ul>

            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>
</header>
<!--End Main Header -->
