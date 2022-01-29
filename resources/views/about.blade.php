@extends('layouts.app-full')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/about.css')}}">
@endsection
@section('content')
    <section>
        <div class="our-firm">
            <div class="container">
                <div class="our-firm-inner">
                    <h1 class="our-firm-title">{{$data['our_firm_title']->text}}</h1>
                    <h5 class="our-firm-text">{{$data['our_firm_subtitle']->text}}</h5>
                </div>
            </div>
        </div>
        <div class="our-firm-image"></div>
    </section>

    <section>
        <div class="outsourcing-technology">
            <div class="container">
                <div class="outsourcing-technology-inner">
                    <h1 class="technology-title">{{$data['outsourcing_technology_title']->text}}</h1>
                    <p class="technology-text">{{$data['outsourc_tech_text1']->text}}</p>
                    <p class="technology-text">{{$data['outsourc_tech_text2']->text}}</p>
                    <p class="technology-text">{{$data['outsourc_tech_text3']->text}}</p>
                    <p class="technology-text">{{$data['outsourc_tech_text4']->text}}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="values">
            <h3 class="values-title">{{$data['values_title']->text}}</h3>
            <div class="line-block"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/about/values-1.svg')}}" alt="">
                            <h5>{{$data['values_box1_text']->text}}</h5>
                            <p>{{$data['values_box1_subtext']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/about/values-2.svg')}}" alt="">
                            <h5>{{$data['values_box2_text']->text}}</h5>
                            <p>{{$data['values_box2_subtext']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/about/values-3.svg')}}" alt="">
                            <h5>{{$data['values_box3_text']->text}}</h5>
                            <p>{{$data['values_box3_subtext']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="values-block d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/about/values-4.svg')}}" alt="">
                            <h5>{{$data['values_box4_text']->text}}</h5>
                            <p>{{$data['values_box4_subtext']->text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="about-banner">
            <div class="container">
                <h4>{{$data['block_banner']->text}}</h4>
            </div>
        </div>
    </section>

    <section>
        <div class="facts">
            <div class="container">
                <h2 class="facts-title">{{$data['facts_title']->text}}</h2>
                <div class="row">
                    <div class="facts-inner d-flex justify-content-around align-items-center">
                        <div class="facts-inner-text">
                            <ul>
                                <li>{{$data['factsblock1_text1']->text}}</li>
                                <li>{{$data['factsblock1_text2']->text}}</li>
                                <li>{{$data['factsblock1_text3']->text}}</li>
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
                                <li>{{$data['factsblock2_text1']->text}}</li>
                                <li>{{$data['factsblock2_text2']->text}}</li>
                                <li>{{$data['factsblock2_text3']->text}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="facts-inner d-flex justify-content-around align-items-center">
                        <div class="facts-inner-text">
                            <ul>
                                <li>{{$data['factsblock3_text1']->text}}</li>
                                <li>{{$data['factsblock3_text2']->text}}</li>
                                <li>{{$data['factsblock3_text3']->text}}</li>
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
