{{--<ul class="nav__ul row">--}}
{{--    @foreach($items as $menu_item)--}}
{{--        <li class="nav__li col-auto">--}}
{{--            <a href="{{ $menu_item->link() }}" class="nav__link">{{ $menu_item->title }}</a>--}}
{{--        </li>--}}
{{--        <li class="nav__li col-auto">--}}
{{--            <a href="#" class="nav__link">Туристам</a>--}}
{{--            <ul class="nav__ul_level2">--}}
{{--                <li class="nav__li_level2">--}}
{{--                    <a href="#">Достопримечательности</a>--}}
{{--                </li>--}}
{{--                <li class="nav__li_level2">--}}
{{--                    <a href="#">Туры</a>--}}
{{--                </li>--}}
{{--                <li class="nav__li_level2">--}}
{{--                    <a href="#">Гастрономия</a>--}}
{{--                </li>--}}
{{--                <li class="nav__li_level2">--}}
{{--                    <a href="#">Где остановимся</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav__li col-auto ml-auto nav__li-last">--}}
{{--            <a href="#" class="nav__link">--}}
{{--											<span class="eye">--}}
{{--												<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--													<path d="M11.9997 4.90918C13.8052 4.90918 15.2725 6.37643 15.2725 8.1819C15.2725 9.98738 13.8052 11.4546 11.9997 11.4546C10.1943 11.4546 8.72701 9.98738 8.72701 8.1819C8.72701 6.37643 10.1943 4.90918 11.9997 4.90918Z" fill="white"/>--}}
{{--													<path d="M12 0C17.4545 0 22.1127 3.3927 24 8.18182C22.1127 12.9709 17.4545 16.3636 12 16.3636C6.53999 16.3636 1.88724 12.9709 -5.14984e-05 8.18182C1.88724 3.3927 6.53999 0 12 0ZM12 13.6363C15.0109 13.6363 17.4545 11.1927 17.4545 8.18177C17.4545 5.17086 15.0109 2.72726 12 2.72726C8.98906 2.72726 6.54541 5.17091 6.54541 8.18182C6.54541 11.1927 8.98906 13.6363 12 13.6363Z" fill="white"/>--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    @endforeach--}}

{{--</ul>--}}
<ul class="nav__ul row">
    <li class="nav__li col-auto">
        <a href="/" class="nav__link">Главная</a>
    </li>
    <li class="nav__li col-auto">
        <a href="/about" class="nav__link">О Карелии</a>
    </li>
    <li class="nav__li col-auto">
        <a href="#" class="nav__link">Туристам</a>
        <ul class="nav__ul_level2">
            <li class="nav__li_level2">
                <a href="/sights">Достопримечательности</a>
            </li>
            <li class="nav__li_level2">
                <a href="/tours">Туры</a>
            </li>
            <li class="nav__li_level2">
                <a href="/gastronomy">Гастрономия</a>
            </li>
            <li class="nav__li_level2">
                <a href="/placing">Где остановимся</a>
            </li>
        </ul>
    </li>
    <li class="nav__li col-auto">
        <a href="/routes" class="nav__link">Маршруты</a>
    </li>
    <li class="nav__li col-auto">
        <a href="#" class="nav__link">События</a>
        <ul class="nav__ul_level2">
            <li class="nav__li_level2">
                <a href="/activity">Мероприятия</a>
            </li>
            <li class="nav__li_level2">
                <a href="/news">Новости</a>
            </li>
        </ul>
    </li>
    <li class="nav__li col-auto">
        <a href="/news" class="nav__link">Новости</a>
    </li>
    <li class="nav__li col-auto">
        <a href="/impression" class="nav__link">Впечатления</a>
    </li>
    <li class="nav__li col-auto ml-auto nav__li-last">
        <a href="#" class="nav__link">
										<span class="eye">
											<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.9997 4.90918C13.8052 4.90918 15.2725 6.37643 15.2725 8.1819C15.2725 9.98738 13.8052 11.4546 11.9997 11.4546C10.1943 11.4546 8.72701 9.98738 8.72701 8.1819C8.72701 6.37643 10.1943 4.90918 11.9997 4.90918Z" fill="white"/>
												<path d="M12 0C17.4545 0 22.1127 3.3927 24 8.18182C22.1127 12.9709 17.4545 16.3636 12 16.3636C6.53999 16.3636 1.88724 12.9709 -5.14984e-05 8.18182C1.88724 3.3927 6.53999 0 12 0ZM12 13.6363C15.0109 13.6363 17.4545 11.1927 17.4545 8.18177C17.4545 5.17086 15.0109 2.72726 12 2.72726C8.98906 2.72726 6.54541 5.17091 6.54541 8.18182C6.54541 11.1927 8.98906 13.6363 12 13.6363Z" fill="white"/>
											</svg>
										</span>
        </a>
    </li>
</ul>



