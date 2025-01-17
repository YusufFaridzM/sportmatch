<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>

<nav x-data="{ open: false, userMenuOpen: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 fixed top-0 left-0 w-full z-10">
    <!-- Container -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="text-2xl font-bold text-accent">
                    Sportmatch
                </a>
            </div>

            <!-- Navigation Links (Desktop) -->
            <div class="hidden sm:flex space-x-8">
                <a href="/dashboard" class="text-gray-500 hover:text-accent">Home</a>
                <a href="#feature" class="text-gray-500 hover:text-accent">Feature</a>
                <a href="/sport" class="text-gray-500 hover:text-accent">Sport</a>
                <a href="#about" class="text-gray-500 hover:text-accent">About</a>
            </div>

            <!-- User Profile Dropdown (Desktop) -->
            <div class="hidden sm:flex sm:items-center">
                <div class="relative">
                    <!-- User Name (Trigger) -->
                    <button @click="userMenuOpen = !userMenuOpen"
                        class="font-medium text-gray-800 dark:text-gray-200 focus:outline-none">
                        {{ Auth::user()->name }}
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="userMenuOpen" 
                        @click.away="userMenuOpen = false"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-md shadow-lg py-2">
                        <!-- Profile Link -->
                        <a href="{{ route('profile.edit') }}" 
                            class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                            Profile
                        </a>
                        <!-- Logout Form -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" 
                                class="block w-full text-left px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#home" class="block text-gray-500 hover:text-accent">Home</a>
            <a href="#feature" class="block text-gray-500 hover:text-accent">Feature</a>
            <a href="#sport" class="block text-gray-500 hover:text-accent">Sport</a>
            <a href="#about" class="block text-gray-500 hover:text-accent">About</a>
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                    {{ Auth::user()->name }}
                </div>
                <div class="font-medium text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" 
                    class="block text-gray-500 hover:text-accent">
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                        class="block text-gray-500 hover:text-accent">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Additional Styles -->
<style>
    :root {
        --primary-bg: #EFF6E0;
        --secondary: #AEC3B0;
        --accent: #598392;
        --contrast: #124559;
        --dark: #01161E;
    }

    nav {
        background-color: var(--primary-bg);
    }

    nav a {
        transition: color 0.3s ease-in-out;
    }

    nav a:hover {
        color: var(--accent);
    }

    nav .text-accent {
        color: var(--accent);
    }
</style>
