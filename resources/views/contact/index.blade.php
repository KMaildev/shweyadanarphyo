@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="page-title" style="background-image: url({{ asset('data/contact_b.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-details">
        <div class="container ">
            <div class="row">

                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">
                            If you have any questions, comments, we're here to help.
                        </span>
                        <h2>
                            Contact Us
                        </h2>
                    </div>
                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}" autocomplete="off">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait...">
                                    <span class="btn-title">Send message</span>
                                </button>

                                <button type="reset" class="theme-btn btn-style-one bg-theme-color5">
                                    <span class="btn-title">Reset</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>
                                Interested in discussing?
                            </h2>
                            <div class="text">
                                Alternatively, you may contact us by filling up the contact form. Our team will response you
                                shortly.
                            </div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon bg-theme-color2">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:09-5095770">
                                        09-5095770,
                                    </a>
                                    <a href="tel:09-778882591">
                                        09-778882591,
                                    </a>
                                    <br>
                                    <a href="tel:09-450095878">
                                        09-450095878,
                                    </a>
                                    <a href="tel:09-756955455">
                                        09-756955455
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:info@shweyadanarphyo.com">info@shweyadanarphyo.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>
                                        Address
                                    </h6>
                                    <span>
                                        No.3, 6th Floor, Megga Street, <br> Kyauk Maung, Kyar Kywat Thit Ward, <br> Tarmwe
                                        T/S, Yangon.
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <!-- Google Map HTML Codes -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd"
                    data-tm-width="100%" height="500" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>

@endsection
