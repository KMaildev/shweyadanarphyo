<!-- Main Footer -->
<footer class="main-footer">
    <div class="bg bg-pattern-7"></div>
    <div class="auto-container">
        <div class="footer-upper" style="background-color: #D96F2D;">
            <div class="logo-box">
                <img src="{{ asset('data/logo.png') }}" alt="" style="width: 200px;">
            </div>
            <ul class="contact-info">
                <li>
                    <i class="icon fa fa-phone-square"></i>
                    <span class="title">Phone:</span>
                    <div class="text">
                        <a href="tel:09-5095770">
                            09-5095770,
                        </a>
                    </div>
                </li>
                <li>
                    <i class="icon fa fa-envelope"></i>
                    <span class="title">Email:</span>
                    <div class="text">
                        <a href="mailto:info@shweyadanarphyo.com">
                            info@shweyadanarphyo.com
                        </a>
                    </div>
                </li>
                <li>
                    <i class="icon fa fa-envelope"></i>
                    <span class="title">Email:</span>
                    <div class="text">
                        <a href="mailto:admin@shweyadanarphyo.com">
                            admin@shweyadanarphyo.com
                        </a>
                    </div>
                </li>
            </ul>
            <div class="btn-box">
                <a href="{{ route('contact.index') }}" class="theme-btn btn-style-four">
                    <span class="btn-title">Contact Us</span>
                </a>
            </div>
        </div>
    </div>

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-widget col-lg-3 col-md-3 col-ms-12">
                    <h6 class="widget-title">Quick Links</h6>
                    <ul class="user-links">
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
                        <li>
                            <a href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-widget col-lg-3 col-md-3 col-ms-12">
                    <h6 class="widget-title">
                        Sending Country
                    </h6>
                    <ul class="user-links">
                        @foreach ($countries as $country)
                            <li>
                                <a href="{{ route('job.show', $country->id) }}">
                                    {{ $country->country ?? '' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!--Footer Column-->

                <div class="footer-column col-xl-3 col-lg-12 col-md-6">
                    <div class="footer-widget">
                        <h6 class="widget-title">Map</h6>
                        <div class="subscribe-form">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.120567827479!2d96.1629825742235!3d16.820373783973277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193214fe63d43%3A0xb427904180870d99!2sShwe%20Yadanar%20Phyo%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1688408019327!5m2!1sen!2smm"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-xl-3 col-lg-12 col-md-6">
                    <div class="footer-widget">
                        <h6 class="widget-title">Facebook</h6>
                        <div class="subscribe-form">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous"
                                src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                                nonce="PosYNXjc"></script>

                            <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100094159625531"
                                data-tabs="timeline" data-width="" data-height="300" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/profile.php?id=100094159625531"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/profile.php?id=100094159625531">Facebook</a>
                                </blockquote>
                            </div>
                        </div>
                        <ul class="social-icon-two">
                            <li><a href="https://www.facebook.com/profile.php?id=100094159625531"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">
                    Copyright © 2023 Shwe Yadanar Phyo Co.,Ltd. All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->
