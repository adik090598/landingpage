@extends('layouts.app-full')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/welcome.css')}}">
@endsection
@section('content')
    <header>
        <div class="container">
            <div class="header-inner">
                <h1 class="header-title">{{$data['header_title']->ru}}</h1>
                <h5 class="header-text">{{$data['header_subtitle']->ru}}</h5>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="mission-inner d-flex justify-content-between align-items-center">
                <div class="mission-inner-left col-12 col-md-5">
                    <h4 class="mission-title">Mission of the company</h4>
                    <p class="mission-text">The mission of the IT Company is to build a quality and comprehensive technology infrastructure, establish and maintain an effective operational environment, and deliver quality, prompt, cost effective and reliable technology services.</p>
                    <button>Read more</button>
                </div>
                <div class="mission-inner-right d-none d-sm-block col-6 col-md-5">
                    <img src="{{asset('assets/images/welcome/mission-image.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="we-do">
            <h2 class="we-do-title">What we do</h2>
            <div class="container">
                <div class="row">
                    <div class="we-do-box col-6 col-md-3 col-lg-3">
                        <img src="{{asset('assets/images/welcome/we-do-icon3.png')}}" alt="">
                        <h4>RPA for business</h4>
                        <p>ROBOTIC PROCESS AUTOMATION</p>
                        <a href="#">SEE HOW</a>
                    </div>
                    <div class="we-do-box col-6 col-md-3 col-lg-3">
                        <img src="{{asset('assets/images/welcome/we-do-icon2.png')}}" alt="">
                        <h4>Mobile lab</h4>
                        <p>WE BUILD E-COMMERCE APPS </p>
                        <a href="#">SEE HOW</a>
                    </div>
                    <div class="we-do-box col-6 col-md-3 col-lg-3">
                        <img src="{{asset('assets/images/welcome/we-do-icon1.png')}}" alt="">
                        <h4>Testlab</h4>
                        <p>TESTING ON DEMAND</p>
                        <a href="#">SEE HOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="outsourcing-benefits">
            <h3 class="benefits-title">OUTSOURCING BENEFITS</h3>
            <div class="container">
                <div class="benefits">
                    <div class="row">
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit1.png')}}" alt="">
                            <h5>Saving your budget</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit2.png')}}" alt="">
                            <h5>Simplicity</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit3.png')}}" alt="">
                            <h5>Flexibility</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit4.png')}}" alt="">
                            <h5>Competitevness</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit5.png')}}" alt="">
                            <h5>Technological experience</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit6.png')}}" alt="">
                            <h5>Confedentiality</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="worldwide">
            <div class="container">
                <div class="row">
                    <div class="worldwide-left d-none d-md-block col-md-6">
                        <img src="{{asset('assets/images/welcome/worldwide-map.png')}}" alt="">
                    </div>
                    <div class="worldwide-right col-md-6">
                        <h3 class="worldwide-title">Worldwide network experience</h3>
                        <p class="worldwide-text">Our engineers and developers are spread over 27 countries around the world, including: Ukraine, Belarus, Russia, Romania, Poland, Czech Republic, Bulgaria, France, Spain, Portugal, India, Vietnam,  Tunisia, Morocco, Madagascar, Brazil, Argentina, Colombia, Mexico…. This allows  competitive daily rates. They all speak perfect English, somes also speak other languages (Project Manager).</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="technologies">
            <h3 class="technologies-title">Technologies & programming languages</h3>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/kotlin.svg')}}" alt="">
                            <h5>Kotlin</h5>
                            <p>Kotlin is a modern statically typed programming language used by over 60% of professional
                                Android developers that helps boost productivity, developer satisfaction, and code
                                safety.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/cpp.svg')}}" alt="">
                            <h5>C++</h5>
                            <p>C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of
                                the C programming languag</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/java.svg')}}" alt="">
                            <h5>Java</h5>
                            <p>Java is a high-level, class-based, object-oriented programming language that is designed to
                                have as few implementation dependencies as possible.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/mysql.svg')}}" alt="">
                            <h5>MySQL</h5>
                            <p>Database Service is a fully managed database service to deploy cloud-native applications.
                                HeatWave, an integrated, high-performance query accelerator.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/python.svg')}}" alt="">
                            <h5>Python</h5>
                            <p>It is a free, open-source programming language with extensive support modules and community
                                development, easy integration with web services, user-friendly data structures.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/php.svg')}}" alt="">
                            <h5>PHP</h5>
                            <p>But developers can also use this language to write command-line scripts, and programmers with
                                high-level PHP coding skills can also use it to develop desktop applications. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/csharp.svg')}}" alt="">
                            <h5>C#</h5>
                            <p>But developers can also use this language to write command-line scripts, and programmers with
                                high-level PHP coding skills can also use it to develop desktop applications. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/swift.svg')}}" alt="">
                            <h5>Swift</h5>
                            <p>An open-source programming language that is easy to learn, Swift supports almost everything
                                from the programming language Objective-C. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
