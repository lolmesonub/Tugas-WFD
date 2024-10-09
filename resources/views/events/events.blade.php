@extends("base")

@section("content")
    <nav class="bg-white border-b-2 border-black">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4 justify-center">
            <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-black md:hover:bg-transparent md:border-0 md:p-0 md:w-auto">Master Data
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y rounded-lg shadow w-44 border-2 border-black">
                        <ul class="py-2 text-sm text-black" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Master Event Category</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Master Organizer</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Master Event</a>
                        </li>
                        </ul>
                    </div>
                </li>
                <li>
                <a href="#" class="block py-2 px-3 text-black md:p-0" aria-current="page">Events</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container p-5">
        <h1 class="font-bold mb-3">Events in Surabaya</h1>
        <div class="flex flex-warp -mx-3 grid-cols-3">
            @foreach ($events as $event )
            <div class="px-3">
                <a href="{{ route('events.show', $event->id) }}">
                    <div class="border rounded-lg shadow-lg">
                        <img class="rounded-t-lg" src="https://i.pinimg.com/736x/3b/75/b3/3b75b3a21cb4fbca4b8f3987227af80a.jpg" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 tracking-tight text-black">{{ $event->title }}</h5>
                            <h5 class="font-bold text-black">{{ $event->date }} {{ $event->start_time }}</h5>
                            <h5 class="text-black">{{ $event->venue }}</h5>
                            <h5 class="mt-5">Free</h5>
                            <h5>Organizer: {{ $event->organizer->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
