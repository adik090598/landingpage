@extends('layouts.app-full')
@section('content')
    <header>
        <div class="header-text">
            <h1>{{__('welcome.header_text')}}</h1>
            <h5>How can a website change the sales of your product?</h5>
        </div>
        <div class="stats d-flex">
            <div><h5>1000+<span>projects</span></h5></div>
            <div><h5>500+<span>client</span></h5></div>
            <div><h5>30+<span>countries</span></h5></div>
        </div>
    </header>

    <section>
        <div class="company-mission d-flex justify-content-between align-items-center">
            <div class="mission-text">
                <h3>Mission of the company</h3>
                <p>The mission of the IT Company is to build a quality and comprehensive technology infrastructure,
                    establish and maintain an effective operational environment, and deliver quality,
                    prompt, cost effective and reliable technology services.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="outsourcing-benefits">
            <h3 class="header-text">Outsourcing benefits</h3>
            <div class="benefits d-flex justify-content-between align-items-center flex-wrap">
                <div class="benefit-box">
                    <img src="{{url('assets/images/welcome/benefit1.png')}}" alt="Saving your budget">
                    <h5>Saving your budget</h5>
                </div>
                <div class="benefit-box">
                    <img src="{{url('assets/images/welcome/benefit1.png')}}" alt="Simplicity">
                    <h5>Simplicity</h5>
                </div>
                <div class="benefit-box">
                    <img src="{{url('assets/images/welcome/benefit1.png')}}" alt="Flexibility">
                    <h5>Flexibility</h5>
                </div>
                <div class="benefit-box">
                    <img src="{{url('assets/images/welcome/benefit1.png')}}" alt="Competitivness">
                    <h5>Competitivness</h5>
                </div>
                <div class="benefit-box">
                    <img src="{{url('assets/images/welcome/benefit1.png')}}" alt="Technolgical experience">
                    <h5>Technolgical experience</h5>
                </div>
                <div class="benefit-box">
                    <img src="{{url('assets/images/welcome/benefit1.png')}}" alt="Confedentiality">
                    <h5>Confedentiality</h5>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="experience d-flex justify-content-between align-items-center">
            <div class="experience-text">
                <h3>Worldwide network experience</h3>
                <p>The mission of the IT Company is to build a quality and comprehensive technology infrastructure,
                    establish and maintain an effective operational environment, and deliver quality,
                    prompt, cost effective and reliable technology services.</p>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <h2 class="header-lg-text">WHAT WE DO</h2>
        <div class="m-boxes d-flex justify-content-between align-items-center flex-wrap">
            <div class="box">
                <h3 class="header">RPA for business</h3>
                <h3 class="sub-header">Robotic process automation</h3>
                <h3 class="link">see how</h3>
            </div>
            <div class="box">
                <h3 class="header">Mobile lab</h3>
                <h3 class="sub-header">We built m-commerce apps</h3>
                <h3 class="link">see how</h3>
            </div>
            <div class="box">
                <h3 class="header">Testlab</h3>
                <h3 class="sub-header">Testing on-demand</h3>
                <h3 class="link">see how</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="technologies">
                <h4>Technologies & programing languages</h4>
                <p>Our developers have mastered all development technologies in their areas of expertise. Check out the list of all the programming technologies and languages provided by Riviera Outsourcing.
                    ? The most talented, experienced technology professionals available, on-demand to deliver end-to-end Technology Solutions for startups to Fortune 500 companies</p>
        </div>
    </section>

    <section>
        <div class="stacks d-flex align-items-center justify-content-center flex-wrap">
            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/kotlin.svg')}}" alt="Kotlin">
                <h5>Kotlin</h5>
                <p>Kotlin is a modern statically typed programming language used by over 60% of professional
                    Android developers that helps boost productivity, developer satisfaction, and code safety.</p>
            </div>
            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/cpp.svg')}}" alt="Kotlin">
                <h5>C++</h5>
                <p>C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming languag</p>
            </div>
            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/java.svg')}}" alt="Kotlin">
                <h5>Java</h5>
                <p>Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.</p>
            </div>
            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/mysql.svg')}}" alt="Kotlin">
                <h5>Mysql</h5>
                <p> Database Service is a fully managed database service to deploy cloud-native applications. HeatWave, an integrated, high-performance query accelerator.</p>
            </div>

            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/python.svg')}}" alt="Kotlin">
                <h5>Python</h5>
                <p>It is a free, open-source programming language with extensive support modules and community development, easy integration with web services, user-friendly data structures.</p>
            </div>
            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/php.svg')}}" alt="Kotlin">
                <h5>PHP</h5>
                <p>But developers can also use this language to write command-line scripts, and programmers with high-level PHP coding skills can also use it to develop desktop applications. </p>
            </div>
            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/csharp.svg')}}" alt="Kotlin">
                <h5>C#</h5>
                <p>But developers can also use this language to write command-line scripts, and programmers with high-level PHP coding skills can also use it to develop desktop applications. </p>
            </div>
            <div class="stack d-flex flex-column align-items-center justify-content-center">
                <img src="{{url('assets/images/welcome/stacks/swift.svg')}}" alt="Kotlin">
                <h5>Swift</h5>
                <p>An open-source programming language that is easy to learn, Swift supports almost everything from the programming language Objective-C. </p>
            </div>
        </div>
    </section>
    <section>
        <div class="last-header">
                <h3>We Are Digital Acceleration Experts.<br> <br>
                    We are a company Powered by Technology and Driven by Talent.</h3>
        </div>
        <div class="brands-box">
            <img src="{{url('assets/images/welcome/brands/brand1.png')}}" alt="brand1">
            <img src="{{url('assets/images/welcome/brands/brand2.png')}}" alt="brand1">
            <img src="{{url('assets/images/welcome/brands/brand3.png')}}" alt="brand1">
            <img src="{{url('assets/images/welcome/brands/brand4.png')}}" alt="brand1">
            <img src="{{url('assets/images/welcome/brands/brand5.png')}}" alt="brand1">
            <img src="{{url('assets/images/welcome/brands/brand6.png')}}" alt="brand1">
            <img src="{{url('assets/images/welcome/brands/brand7.png')}}" alt="brand1">
        </div>
    </section>
@endsection
