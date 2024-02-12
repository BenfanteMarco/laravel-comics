<header>
    <div class="container">
        <div class="row py-3">
            <div class="col-4">
                <div class=" d-flex align-items-center h-100">
                    <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="header-list-container">

                    <ul>
                        <li> <a href="">CHARACTERS</a></li>

                        <li class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"> <a
                                href="{{ route('comics') }}">COMICS</a>
                        </li>

                        <li class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"> <a
                                href="{{ route('movies') }}">MOVIES</a>
                        </li>

                        <li> <a href="">TV</a></li>
                        <li><a href="">GAMES</a></li>
                        <li> <a href="">COLLECTIBLES</a></li>
                        <li><a href="">VIDEOS</a></li>
                        <li> <a href="">FANS</a></li>
                        <li> <a href="">NEWS</a></li>
                        <li><a href="">SHOP</a></li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

</header>