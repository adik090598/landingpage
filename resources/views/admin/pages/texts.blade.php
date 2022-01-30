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


        <!-- Create modal -->
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

        <!-- Change modal -->
        <div class="modal fade" id="editTextModal" tabindex="-1" role="dialog" aria-labelledby="editTextModaltitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Изменить текст</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <input type="text" id="id_change" class="form-control" name="id" hidden/>
                            <div>
                                <label for="code">Код</label>
                                <input type="text" id="code_change" class="form-control" name="code"/>
                            </div>
                            <div>
                                <label for="ru">Русский</label>
                                <textarea type="text" id="ru_change" class="form-control" name="ru">
                                </textarea>
                            </div>
                            <div>
                                <label for="en">Англисский</label>
                                <textarea type="text" id="en_change" class="form-control" name="en">
                                </textarea>
                            </div>
                        </form
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="button" id="changeText" class="btn btn-primary">Изменить</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete modal -->
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Удалить текст</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Вы точно хотите удалить текст?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Удалить</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
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

        $(document).on('click', '#changeText', function (e) {
            $.ajax({
                url: '{{ route('text.change') }}',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    page: $('#page_id').val(),
                    code: $('#code_change').val(),
                    id: $('#id_change').val(),
                    ru: $('#ru_change').val(),
                    en: $('#en_change').val()},
                dataType: 'JSON',
                success: function (data) {
                    $('#editTextModal').modal('toggle');
                    loadTexts();
                    clearChangeForm();
                },
                error: function (msg) {
                    console.log('Ошибка при изменении');
                }
            });
        });

        function clearCreateForm() {
            document.getElementById("code").reset();
            document.getElementById("ru").reset();
            document.getElementById("en").reset();
        }

        function clearChangeForm() {
            document.getElementById("id_change").reset();
            document.getElementById("code_change").reset();
            document.getElementById("ru_change").reset();
            document.getElementById("en_change").reset();
        }

        function loadTexts() {
            $('.table-body').empty();
            $.ajax({
                url: '{{ route('page.texts') }}',
                type: "get",
                data: {page: $('#page_id').val()},
                success: function (data) {
                    for (var i = 0; i < data.length; i++) {
                        $('.table-body').append('<tr>' +
                            '<th scope="row">' + data[i].id + '</th> ' +
                            '<td>' + data[i].code + '</td> ' +
                            '<td>' + data[i].ru + '</td> ' +
                            '<td>' + data[i].en + '</td> ' +
                            '<td>' +
                            '<button type="button" class="btn btn-primary" onclick="changeText(' + data[i].id + ',\'' + data[i].code + '\',\'' + data[i].ru + '\',\'' + data[i].en + '\')">' +
                            'Изменить' +
                            '</button></td> ' +
                            '<td>' +
                            '<button type="button" class="btn btn-danger" onclick="deleteText(' + data[i].id + ')">' +
                            'Удалить' +
                            '</button></td> ' +
                            '</tr>');
                    }
                },
                error: function (msg) {
                    console.log('Ошибка');
                }
            });
        }

        function changeText(id, code, ru, en) {
            $('#code_change').val(code);
            $('#id_change').val(id);
            $('#ru_change').val(ru);
            $('#en_change').val(en);
            $('#editTextModal').modal('toggle');
        };

        function deleteText(id){
            $.ajax({
                url: '{{ route('text.delete') }}',
                type: 'GET',
                data: {
                    id: id
                },
                dataType: 'JSON',
                // beforeSend:function(){
                //     return confirm("Вы точно хотите удалить текст?");
                // },
                success: function (data) {
                   loadTexts();
                },
                error: function (msg) {
                    console.log('Ошибка при удалении');
                }
            });
        }

        $('document').ready(function()
        {
            $('textarea').each(function(){
                    $(this).val($(this).val().trim());
                }
            );
        });
    </script>
@endsection
