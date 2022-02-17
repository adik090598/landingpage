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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="cvForm" action="{{route('send.cv')}}" method="POST">
                                    @csrf
                                    <input type="hidden" id="vacancyId" >
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">ФИО:</label>
                                        <input type="text" name="name" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Описание:</label>
                                        <textarea class="form-control" name="description" id="message-text"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Резюме:</label>
                                        <input type="file" name="file" class="form-control" id="message-text">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" onclick="sunmitCV()" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>

                @if($vacancies)
                    @foreach($vacancies as $vacancy)
                        <div class="job-offers">
                            <div class="job-text">
                                <h4>{{$vacancy->name}}</h4>
                            </div>
                            <div class="job-apply">
                                <button type="button" class="openDialog btn btn-primary" data-toggle="modal"  data-id="{{$vacancy->id}}" data-target="#exampleModal" data-whatever="@mdo">{{$data['vacancy_button']->text}}</button>
                            </div>
                        </div>
                    @endforeach
                @else
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
                @endif
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).on("click", ".openDialog", function () {
            var vacancyId = $(this).data('id');
            $(".modal-body #vacancyId").val(vacancyId);
        });

        function sunmitCV() {
            $("#cvForm").submit();
        }
    </script>
@endsection
