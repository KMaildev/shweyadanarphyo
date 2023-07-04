@extends('layouts.main')
@section('title', 'Team')
@section('content')

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
@endsection
