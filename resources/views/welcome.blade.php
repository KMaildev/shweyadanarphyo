@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">about the company</span>
                            <h2><span class="color3">Shwe Yadanar Phyo Co.,Ltd</span></h2>
                            <h4>
                                Overseas Employment Agency
                            </h4>
                            <div class="text" style="text-align: justify">
                                Our overseas employment agency is a leading provider of international recruitment services.
                                With a strong track record of success, we specialize in connecting skilled professionals
                                with rewarding job opportunities abroad.
                                <br><br>
                                As a company, we have built a reputation for our extensive network of global clients and our
                                ability to source top talent from around the world. We work closely with employers to
                                understand their specific hiring needs and develop tailored recruitment strategies to
                                attract the best candidates.
                                <br><br>
                                Our team of experienced professionals is well-versed in international labor laws,
                                immigration processes, and work permit requirements. This enables us to guide candidates
                                through the complex journey of securing overseas employment, ensuring a smooth and
                                hassle-free transition.
                                <br><br>
                                We take pride in our ethical approach to recruitment, prioritizing transparency, fairness,
                                and compliance with all relevant regulations. We are committed to providing exceptional
                                service to both employers and job seekers, facilitating successful placements and long-term
                                partnerships.
                                <br><br>
                                At our company, we understand the unique challenges and opportunities of the global job
                                market. Through our expertise and dedication, we strive to empower individuals to achieve
                                their career goals and help organizations thrive by accessing top international talent.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="row">
                            <div class="column col-lg-6 col-md-6">
                                <div class="image-box">
                                    <figure class="map">
                                        <img src="{{ asset('assets/images/icons/map.png') }}" alt="">
                                    </figure>
                                    <figure class="image-1 overlay-anim wow fadeInUp">
                                        <img src="{{ asset('data/interviews.webp') }}" alt="">
                                    </figure>
                                    <figure class="image-2 overlay-anim wow fadeInRight">
                                        <img src="{{ asset('data/mdy.jpg') }}" alt="" style="width: 100%;">
                                    </figure>
                                </div>
                            </div>
                            <div class="column col-lg-6 col-md-6">
                                <div class="image-box">
                                    <figure class="image-3 overlay-anim wow fadeInLeft">
                                        <img src="{{ asset('data/mmmap.png') }}" alt="">
                                    </figure>
                                    <div class="experience bounce-y">
                                        <div class="inner">
                                            <i class="icon flaticon-loyalty"></i>
                                            <div class="text">
                                                <strong>3800</strong>
                                                Sending Worker
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="about-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <i class="icon flaticon-passport-16"></i>
                                    <h6 class="title">
                                        Shwe Yadanar Phyo
                                        <br>
                                        Company Limited.
                                    </h6>
                                </div>
                            </div>

                            <div class="text-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <div class="text">
                                        License No : 163/2023 <br>
                                        Thai Licence : 181/2022(Thai)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btm-box">
                            <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">
                                <span class="btn-title">
                                    Contact Us
                                </span>
                            </a>

                            <a href="{{ route('employer.index') }}" class="theme-btn btn-style-one">
                                <span class="btn-title">
                                    Employer Form
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center">
                    <span class="sub-title">
                        Company Information
                    </span>
                    <h2>Company Registration <span class="color3">Certificate</span></h2>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 300px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 300px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/3.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 300px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/4.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 300px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="why-choose-us pt-0">
        <br>
        <div class="bg bg-pattern-1"></div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">countries you can visit</span>
                <h2>Few reasons to choose <br>our <span class="color3">company</span></h2>
            </div>

            <div class="row">
                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <i class="icon flaticon-interview"></i>
                        <span class="cat" style="fontext-transform: capitalize !important;">Shwe Yadanar Phyo</span>
                        <h6 class="title"><a href="javascript::void(0)">Direct Interviews</a></h6>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-low-cost"></i>
                            <span class="cat" style="fontext-transform: capitalize !important;">Shwe Yadanar
                                Phyo</span>
                            <h6 class="title"><a href="javascript::void(0)">Cost Effective</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-loyalty"></i>
                            <span class="cat" style="fontext-transform: capitalize !important;">Shwe Yadanar
                                Phyo</span>
                            <h6 class="title"><a href="javascript::void(0)">Trusted Customers</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-online-support"></i>
                            <span class="cat" style="fontext-transform: capitalize !important;">Shwe Yadanar
                                Phyo</span>
                            <h6 class="title"><a href="javascript::void(0)">Support Team</a></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-text">
                IF YOU HAVE ANY QUESTIONS, COMMENTS, WE'RE HERE TO HELP.
                <a href="{{ route('contact.index') }}" class="theme-btn btn-style-two">
                    Contact
                </a>
            </div>
        </div>
    </section>

    <section class="process-section">
        <div class="dotted-map"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Our Company Statement
                </span>
                <h2>
                    Our Vision, Mission
                    <span class="color3">& Values</span>
                </h2>
            </div>

            <div class="row">
                <!-- Process block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-form"></i>
                            <span class="count">01</span>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h6 class="title">
                                    Our Vision
                                </h6>
                                <div class="text" style="text-align: justify">
                                    To be a leading overseas employment agency, connecting global talent with exceptional
                                    opportunities abroad, and making a positive impact on individuals and societies
                                    worldwide.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-documents"></i>
                            <span class="count">02</span>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h6 class="title">
                                    Our Mission
                                </h6>
                                <div class="text" style="text-align: justify">
                                    Providing reliable overseas employment services and fostering cultural exchange for
                                    international placement.

                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process block Two  -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-visa-3"></i>
                            <span class="count">03</span>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h6 class="title">
                                    Our Value
                                </h6>
                                <div class="text" style="text-align: justify">
                                    Integrity, Excellence, Trust, Diversity and Inclusion, Responsiveness, Social
                                    Responsibility.

                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-three pull-down">
        <div class="bg bg-pattern-8"></div>
        <div class="auto-container">
            <div class="row">

                <div class="sec-title">
                    <span class="sub-title">about the company</span>
                    <h2>Meet Professional <span class="color3">Team</span></h2>
                    <div class="text" style="text-align: justify">
                        Our overseas employment agency consists of a skilled team dedicated to connecting talented
                        individuals with international job opportunities. We have a deep understanding of global markets,
                        immigration laws, and visa processes. Our extensive network of contacts allows us to offer a wide
                        range of employment opportunities in various sectors. We prioritize transparency, ethical practices,
                        and open communication, providing personalized guidance and support to job seekers. Our commitment
                        to excellence ensures successful placements and long-term relationships with clients.
                    </div>
                </div>

                @foreach ($teams as $team)
                    <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="border-radius: 30px 0 30px 0; width: 100%; height: 290px; background-size: center; object-fit: cover;">
                                </figure>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="info-box">
                                <span class="designation">
                                    {{ $team->position ?? '' }}
                                </span>
                                <h4 class="name">
                                    {{ $team->name ?? '' }}
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="gallery-section pt-0">
        <div class="large-container">
            <div class="carousel-outer">
                <div class="title-box">
                    <div class="inner">
                        <span class="sub-title">
                            Gallery & Activities
                        </span>
                        <h2 class="title">Checkout <br>our photo<br> gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="auto-container">
            <div class="row">
                @foreach ($activities as $activity)
                    <div class="col-md-12">
                        <p style="font-size: 20px;">
                            {{ $activity->title ?? '' }}
                        </p>
                    </div>
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="all mix pantry fruit col-lg-3 col-md-6 col-sm-12 mb-20">
                            <img data-enlargeable="" src="{{ $image }}" alt=""
                                style="border-radius: 30px 0 30px 0; width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #E5BB17; padding: 10px;">
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
