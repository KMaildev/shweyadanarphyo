@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="about-section-three pull-down">
        <div class="bg bg-pattern-8"></div>
        <div class="auto-container">
            <div class="row">

                <div class="sec-title text-center">
                    <span class="sub-title">
                        We also have job offers in other countries.
                    </span>
                    <h2>We have international career
                        <br>
                        <span class="color3">opportunities all across Asia.</span>
                    </h2>
                </div>

                @foreach ($countries as $country)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="country-block">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ $country->photo ?? '' }}" alt="">
                                </div>
                                <a href="{{ route('job.show', $country->id) }}" class="theme-btn">
                                    {{ $country->country ?? '' }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="services-section-two pull-down">
        <div class="bg" style="background-image: url({{ asset('assets/images/background/2.jpg') }})"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="sub-title">What do we offer</span>
                <h2>
                    Jobs Available In
                    <span class="color3">
                        {{ $country->country ?? '' }}
                    </span>
                </h2>
            </div>

            <div class="row">
                @foreach ($jobs as $job)
                    <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ $job->photo }}" alt="" data-enlargeable=""
                                        style="border-radius: 30px 0 30px 0; width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h6 class="title">
                                    {{ $job->title ?? '' }}
                                </h6>
                                <div class="text">
                                    Job in {{ $job->country->country ?? '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
