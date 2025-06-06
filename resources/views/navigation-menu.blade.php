<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    
                    <!-- ADDED: Manage Items Link -->
                    <x-nav-link href="{{ route('items.index') }}" :active="request()->routeIs('items.index')">
                        {{ __('Manage Items') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- ... rest of desktop menu ... -->
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <!-- ADDED: Manage Items Link (Mobile) -->
            <x-responsive-nav-link href="{{ route('items.index') }}" :active="request()->routeIs('items.index')">
                {{ __('Manage Items') }}
            </x-responsive-nav-link>
        </div>

        <!-- ... rest of mobile menu ... -->
    </div>
</nav>