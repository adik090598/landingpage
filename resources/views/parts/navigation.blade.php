<nav>
    <ul class="d-none d-md-block">
        <li><a class="nav-a active" href="/">{{app()->getLocale() == 'en' ? 'Home' : 'Главная'}}</a></li>
        <li hidden><a class="nav-a" href="/products">{{app()->getLocale() == 'en' ? 'Products' : 'Продукты'}}</a></li>
        <li><a class="nav-a" href="/outsourcing">{{app()->getLocale() == 'en' ? 'IT Outsourcing Services' : 'Услуги ИТ-аутсорсинга'}}</a></li>
        <li><a class="nav-a" href="/about">{{app()->getLocale() == 'en' ? 'About us' : 'О нас'}}</a></li>
        <li><a class="nav-a" href="/vacancies">{{app()->getLocale() == 'en' ? 'Vacancies' : 'Вакансии'}}</a></li>
        <li><a class="nav-a" href="{{route('locale', ['locale'=>'en'])}}">
                @if(app()->getLocale()=='en')
                    <b>Eng</b>
                @else
                    Eng
                @endif
            </a>
        </li>
        <li><a class="nav-a" href="{{route('locale', ['locale'=>'ru'])}}">
                @if(app()->getLocale()=='ru')
                    <b>Ru</b>
                @else
                    Ru
                @endif
            </a>
        </li>
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
