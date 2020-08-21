<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">


        <a class="navbar-brand" href="/">
            {{config('app.name')}}
        </a>

        <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
            ><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a
                        href="/"
                        class="nav-link {{ setActive('/') }}"
                    >@lang('Home')</a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{route('schools.index')}}"
                        class="nav-link {{ setActive('schools.*') }}"
                    >@lang('School')</a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{route('students.index')}}"
                        class="nav-link {{ setActive('students.*') }}"
                    >@lang('Student')</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a
                            href="{{ route('logout') }}"
                            class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        >{{ __('Logout') }}
                        </a>
                    </li>
                @else
                    <li  class="nav-item">
                        <a
                            href="{{route('login')}}"
                            class="nav-link {{ setActive('login') }}"
                        >@lang('Login')</a>
                    </li>
                @endauth

            </ul>
        </div>

    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

