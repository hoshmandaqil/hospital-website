<!-- Doctor Profile Page -->
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-teal-50/30" style="font-family: 'Quicksand', sans-serif;">
    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-32 h-32 bg-teal-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-blue-500 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Doctor Image & Basic Info -->
                <div class="lg:col-span-1">
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20">
                        <!-- Doctor Image -->
                        <div class="relative mb-6">
                            <img src="{{ $doctor['image'] }}"
                                 alt="{{ $doctor['name'] }}"
                                 class="w-48 h-48 rounded-3xl mx-auto object-cover shadow-xl">
                            <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Doctor Info -->
                        <div class="text-center mb-6">
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $doctor['name'] ?? 'Dr. Unknown' }}</h1>
                            <p class="text-xl text-teal-600 font-semibold mb-2">{{ $doctor['specialty'] ?? 'Specialist' }}</p>
                            <p class="text-gray-600 mb-4">{{ $doctor['department'] ?? 'General' }} Department</p>

                            <!-- Rating -->
                            <div class="flex items-center justify-center space-x-2 mb-4">
                                <div class="flex items-center">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endfor
                                </div>
                                <span class="text-lg font-semibold text-gray-900">{{ $doctor['rating'] ?? '5.0' }}</span>
                            </div>

                            <!-- Experience -->
                            <div class="bg-gradient-to-r from-teal-50 to-emerald-50 rounded-2xl p-4 mb-6">
                                <div class="text-2xl font-bold text-teal-600">{{ $doctor['experience'] ?? '10+ Years' }}</div>
                                <div class="text-sm text-gray-600">Experience</div>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="space-y-4 mb-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700">{{ $doctor['phone'] ?? '+93 775054044' }}</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700">{{ $doctor['email'] ?? 'doctor@bayazidrokhan.com' }}</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700">{{ $doctor['location'] ?? 'Main Hospital' }}</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-3">
                            <button wire:click="openBookingModal" class="w-full bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-600 hover:to-emerald-600 text-white font-bold py-4 px-6 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Book Appointment
                            </button>

                            <button wire:click="sendMessage" class="w-full bg-white/80 backdrop-blur-sm text-teal-600 font-bold py-4 px-6 rounded-2xl border-2 border-teal-600 hover:bg-gradient-to-r hover:from-teal-600 hover:to-emerald-600 hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                Send Message
                            </button>
                        </div>

                        <!-- Consultation Fee -->
                        <div class="mt-6 text-center">
                            <div class="text-2xl font-bold text-gray-900">${{ $doctor['consultationFee'] ?? '150' }}</div>
                            <div class="text-sm text-gray-600">Consultation Fee</div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Main Info Card -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20">
                        <!-- Bio Section -->
                        <div class="mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">About Dr. {{ explode(' ', $doctor['name'] ?? 'Unknown')[1] ?? 'Unknown' }}</h2>
                            <p class="text-lg text-gray-700 leading-relaxed mb-8">{{ $doctor['fullBio'] ?? 'No biography available.' }}</p>
                        </div>

                        <!-- Specializations -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Specializations</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                @foreach($specializations as $specialization)
                                <div class="flex items-center space-x-3 p-3 bg-gradient-to-r from-teal-50 to-emerald-50 rounded-xl">
                                    <div class="w-6 h-6 rounded-lg bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">{{ $specialization }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Education & Experience -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                            <!-- Education -->
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-4">Education</h3>
                                <div class="space-y-4">
                                    @foreach($education as $edu)
                                    <div class="border-l-4 border-teal-500 pl-4">
                                        <h4 class="font-bold text-gray-900">{{ $edu['degree'] }}</h4>
                                        <p class="text-teal-600 font-semibold text-sm">{{ $edu['institution'] }}</p>
                                        <p class="text-gray-600 text-sm">{{ $edu['year'] }} • {{ $edu['specialization'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Experience -->
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-4">Experience</h3>
                                <div class="space-y-4">
                                    @foreach($experience as $exp)
                                    <div class="border-l-4 border-blue-500 pl-4">
                                        <h4 class="font-bold text-gray-900">{{ $exp['position'] }}</h4>
                                        <p class="text-blue-600 font-semibold text-sm">{{ $exp['institution'] }}</p>
                                        <p class="text-gray-600 text-xs">{{ $exp['duration'] }}</p>
                                        <p class="text-gray-700 text-sm mt-1">{{ $exp['description'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Certifications -->
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Certifications</h3>
                            <div class="space-y-2">
                                @foreach($certifications as $cert)
                                <div class="flex items-center space-x-3">
                                    <div class="w-5 h-5 rounded-full bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 text-sm">{{ $cert }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Card -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Patient Reviews</h2>
                        <div class="space-y-6">
                            @foreach($reviews as $review)
                            <div class="border border-gray-200 rounded-2xl p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold text-lg">{{ substr($review['patient'], 0, 1) }}</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">{{ $review['patient'] }}</h3>
                                            <p class="text-sm text-gray-600">{{ $review['date'] }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg class="w-4 h-4 {{ $i < $review['rating'] ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="text-gray-700">{{ $review['comment'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    @if($showBookingModal)
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-3xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Book Appointment</h2>
                    <button wire:click="closeBookingModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Doctor Info -->
                <div class="bg-gradient-to-r from-teal-50 to-emerald-50 rounded-2xl p-4 mb-6">
                    <div class="flex items-center space-x-3">
                        <img src="{{ $doctor['image'] ?? 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80' }}" alt="{{ $doctor['name'] ?? 'Doctor' }}" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h3 class="font-bold text-gray-900">{{ $doctor['name'] ?? 'Dr. Unknown' }}</h3>
                            <p class="text-teal-600 font-semibold">{{ $doctor['specialty'] ?? 'Specialist' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Booking Form -->
                <form wire:submit.prevent="bookAppointment" class="space-y-4">
                    <!-- Patient Name -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <input type="text" wire:model="patientName"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                               placeholder="Enter your full name">
                        @error('patientName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email" wire:model="patientEmail"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                               placeholder="Enter your email">
                        @error('patientEmail') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" wire:model="patientPhone"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                               placeholder="Enter your phone number">
                        @error('patientPhone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Date and Time -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date</label>
                            <input type="date" wire:model="appointmentDate"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                            @error('appointmentDate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Time</label>
                            <select wire:model="appointmentTime"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                                <option value="">Select time</option>
                                <option value="09:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                            </select>
                            @error('appointmentTime') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- Reason -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Reason for Visit</label>
                        <textarea wire:model="reason" rows="3"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                  placeholder="Please describe your symptoms or reason for the appointment"></textarea>
                        @error('reason') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-3 pt-4">
                        <button type="button" wire:click="closeBookingModal"
                                class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transition-colors duration-300">
                            Cancel
                        </button>
                        <button type="submit"
                                class="flex-1 px-6 py-3 bg-gradient-to-r from-teal-500 to-emerald-500 text-white font-semibold rounded-xl hover:from-teal-600 hover:to-emerald-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>

<!-- Flash Message -->
@if (session()->has('message'))
    <div class="fixed top-4 right-4 z-50">
        <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
            {{ session('message') }}
        </div>
    </div>
@endif
