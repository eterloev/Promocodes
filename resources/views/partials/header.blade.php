<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py2 px-6 bg-white shadow sm:items-baseline">
    <div class="mb-2 sm:mb-0 inner">
        <a href="{{ route("home") }}" class="text-2x1 no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Сампл текст</a><br>
        <span class="text-xs text-grey-dark">Sample text</span>
    </div>

    <div class="sm:mb-0 self-center">
        @auth("web")
            <a href="/logout" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Logout</a>
        @endauth

        @guest("web")
            <a href="/login" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Login</a>
        @endguest
    </div>
</nav>
