<nav>
    <ul class="d-none d-md-block">
        <li><a class="nav-a" href="/">{{app()->getLocale() == 'en' ? 'Home' : 'Главная'}}</a></li>
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

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
        <div>
            <div>
                <ul>
                    <li><a href="/">{{app()->getLocale() == 'en' ? 'Home' : 'Главная'}}</a></li>
                    <li><a href="/outsourcing">{{app()->getLocale() == 'en' ? 'IT Outsourcing Services' : 'Услуги ИТ-аутсорсинга'}}</a></li>
                    <li><a href="/about">{{app()->getLocale() == 'en' ? 'About us' : 'О нас'}}</a></li>
                    <li><a href="/vacancies">{{app()->getLocale() == 'en' ? 'Vacancies' : 'Вакансии'}}</a></li>
                    <li><a href="{{route('locale', ['locale'=>'en'])}}">
                            @if(app()->getLocale()=='en')
                                <p>Eng</p>
                            @else
                                Eng
                            @endif
                        </a>
                    </li>
                    <li><a href="{{route('locale', ['locale'=>'ru'])}}">
                            @if(app()->getLocale()=='ru')
                                <p>Ru</p>
                            @else
                                Ru
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

