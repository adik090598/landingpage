@extends('layouts.app-full')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/welcome.css')}}">
@endsection
@section('content')
    <header>
        <div class="container">
            <div class="header-inner">
                <h1 class="header-title">{{$data['header_title']->text}}</h1>
                <h5 class="header-text">{{$data['header_subtitle']->text}}</h5>
            </div>
        </div>
        <img class="scene d-none d-sm-none d-md-block" data-modifier="-15" src="{{asset('assets/images/welcome/solid-2.png')}}">
        <img class="scene d-none d-sm-none d-md-block" data-modifier="-25" src="{{asset('assets/images/welcome/solid-1.png')}}">
    </header>
    <section>
        <div class="container">
            <div class="mission-inner d-flex justify-content-between align-items-center">
                <div class="mission-inner-left col-12 col-md-5">
                    <h4 class="mission-title">{{ isset($data['mission_title']) ? $data['mission_title']->text : 'mission_title'}}</h4>
                    <p class="mission-text">{{ isset($data['mission_text']) ? $data['mission_text']->text : 'mission_text'}}</p>
                    <button>{{isset($data['button']) ? $data['button']->text : 'button'}}</button>
                </div>
                <div class="mission-inner-right d-none d-md-block col-6 col-md-5">
                    <img src="{{asset('assets/images/welcome/mission-image.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="we-do">
            <h2 class="we-do-title">{{$data['we-do-title']->text}}</h2>
            <div class="container">
                <div class="row">
                    <div class="we-do-box col-6 col-md-3 col-lg-3">
                        <img src="{{asset('assets/images/welcome/we-do-icon3.png')}}" alt="">
                        <h4>{{$data['we-do-box1-text']->text}}</h4>
                        <p>{{$data['we-do-box1-subtext']->text}}</p>
                        <a href="#">{{$data['button_2']->text}}</a>
                    </div>
                    <div class="we-do-box col-6 col-md-3 col-lg-3">
                        <img src="{{asset('assets/images/welcome/we-do-icon2.png')}}" alt="">
                        <h4>{{$data['we-do-box2-text']->text}}</h4>
                        <p>{{$data['we-do-box2-subtext']->text}}</p>
                        <a href="#">{{$data['button_2']->text}}</a>
                    </div>
                    <div class="we-do-box col-6 col-md-3 col-lg-3">
                        <img src="{{asset('assets/images/welcome/we-do-icon1.png')}}" alt="">
                        <h4>{{$data['we-do-box3-text']->text}}</h4>
                        <p>{{$data['we-do-box3-subtext']->text}}</p>
                        <a href="#">{{$data['button_2']->text}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="outsourcing-benefits">
            <h3 class="benefits-title">{{$data['benefits_title']->text}}</h3>
            <div class="container">
                <div class="benefits">
                    <div class="row">
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit1.png')}}" alt="">
                            <h5>{{$data['benefit_1']->text}}</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit2.png')}}" alt="">
                            <h5>{{$data['benefit_2']->text}}</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit3.png')}}" alt="">
                            <h5>{{$data['benefit_3']->text}}</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit4.png')}}" alt="">
                            <h5>{{$data['benefit_4']->text}}</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit5.png')}}" alt="">
                            <h5>{{$data['benefit_5']->text}}</h5>
                        </div>
                        <div class="benefit col-6 col-md-4">
                            <img src="{{asset('assets/images/welcome/benefit6.png')}}" alt="">
                            <h5>{{$data['benefit_6']->text}}</h5>
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
                        <h3 class="worldwide-title">{{$data['worldwide_title']->text}}</h3>
                        <p class="worldwide-text">{{$data['worldwide_subtilte']->text}}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="technologies">
            <h3 class="technologies-title">{{$data['technologies_title']->text}}</h3>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/kotlin.svg')}}" alt="">
                            <h5>Kotlin</h5>
                            <p>{{$data['technologies_box_1']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/cpp.svg')}}" alt="">
                            <h5>C++</h5>
                            <p>{{$data['technologies_box_2']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/java.svg')}}" alt="">
                            <h5>Java</h5>
                            <p>{{$data['technologies_box_3']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/mysql.svg')}}" alt="">
                            <h5>MySQL</h5>
                            <p>{{$data['technologies_box_4']->text}}</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/python.svg')}}" alt="">
                            <h5>Python</h5>
                            <p>{{$data['technologies_box_5']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/php.svg')}}" alt="">
                            <h5>PHP</h5>
                            <p>{{$data['technologies_box_6']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/csharp.svg')}}" alt="">
                            <h5>C#</h5>
                            <p>{{$data['technologies_box_7']->text}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="stack d-flex flex-column justify-center align-items-center ">
                            <img src="{{asset('assets/images/welcome/stacks/swift.svg')}}" alt="">
                            <h5>Swift</h5>
                            <p>{{$data['technologies_box_8']->text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://s.electerious.com/basicScroll/dist/basicScroll.min.js"></script>
    <script>
        document.querySelectorAll('.scene').forEach((elem) => {

            const modifier = elem.getAttribute('data-modifier')

            basicScroll.create({
                elem: elem,
                from: 0,
                to: 519,
                direct: true,
                props: {
                    '--translateY': {
                        from: '0',
                        to: `${ 10 * modifier }px`
                    }
                }
            }).start()
        })
    </script>
@endsection


