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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTextModal">
                                    Добавить
                                </button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </header>

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
            <tbody class="table-body">
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="addTextModal" tabindex="-1" role="dialog" aria-labelledby="addTextModaltitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Добавить текст</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <label for="code">Код</label>
                                <input type="text" id="code" class="form-control" name="code"/>
                            </div>
                            <div>
                                <label for="ru">Русский</label>
                                <textarea type="text" id="ru" class="form-control" name="ru">
                                </textarea>
                            </div>
                            <div>
                                <label for="en">Англисский</label>
                                <textarea type="text" id="en" class="form-control" name="en">
                                </textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="button" id="createText" class="btn btn-primary">Создать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script text>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $(document).on('change', '#page_id', function (e) {
                loadTexts();
            });

            $(document).on('click', '#createText', function (e) {
                console.log("create click")
                $.ajax({
                    url: '{{ route('text.create') }}',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        page: $('#page_id').val(),
                        code: $('#code').val(),
                        ru: $('#ru').val(),
                        en: $('#en').val()},
                    dataType: 'JSON',
                    success: function (data) {
                        $('#addTextModal').modal('toggle');
                        loadTexts();
                        clearCreateForm();
                    },
                    error: function (msg) {
                        console.log('Ошибка при создании');
                    }
                });
            });

            function clearCreateForm() {
                $('#code').empty();
                $('#ru').empty();
                $('#en').empty();
            }
            function loadTexts() {
                $('.table-body').empty();
                $.ajax({
                    url: '{{ route('page.texts') }}',
                    type: "get",
                    data: {page: $('#page_id').val()},
                    success: function (data) {
                        console.log("success");
                        for (var i = 0; i < data.length; i++) {
                            $('.table-body').append('<tr>' +
                                '<th scope="row">' + data[i].id + '</th> ' +
                                '<td>' + data[i].code + '</td> ' +
                                '<td>' + data[i].ru + '</td> ' +
                                '<td>' + data[i].en + '</td> ' +
                                '<td>' + data[i].id + '</td> ' +
                                '<td>' + data[i].id + '</td> ' +
                                '</tr>');
                        }
                    },
                    error: function (msg) {
                        console.log('Ошибка');
                    }
                });
            }
        });
    </script>
@endsection
