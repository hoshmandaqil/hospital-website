<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Doctor Profile - Bayazid Rokhan Hospital</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=quicksand:300,400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <nav class="bg-white/80 backdrop-blur-sm shadow-lg fixed w-full top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center shadow-md" style="background-color: #14b8a6;">
                            <span class="text-white font-bold text-lg">B</span>
                        </div>
                        <span class="text-xl font-bold text-gray-900">Bayazid Rokhan Hospital</span>
                    </div>

                    <div class="flex items-center space-x-8">
                        <a href="/" class="text-gray-600 hover:text-teal-600 font-medium transition-colors duration-300">Home</a>
                        <a href="/#departments" class="text-gray-600 hover:text-teal-600 font-medium transition-colors duration-300">Departments</a>
                        <a href="/#doctors" class="text-gray-600 hover:text-teal-600 font-medium transition-colors duration-300">Doctors</a>
                        <a href="/#contact" class="text-gray-600 hover:text-teal-600 font-medium transition-colors duration-300">Contact</a>
                        <button onclick="openAppointmentModal()" class="bg-gradient-to-r from-teal-500 to-emerald-500 text-white px-6 py-2 rounded-lg font-semibold hover:from-teal-600 hover:to-emerald-600 transition-all duration-300">
                            Book Appointment
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="pt-16">
            @livewire('doctor-profile', ['doctorId' => $doctorId])
        </main>

        <!-- Footer -->
        <footer class="bg-gradient-to-br from-slate-900 via-gray-900 to-slate-800 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-3 mb-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center shadow-md" style="background-color: #14b8a6;">
                            <span class="text-white font-bold text-lg">B</span>
                        </div>
                        <span class="text-xl font-bold">Bayazid Rokhan Hospital</span>
                    </div>
                    <p class="text-gray-400 mb-4">Providing exceptional healthcare services with compassion and excellence.</p>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-gray-400 text-sm">Developed by</span>
                        <a href="https://linkedin.com/in/aqil-hoshmand" target="_blank" class="group flex items-center space-x-2 text-teal-400 hover:text-teal-300 transition-colors duration-300">
                            <span class="font-medium">Aqil Hoshmand</span>
                            <div class="w-5 h-5 bg-gradient-to-br from-teal-500 to-emerald-500 rounded flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <p class="text-gray-500 text-sm mt-4">© 2025 Bayazid Rokhan Hospital. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    @livewireScripts
</body>
</html>
