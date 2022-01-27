<nav>
    <ul class="d-none d-md-block">
        <li><a class="nav-a active" href="/">Home</a></li>
        <li hidden><a class="nav-a" href="/products">Products</a></li>
        <li><a class="nav-a" href="/outsourcing">IT Outsourcing Services</a></li>
        <li><a class="nav-a" href="/about">About us</a></li>
        <li><a class="nav-a" href="/vacancies">Vacancies</a></li>
        <li><a class="nav-a" href="{{route('locale', ['locale'=>'en'])}}">Eng</a></li>
        <li><a class="nav-a" href="{{route('locale', ['locale'=>'ru'])}}">Rus</a></li>
    </ul>
</nav>

@section('scripts')
    <script>
        var topper = $('nav').offset().top;

        window.onscroll = function() { scroller() };

        // sticky function
        function scroller() {
            if($(window).scrollTop() > topper) {
                console.log("if");
                $('.nav-a').addClass('fixed');
            }
            else if($(window).scrollTop() == topper)  {
                console.log("else");
                $('.nav-a').removeClass('fixed');
            }
        }
    </script>
@endsection
