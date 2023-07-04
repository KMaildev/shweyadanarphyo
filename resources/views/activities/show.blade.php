@extends('layouts.main')
@section('title', 'Activities')
@section('content')

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
