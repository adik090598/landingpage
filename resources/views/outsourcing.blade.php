@extends('layouts.app-full')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/outsourcing.css')}}">
@endsection
@section('content')
    <header>
        <div class="container">
            <div class="header-inner">
                <h1 class="header-title">Our Services</h1>
                <h5 class="header-text">Creative and results-driven online marketing solutions for your business</h5>
            </div>
        </div>
    </header>
    <section>
        <div class="header-bottom"></div>

        <div class="outsourcing-services">
            <div class="container">
                <h3 class="outsourcing-services-title">IT Outsourcing Services</h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="service">
                            <h5>Web Development</h5>
                            <p>By outsourcing data analytics and other functions, companies can save plenty of resources.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service">
                            <h5>Mobile Development</h5>
                            <p>Big data is the set of technologies created to store, analyse and manage this bulk data.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service">
                            <h5>Platform Development</h5>
                            <p>RPA is a software technology that makes it easy to build, deploy, and manage software robots.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service">
                            <h5>Software Development</h5>
                            <p>CRM is the combination of practices, strategies and technologies that companies use to manage. </p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>
    <section hidden>
        <div class="container">
            <div class="data-science">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h2 class="data-science-title">Data Science</h2>
                        <h5 class="data-science-subtitle">EFFECTIVE IMPLEMENTATION OF ADVANCED ANALYTICS TOOLS</h5>
                        <p class="data-science-text">We offer a comprehensive solution - Data Lake: <br>
                            storage for structured and unstructured data, BI-system, Data Quality tools, RTDM tools for advanced analytics.
                            We help clients to collect, store, enrich, combine, structure and process data arrays.
                            Our solutions allow you to work effectively with information: building complex marketing and analytical reporting, promptly obtaining information and improving the quality of internal processes.</p>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <img src="{{asset('assets/images/outsourcing/data-science.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="outsourcing-banner">
            <div class="container">
                <h4>The Top 1% of IT Talent is the backbone of our business. We deliver end-to-end Technology Solutions created by the most highly vetted, expert level teams in the business.</h4>
            </div>
        </div>
    </section>

    <section>
        <div class="working-process">
            <div class="container">
                <h2 class="working-process-title">Our working process</h2>

                <div class="stepper d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex mb-1">
                        <div class="step">
                            <h5 class="step-title">Create your application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle py-2 px-3 text-white mb-1">1</div>
                            <div class="line h-100"></div>
                        </div>
                        <div  class="step invisible">
                            <h5 class="step-title">Clone application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                    </div>
                    <div class="d-flex mb-1">
                        <div class="step invisible">
                            <h5 class="step-title">Create your application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle py-2 px-3 text-white mb-1">2</div>
                            <div class="line h-100"></div>
                        </div>
                        <div  class="step">
                            <h5 class="step-title">Clone application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                    </div>
                    <div class="d-flex mb-1">
                        <div class="step">
                            <h5 class="step-title">Create your application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle py-2 px-3 text-white mb-1">3</div>
                            <div class="line h-100"></div>
                        </div>
                        <div  class="step invisible">
                            <h5 class="step-title">Clone application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                    </div>
                    <div class="d-flex mb-1">
                        <div class="step invisible">
                            <h5 class="step-title">Create your application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle py-2 px-3 text-white mb-1">4</div>
                        </div>
                        <div  class="step">
                            <h5 class="step-title">Clone application respository</h5>
                            <p class="lead step-text pb-3">Choose your website name & create repository</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
