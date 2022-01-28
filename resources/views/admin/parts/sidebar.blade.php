<!-- Sidebar -->
<div id="sidebar">
    <header>
        <a href="#">DK Partners</a>
    </header>
    <ul class="nav d-flex flex-column align-items-center justify-content-center">
        <li>
            <a href="#">
                <i class="zmdi zmdi-view-dashboard"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('admin.pages')}}">
                <i class="zmdi zmdi-link"></i> Страницы
            </a>
        </li>
        <hr>
        <li>
            <a href="{{route('admin.texts')}}">
                <i class="zmdi zmdi-widgets"></i> Текста
            </a>
        </li>
        <li>
            <form action="{{route('logout')}}" METHOD="POST">
                @csrf
                <button type="submit">Выйти</button>
            </form>
        </li>
    </ul>
</div>
@section('scripts')

@endsection
