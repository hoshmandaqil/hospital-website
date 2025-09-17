<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Doctors - Bayazid Rokhan Hospital</title>

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
            <!-- Header Section -->
            <section class="bg-gradient-to-br from-teal-500 to-emerald-600 py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 class="text-5xl font-bold text-white mb-4">Our Medical Team</h1>
                    <p class="text-xl text-teal-100 mb-8">Meet our experienced and dedicated healthcare professionals</p>
                </div>
            </section>

            <!-- All Doctors Grid -->
            <section class="py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                        @foreach($doctors as $doctor)
                        <div class="group">
                            <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-700 transform hover:-translate-y-4 hover:scale-105 border border-gray-100 h-full flex flex-col">
                                <!-- Doctor Image -->
                                <div class="h-64 relative overflow-hidden flex-shrink-0">
                                    <img src="{{ $doctor['image'] }}" alt="{{ $doctor['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">

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
                                            <span class="text-sm font-bold">{{ $doctor['experience'] }} Experience</span>
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
                </div>
            </section>
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
                    <p class="text-gray-500 text-sm mt-4">© 2025 Bayazid Rokhan Hospital. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Global Appointment Form Modal -->
    <div id="appointmentModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-teal-500 to-emerald-500 rounded-t-3xl p-8 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Book Your Appointment</h2>
                        <p class="text-teal-100">Schedule your consultation with our medical experts</p>
                    </div>
                    <button onclick="closeAppointmentModal()" class="text-white hover:text-teal-200 transition-colors duration-200">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Appointment Form -->
            <div class="p-8">
                <form id="appointmentForm" class="space-y-6">
                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="patientName" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your full name">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" id="patientPhone" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your phone number">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="patientEmail" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your email">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Age</label>
                            <input type="number" id="patientAge" min="1" max="120"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Your age">
                        </div>
                    </div>

                    <!-- Appointment Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date *</label>
                            <input type="date" id="appointmentDate" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Time *</label>
                            <select id="appointmentTime" required
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
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Department/Specialty</label>
                        <select id="department"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                            <option value="">Select department</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="orthopedics">Orthopedics</option>
                            <option value="pediatrics">Pediatrics</option>
                            <option value="dentistry">Dentistry</option>
                            <option value="general">General Medicine</option>
                            <option value="emergency">Emergency</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Reason for Visit *</label>
                        <textarea id="reason" rows="4" required
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                  placeholder="Please describe your symptoms or reason for the appointment"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex space-x-4 pt-4">
                        <button type="button" onclick="closeAppointmentModal()"
                                class="flex-1 px-6 py-4 border border-gray-300 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transition-colors duration-300">
                            Cancel
                        </button>
                        <button type="submit"
                                class="flex-1 px-6 py-4 bg-gradient-to-r from-teal-500 to-emerald-500 text-white font-semibold rounded-xl hover:from-teal-600 hover:to-emerald-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Global Appointment Modal Functions
        function openAppointmentModal() {
            const modal = document.getElementById('appointmentModal');
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeAppointmentModal() {
            const modal = document.getElementById('appointmentModal');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        document.getElementById('appointmentModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeAppointmentModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeAppointmentModal();
            }
        });

        // Handle form submission
        document.getElementById('appointmentForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                name: document.getElementById('patientName').value,
                phone: document.getElementById('patientPhone').value,
                email: document.getElementById('patientEmail').value,
                age: document.getElementById('patientAge').value,
                date: document.getElementById('appointmentDate').value,
                time: document.getElementById('appointmentTime').value,
                department: document.getElementById('department').value,
                reason: document.getElementById('reason').value
            };

            // Here you would typically send the data to your server
            // For now, we'll just show a success message
            alert('Appointment request submitted successfully! We will contact you soon to confirm your appointment.');

            // Reset form
            this.reset();
            closeAppointmentModal();
        });

        // Set minimum date to today
        document.getElementById('appointmentDate').min = new Date().toISOString().split('T')[0];
    </script>

    @livewireScripts
</body>
</html>
