<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- AOS Library -->

<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<nav class="shadow-md fixed w-full top-0 z-10">
    <div class="container mx-auto flex justify-between items-center px-4 py-3">
        <!-- Brand -->
        <a href="#" class="text-2xl font-bold" style="color: var(--primary-bg);">Sportmatch</a>
        
        <!-- Nav Links -->
        <ul class="hidden md:flex space-x-6">
            <li><a href="#home" class="text-white hover:text-accent">Home</a></li>
            <li><a href="#features" class="text-white hover:text-accent">Feature</a></li>
            <li><a href="/sport" class="text-white hover:text-accent">Sport</a></li>
            <li><a href="#about" class="text-white hover:text-accent">About</a></li>
        </ul>
        
        <!-- Authenticated User -->
        @auth
        <div class="hidden md:flex items-center space-x-4">
            <span class="text-white hover:text-accent">{{ Auth::user()->name }}</span>
            <x-dropdown align="right">
                <x-slot name="trigger">
                    <button class="flex items-center text-white hover:text-accent">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
        @endauth

        <!-- Guest Links -->
        @guest
        <div class="space-x-4">
            <a href="/login" class="btn-primary px-4 py-2 rounded-md">Login</a>
            <a href="/register" class="btn-secondary px-4 py-2 rounded-md">Register</a>
        </div>
        @endguest

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden">
    <ul class="flex flex-col space-y-2 px-4 py-4">
        <li><a href="#home" class="text-gray-700 hover:text-accent">Home</a></li>
        <li><a href="#features" class="text-gray-700 hover:text-accent">Feature</a></li>
        <li><a href="/sport" class="text-gray-700 hover:text-accent">Sport</a></li>
        <li><a href="#about" class="text-gray-700 hover:text-accent">About</a></li>
        @guest
        <li><a href="/login" class="text-gray-700">Login</a></li>
        <li><a href="/register" class="text-gray-700">Register</a></li>
        @endguest
        @auth
        <li><a href="{{ route('profile.edit') }}" class="text-gray-700">Profile</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-gray-700">Log Out</a>
            </form>
        </li>
        @endauth
    </ul>
</div>

