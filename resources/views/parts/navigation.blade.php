<nav>
    <img src="" class="logo" alt="logo">
    <ul>
        <li><a href="/products">Products</a></li>
        <li><a href="/outsource">IT Outsourcing Services</a></li>
        <li><a href="/about">About us</a></li>
        <li><a href="/vacancies">Vacancies</a></li>
        <li><a href="#">Eng</a></li>
        <li><a href="#">Rus</a></li>
    </ul>
</nav>

@section('scripts')
    <script type="text/javascript">
            $(".navbar-toggler").on('click', function (e) {
                $(this).toggleClass("navbar-toggler_active");
            })
    </script>
@endsection
