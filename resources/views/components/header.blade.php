<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/header.css'])
</head>

<header class="main-header">
    <div class="div-header">
        <h1 class="header-title"><a href="{{ route('home') }}"> {{ __('header.name_app_header') }} </a></h1>
        <div>
            @auth
                <div class="relative group py-2">
                    <button class="profile-circle">{{ substr(Auth::user()->name, 0, 1) }}</button>
                    <div class="box-logout">
                        <div class="lang-selector">
                            <a href="{{ route('lang.switch', 'fr') }}"
                                class="lang-link {{ app()->getLocale() == 'fr' ? 'active' : '' }}">
                                FR
                            </a>
                            <span class="lang-separator">|</span>
                            <a href="{{ route('lang.switch', 'en') }}"
                                class="lang-link {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                                EN
                            </a>
                        </div>
                        <div class="box-text">{{ Auth::user()->name }}</div>
                        <a href="{{ route('profile.edit') }}" class="btn-profile"> {{ __('header.my_account_header') }} </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn-header"> {{ __('header.log_out_header') }} </button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</header>
