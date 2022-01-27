@extends('layouts.app-admin')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
@endsection
@section('content')
    <div id="content">
        @if($texts)
            @foreach($texts as $text)
                <div class="card">
                    <div class="card-header">
                        Welcome
                    </div>
                    <div class="card-body">
                        <div class="">
                            <input class="form-control" name="code" value="{{$text->code}}">
                        </div>
                        <div class="">
                            <textarea class="form-control" name="en" id="" cols="30" rows="10">{{$text->en}}</textarea>
                        </div>
                        <div class="">
                            <textarea  class="form-control" name="ru" id="" cols="30" rows="10">{{$text->ru}}</textarea>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
