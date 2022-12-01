<section class="color-7">
    <nav class="cl-effect-21">
        @if (Route::has('login'))
        @auth
                <a style="text-decoration:none;" href="/">Головна</a>
                <a style="text-decoration:none;" href="/create">Додати оренду нерухомості</a>
                <a style="text-decoration:none;" href="/#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Вийти</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

        @else
            <a style="text-decoration:none;" href="/">Головна</a>
            <a style="text-decoration:none;" href="/register">Зареєструватися</a>
            <a style="text-decoration:none;" href="/login">Ввійти</a>
            <a style="text-decoration:none;" href="/about">Про сайт</a>
        @endauth
        @endif
    </nav>
</section>
