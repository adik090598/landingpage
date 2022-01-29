@extends('layouts.app-full')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/vacancies.css')}}">
@endsection
@section('content')

    <section>
        <div class="vacancies">
            <h1 class="vacancies-title">{{$data['block1_title']->text}}</h1>
        </div>
        <div class="vacancies-block"></div>
    </section>

    <section>
        <div class="find-job">
            <h1 class="find-job-title">
                {{$data['job_title']->text}}
            </h1>
            <div class="container">
                <div class="job-offers">
                    <div class="job-text">
                        <h4>{{$data['vacancy_1']->text}}</h4>
                    </div>
                    <div class="job-apply">
                        <button>
                            {{$data['vacancy_button']->text}}
                        </button>
                    </div>
                </div>
                <div class="job-offers">
                    <div class="job-text">
                        <h4>{{$data['vacancy_2']->text}}</h4>
                    </div>
                    <div class="job-apply">
                        <button>
                            {{$data['vacancy_button']->text}}
                        </button>
                    </div>
                </div>
                <div class="job-offers">
                    <div class="job-text">
                        <h4>{{$data['vacancy_3']->text}}</h4>
                    </div>
                    <div class="job-apply">
                        <button>
                            {{$data['vacancy_button']->text}}
                        </button>
                    </div>
                </div>
                <div class="job-offers">
                    <div class="job-text">
                        <h4>{{$data['vacancy_4']->text}}</h4>
                    </div>
                    <div class="job-apply">
                        <button>
                            {{$data['vacancy_button']->text}}
                        </button>
                    </div>
                </div>
                <div class="job-offers">
                    <div class="job-text">
                        <h4>{{$data['vacancy_5']->text}}</h4>
                    </div>
                    <div class="job-apply">
                        <button>
                            {{$data['vacancy_button']->text}}
                        </button>
                    </div>
                </div>
                <div class="job-offers">
                    <div class="job-text">
                        <h4>{{$data['vacancy_6']->text}}</h4>
                    </div>
                    <div class="job-apply">
                        <button>
                            {{$data['vacancy_button']->text}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
