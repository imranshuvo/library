
@include('partials.header')

    <div class="relative flex items-top justify-items-start min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-start py-6">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>

            <div class="flex justify-center mt-4 flex-grow w-2/3 pl-6 lg:pr-8 mx-auto">
                <div class="w-full min-w-0 lg:px-6 xl:w-full xl:px-12">
                    <div class="relative">
                        <form action="" method="get">
                            <input type="text" name="search" id="search" placeholder="Search books.." class="w-full flex pt-6 pb-6 pl-10 pr-6">
                            <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
                                <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')