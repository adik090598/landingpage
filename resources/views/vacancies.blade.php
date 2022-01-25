@extends('layouts.app-full')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/vacancies.css')}}">
@endsection
@section('content')

    <section>
        <div class="vacancies">
            <h1 class="vacancies-title">
                We have 15 openings! <br>
                Find one that suits your career!
            </h1>
        </div>
        <div class="vacancies-block"></div>
    </section>

    <section>
        <div class="find-job">
            <h1 class="find-job-title">
                Find the best jobs
            </h1>
            <div class="container">
                    <div class="job-offers">
                        <div class="job-text">
                            <h4>Senior Infrastructure Architect - Remote |LATAM</h4>
                        </div>
                        <div class="job-apply">
                            <button>
                                Apply
                                <img src="{{url('assets/images/vacancies/vector-ok.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="job-offers">
                        <div class="job-text">
                            <h4>Job Boards Specialists - Remote</h4>
                        </div>
                        <div class="job-apply">
                            <button>
                                Apply
                                <img src="{{url('assets/images/vacancies/vector-ok.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="job-offers">
                        <div class="job-text">
                            <h4>Product Manager - Remote</h4>
                        </div>
                        <div class="job-apply">
                            <button>
                                Apply
                                <img src="{{url('assets/images/vacancies/vector-ok.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="job-offers">
                        <div class="job-text">
                            <h4>QA Analyst Senior - Remote</h4>
                        </div>
                        <div class="job-apply">
                            <button>
                                Apply
                                <img src="{{url('assets/images/vacancies/vector-ok.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="job-offers">
                        <div class="job-text">
                            <h4>Social Media Manager - Remote</h4>
                        </div>
                        <div class="job-apply">
                            <button>
                                Apply
                                <img src="{{url('assets/images/vacancies/vector-ok.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="job-offers">
                        <div class="job-text">
                            <h4>Business Development Operations Analyst - Remote</h4>
                        </div>
                        <div class="job-apply">
                            <button>
                                Apply
                                <img src="{{url('assets/images/vacancies/vector-ok.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection
