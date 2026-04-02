<header class="bg-indigo-700 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">
            <a href="{{ route('home') }}">Job Dispatcher</a>
        </h1>
        <div class="flex items-center gap-4">
            @auth
                <div class="relative group">
                    <button class="profile-circle flex items-center justify-center text-black font-bold uppercase hover:bg-gray-200 transition-colors">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </button>

                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block border border-gray-200">
                        <div class="px-4 py-2 text-sm text-gray-700 font-semibold border-b border-gray-100">
                            {{ Auth::user()->name }}
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 transition-colors">Se déconnecter</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="hover:underline">Connexion</a>
            @endauth
        </div>
    </div>
</header>