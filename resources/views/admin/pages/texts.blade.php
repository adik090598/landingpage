@extends('layouts.app-admin')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
@endsection
@section('content')
    <div id="content">
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarExample01"
                        aria-controls="navbarExample01"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <div class="navbar-nav me-auto m-2 mb-lg-0">
                            @if($pages)
                                <select id="page_id" class="form-select form-select-lg mr-3" aria-label="form-select-lg">
                                    <option selected>Выберите страницу</option>
                                    @foreach($pages as $page)
                                        <option value="{{$page->id}}">{{$page->name}}</option>
                                    @endforeach
                                </select>
                            @endif
                            <button type="button" class="btn btn-primary">Добавить</button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        @if($texts)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Код</th>
                    <th scope="col">Текст на русском</th>
                    <th scope="col">Текст на англисском</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($texts as $text)
                        <tr>
                            <th scope="row">{{$text->id}}</th>
                            <td>{{$text->code}}</td>
                            <td>{{$text->ru}}</td>
                            <td>{{$text->en}}</td>
                            <td>{{$text->id}}</td>
                            <td>{{$text->id}}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

@section('scripts')
    <script text>
        $(document).on('change', '#page_id', function (e) {
            // $('#school_id').empty();
            $.ajax({
                url: '{{ route('page.texts') }}',
                type: "get",
                data: {page:$('#page_id').val()},
                success: function (data) {
                    console.log("success");
                    for (var i = 0; i < data.length; i++) {
                        console.log(data[i].id + " " + data[i].ru);
                    }
                    refresh();
                },
                error: function (msg) {
                    console.log('Ошибка');
                }
            });
        });

        {{--$(document).on('change', '#region_id', function (e) {--}}

        {{--    // empty the select with previous cities if we have.--}}
        {{--    $('#school_id').empty();--}}

        {{--    $.ajax({--}}
        {{--        url: '{{ route('front.schools') }}',--}}
        {{--        type: "get",--}}
        {{--        data: {id:$('#region_id').val()},--}}
        {{--        success: function (data) {--}}
        {{--            $('#school_id').append("<option>Мектепті таңдаңыз</option>");--}}

        {{--            for (var i = 0; i < data.length; i++) {--}}
        {{--                $('#school_id').append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");--}}
        {{--            }--}}
        {{--            $('#school_id').append("<option id='other_school' value='0'>Басқа мектеп</option>");--}}
        {{--        },--}}
        {{--        error: function (msg) {--}}
        {{--            console.log('Ошибка');--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}
    </script>
@endsection
