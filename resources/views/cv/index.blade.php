@extends('layouts.main')
@section('content')
    <section class="contact-section">
        <div class="outer-box">
            <div class="bg bg-pattern-6"></div>
            <div class="auto-container">
                <div class="row">
                    <!-- Title Column -->
                    <div class="title-column col-lg-7 col-md-12 wow fadeInLRight">
                        <div class="inner-column" style="padding-right: 0px">
                            <div class="sec-title">
                                <span class="sub-title">
                                    Apply for your job!
                                </span>
                                <h2>Submit <span class="color3">CV</span></h2>
                                <div class="text">
                                    When it comes to choosing an employment agency, there are several factors to consider.
                                    Here are some reasons why you may choose us:
                                </div>
                            </div>

                            <ul class="list-style-two">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Expertise and Experience: We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition. Our expertise allows us to understand the
                                    intricacies of various industries and job markets, enabling us to find the best
                                    candidates for your organization.
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Time and Cost Savings: Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews. This saves you valuable time and resources
                                    that can be better utilized for other core business activities.
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Ongoing Support: Our relationship with you does not end once a candidate is hired. We
                                    provide ongoing support to ensure a smooth transition and integration for the new
                                    employee. Additionally, we offer post-placement follow-ups to address any concerns or
                                    issues that may arise.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="form-outer">
                                <div class="contact-form wow fadeInLeft">
                                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                                        enctype="multipart/form-data" id="create-form" novalidate="novalidate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Name*</label>
                                                    <input type="text" name="name" class="form-control "
                                                        value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control "
                                                        value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 py-3">
                                                <div class="form-group">
                                                    <label>Additional Note</label>
                                                    <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 py-3">
                                                <div class="form-group">
                                                    <label for="img" style="color: white">Select your CV to
                                                        upload</label>
                                                    <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                                        class="form-control-file" required>
                                                </div>
                                            </div>

                                            <div class="col-md-12 py-3">
                                                <button type="submit" class="theme-btn btn-style-one"
                                                    data-loading-text="Please wait...">
                                                    <span class="btn-title">
                                                        Submit
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
