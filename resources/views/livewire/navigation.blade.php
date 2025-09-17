<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center group-hover:scale-110 transition-all duration-300 shadow-md" style="background-color: #14b8a6;">
                        <span class="text-white font-bold text-xl">BR</span>
                    </div>
                    <span class="text-2xl font-bold group-hover:opacity-80 transition-all duration-300 text-gray-900">Bayazid Rokhan Hospital</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8" style="font-family: 'Quicksand', sans-serif;">
                    <a href="{{ route('home') }}" class="text-gray-700 px-4 py-2 text-sm font-medium transition-all duration-300 relative {{ request()->routeIs('home') ? 'text-teal-600' : 'hover:text-teal-600' }}">
                        Home
                        @if(request()->routeIs('home'))
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-teal-500 rounded-full"></div>
                        @endif
                    </a>
                    <a href="{{ route('about.us') }}" class="text-gray-700 px-4 py-2 text-sm font-medium transition-all duration-300 hover:text-teal-600">
                        About
                    </a>
                    <a href="#insights" class="text-gray-700 px-4 py-2 text-sm font-medium transition-all duration-300 hover:text-teal-600">
                        Insights
                    </a>
                    <a href="#doctors" class="text-gray-700 px-4 py-2 text-sm font-medium transition-all duration-300 hover:text-teal-600">
                        Doctors
                    </a>
                    <a href="#departments" class="text-gray-700 px-4 py-2 text-sm font-medium transition-all duration-300 hover:text-teal-600">
                        Departments
                    </a>
                    <a href="#services" class="text-gray-700 px-4 py-2 text-sm font-medium transition-all duration-300 hover:text-teal-600">
                        Service
                    </a>
                    <a href="#blog" class="text-gray-700 px-4 py-2 text-sm font-medium transition-all duration-300 hover:text-teal-600">
                        Blog
                    </a>
                </div>
            </div>

            <!-- CTA Button and Phone -->
            <div class="hidden md:flex items-center space-x-6">

                <div class="text-right">
                    <div class="text-sm font-semibold text-gray-900">0775054044</div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button"
                        wire:click="toggleMobileMenu"
                        class="inline-flex items-center justify-center p-3 rounded-2xl text-white focus:outline-none focus:ring-2 transition-all duration-300 shadow-lg"
                        style="background-color: #38a3a5; focus:ring-color: #2d8a8c;"
                        onmouseover="this.style.backgroundColor='#2d8a8c'" onmouseout="this.style.backgroundColor='#38a3a5'"
                        aria-controls="mobile-menu"
                        :aria-expanded="showMobileMenu">
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger icon -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    @if($showMobileMenu)
    <div class="md:hidden">
        <div class="px-4 pt-4 pb-6 space-y-2 bg-gradient-to-br from-gray-50 to-white border-t" style="border-color: #38a3a5;">
            <a href="{{ route('home') }}" class="block px-4 py-3 rounded-2xl text-base font-semibold transition-all duration-300 {{ request()->routeIs('home') ? 'shadow-md' : 'hover:bg-gray-100' }}" style="font-family: 'UI System', sans-serif; color: {{ request()->routeIs('home') ? '#38a3a5' : '#374151' }}; background-color: {{ request()->routeIs('home') ? '#e6f7f7' : 'transparent' }};">
                Home
            </a>
            <a href="#services" class="text-gray-600 block px-4 py-3 rounded-2xl text-base font-semibold transition-all duration-300 hover:bg-gray-100" style="font-family: 'UI System', sans-serif;" onmouseover="this.style.color='#38a3a5'" onmouseout="this.style.color='#374151'">
                Services
            </a>
            <a href="#doctors" class="text-gray-600 block px-4 py-3 rounded-2xl text-base font-semibold transition-all duration-300 hover:bg-gray-100" style="font-family: 'UI System', sans-serif;" onmouseover="this.style.color='#38a3a5'" onmouseout="this.style.color='#374151'">
                Doctors
            </a>
            <a href="{{ route('about.us') }}" class="text-gray-600 block px-4 py-3 rounded-2xl text-base font-semibold transition-all duration-300 hover:bg-gray-100" style="font-family: 'UI System', sans-serif;" onmouseover="this.style.color='#38a3a5'" onmouseout="this.style.color='#374151'">
                About
            </a>
            <a href="#contact" class="text-gray-600 block px-4 py-3 rounded-2xl text-base font-semibold transition-all duration-300 hover:bg-gray-100" style="font-family: 'UI System', sans-serif;" onmouseover="this.style.color='#38a3a5'" onmouseout="this.style.color='#374151'">
                Contact
            </a>
            <button onclick="openAppointmentModal()" class="text-white block px-4 py-4 rounded-2xl text-base font-bold mt-4 text-center transition-all duration-300 shadow-lg hover:shadow-xl w-full" style="font-family: 'UI System', sans-serif; background-color: #38a3a5;" onmouseover="this.style.backgroundColor='#2d8a8c'" onmouseout="this.style.backgroundColor='#38a3a5'">
                Book Appointment
            </button>
        </div>
    </div>
    @endif
</nav>
