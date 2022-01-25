@extends('layouts.app-full')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/about.css')}}">
@endsection
@section('content')
    <section>
        <div class="our-firm">
            <div class="container">
                <div class="our-firm-inner">
                    <h1 class="our-firm-title">OUR FIRM</h1>
                    <h5 class="our-firm-text">Our values fuel your results. <br>
                        From strategy to execution, we create lasting impact through a focus on trust and results.</h5>
                </div>
            </div>
        </div>
        <div class="our-firm-image"></div>
    </section>

    <section>
        <div class="outsourcing-technology">
            <div class="container">
                <div class="outsourcing-technology-inner">
                    <h1 class="technology-title">The leading Outsourcing Technology Solutions company</h1>
                    <p class="technology-text">I founded Riviera Outsourcing to bring solutions to business leaders, and
                        technical and IT departments. We offer them, through our network of solid partners (companies
                        with 100 to 2000 employees), remote developers and engineers with attractive daily rates. </p>
                    <p class="technology-text">In terms of positioning, we believe that there is no incompatibility
                        between a CSR approach
                        favouring local providers, and occasional use of the expertise of international companies on
                        complex technologies and time-consuming tasks.</p>
                    <p class="technology-text">Finally, we have the ambition through our international network and our
                        partners to be the first
                        nearshore outsourcing agency in Europe. We aim to support startups, small and medium companies,
                        as well as large major groups.</p>
                    <p class="technology-text">We would love to put our expertise and experience to the benefit of your
                        organization for the
                        management of your research and development, engineering and it projects through our
                        international network of experts.”</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="values">
            <h3 class="values-title">Our Values</h3>
            <div class="line-block"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images//about/values-1.svg')}}" alt="">
                            <h5>Efficiency</h5>
                            <p>We constantly assess our systems and processes to learn how to get things done in the
                                smartest way for our clients and our business.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/about/values-2.svg')}}" alt="">
                            <h5>Teamwork & Collaboration</h5>
                            <p>We leverage our collective genius by empowering the talented individuals on our teams to
                                make decisions.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/about/values-3.svg')}}" alt="">
                            <h5>Client Oriented Creation</h5>
                            <p>We focus on our clients’ business drivers to deliver maximum value and exceed their
                                expectations.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/about/values-4.svg')}}" alt="">
                            <h5>Transparency</h5>
                            <p>By staying clear about our goals and motivations, we build trust with our clients and
                                teams—the foundation of great teamwork.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="about-banner">
            <div class="container">
                <h4>The Top 1% of IT Talent is the backbone of our business. We deliver end-to-end Technology Solutions created by the most highly vetted, expert level teams in the business.</h4>
            </div>
        </div>
    </section>

    <section>
        <div class="facts">
            <div class="container">
                <h2 class="facts-title">Facts about our company</h2>
                <div class="row">
                    <div class="facts-inner d-flex justify-content-around align-items-center">
                        <div class="facts-inner-text">
                            <ul>
                                <li>We use popular open source solutions - Hadoop</li>
                                <li>We determine the needs of all business units of the Customer</li>
                                <li>We compose business requirements for tasks</li>
                            </ul>
                        </div>
                        <div class="facts-inner-img">
                            <img src="{{asset('assets/images/about/business.png')}}" alt="">
                        </div>
                    </div>
                    <div class="facts-inner d-flex justify-content-around align-items-center">
                        <div class="facts-inner-img">
                            <img src="{{asset('assets/images/about/social-media.png')}}" alt="">
                        </div>
                        <div class="facts-inner-text">
                            <ul>
                                <li>We build processes of data quality control and description of Business Rules</li>
                                <li>We implement showcases and subject areas for reporting and analytics</li>
                                <li>We carry out industrial testing and installation of Data Quality routine checks</li>
                            </ul>
                        </div>
                    </div>
                    <div class="facts-inner d-flex justify-content-around align-items-center">
                        <div class="facts-inner-text">
                            <ul>
                                <li>We carry out analysis on the side of sources</li>
                                <li>We design storage of structured and unstructured data</li>
                                <li>We implement ETL processes</li>
                            </ul>
                        </div>
                        <div class="facts-inner-img">
                            <img src="{{asset('assets/images/about/letter.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
