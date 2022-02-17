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
                    <div class="collapse navbar-collapse col-12 col-md-6" id="navbarExample01">
                        <form action="{{route('vacancy.create')}}" method="post">
                            <div class="col-12 d-flex flex-column">
                                @csrf
                                <input type="text" name="name" class="form-control m-1" placeholder="Название" aria-describedby="button-addon2">
                                <textarea type="text" name="description" class="form-control m-1" placeholder="Описание" aria-label="Название страницы" aria-describedby="button-addon2"></textarea>
                                <button class="btn btn-outline-primary m-1" type="submit" id="button-addon2">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        @if($vacancies)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Добавлен</th>
                    <th scope="col">Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vacancies as $vacancy)
                        <tr>
                            <th scope="row">{{$vacancy->id}}</th>
                            <td>{{$vacancy->name}}</td>
                            <td>{{$vacancy->created_at}}</td>
                            <td>
                                <form action="{{route('vacancy.delete', ['id'=>$vacancy->id])}}" method="post">
                                    <div class="input-group">
                                        @csrf
                                        <button class="btn btn-danger" type="submit" id="button-addon2">x</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
