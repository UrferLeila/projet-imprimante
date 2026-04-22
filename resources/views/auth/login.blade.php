<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/login/login.css', 'resources/js/app.js', ])
</head>
<body class="div-login">
    <x-header/> 
        <div class="flex flex-1 items-center justify-center">
            <div class="w-full max-w-xl text-center">
                <h2 class="title-login">{{ __('login.title_login') }}</h2>
                <x-auth-session-status :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex items-center mb-6">
                        <label class="label-login">{{ __('login.email_login') }} :</label>
                        <div class="w-2/3">
                            <input type="email" name="email" value="{{ old('email') }}" required class="input-login">
                            @error('email')
                                <p class="error-login">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center mb-6">
                        <label class="label-login">{{ __('login.password_login') }} :</label>
                        <div class="w-2/3">
                            <input type="password" name="password" required class="input-login">
                            @error('password')
                                <p class="error-login">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn-login">{{ __('login.bouton_login') }}</button>
                </form>
                <div class="mt-10">
                    <p>{{ __('login.no_account_login') }}</p>
                    <a href="{{ route('register') }}" class="href-login">{{ __('login.register_login') }}</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>