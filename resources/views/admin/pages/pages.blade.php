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
                        <form action="{{route('page.create')}}" method="post">
                            <div class="input-group">
                                @csrf
                                <input type="text" name="name" class="form-control mr-1" placeholder="Название" aria-label="Название страницы" aria-describedby="button-addon2">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        @if($pages)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Изменить</th>
                    <th scope="col">Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                        <tr>
                            <th scope="row">{{$page->id}}</th>
                            <td>{{$page->name}}</td>
                            <td>{{$page->created_at}}</td>
                            <td>
                                <form action="{{route('page.delete', ['id'=>$page->id])}}" method="post">
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
