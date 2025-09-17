<!-- Doctors Section -->
<section id="doctors" class="py-16 bg-gradient-to-br from-gray-50 via-white to-teal-50/30 relative overflow-hidden background-pattern" style="font-family: 'Quicksand', sans-serif;">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-32 h-32 bg-teal-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-blue-500 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-emerald-500 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-1 bg-gradient-to-r from-teal-500 to-emerald-500 rounded-full mb-6 shadow-lg"></div>
            <h2 class="text-5xl md:text-6xl font-bold mb-6 doctor-title">
                Meet Our <span class="doctor-title-accent">Expert Doctors</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed font-medium">
                Our team of highly qualified and experienced medical professionals
                is dedicated to providing you with the best possible care.
            </p>
        </div>

        <!-- Doctors Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
            @foreach($doctors as $doctor)
            <div class="group">
                <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-700 transform hover:-translate-y-4 hover:scale-105 border border-gray-100 h-full flex flex-col">
                    <!-- Doctor Image -->
                    <div class="h-64 relative overflow-hidden flex-shrink-0">
                        <img src="{{ $doctor['image'] }}"
                             alt="{{ $doctor['name'] }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">

                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                        <!-- Hover Overlay -->
                        <a href="{{ route('doctor.profile', $doctor['id']) }}" class="absolute inset-0 bg-gradient-to-t from-teal-600/90 via-teal-600/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <p class="text-lg font-semibold mb-2">View Profile</p>
                                <p class="text-sm opacity-90">Learn more about Dr. {{ explode(' ', $doctor['name'])[1] ?? 'the doctor' }}</p>
                            </div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300 whitespace-nowrap overflow-hidden text-ellipsis">
                            {{ $doctor['name'] }}
                        </h3>
                        <p class="text-teal-600 font-semibold text-lg mb-4">
                            {{ $doctor['specialty'] }}
                        </p>

                        <!-- Experience -->
                        <div class="flex items-center mb-6">
                            <div class="flex items-center text-gray-600">
                                <span class="text-sm">{{ $doctor['experience'] }} Experience</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-auto">
                            <a href="{{ route('doctor.profile', $doctor['id']) }}" class="flex items-center text-teal-600 text-sm font-semibold group-hover:text-teal-700 transition-colors duration-300 hover:underline relative z-10">
                                <span>View Profile</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <button onclick="openAppointmentModal()" class="w-8 h-8 rounded-full flex items-center justify-center text-white text-xs font-bold bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-600 hover:to-emerald-600 transition-all duration-300 relative z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View All Doctors Button -->
        <div class="text-center mt-8">
            <a href="{{ route('all.doctors') }}" class="view-all-button group inline-flex items-center justify-center px-10 py-5 text-teal-600 font-bold text-xl rounded-2xl">
                <span>View All Doctors</span>
                <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
