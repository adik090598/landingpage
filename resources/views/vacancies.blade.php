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
    </section>

    <section>
        <div class="find-job">
            <h1 class="find-job-title">
                Find the best jobs
            </h1>
            <div class="container">
                <div class="row">

                        <div class="col-md-9">
                            <a href="">Senior Infrastructure Architect - Remote |LATAM</a>
                        </div>
                        <div class="col-md-3">
                            <a href="">Apply</a>
                        </div>

                </div>
            </div>
        </div>
    </section>

@endsection
