<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Bayazid Rokhan Hospital</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #14b8a6, #0d9488);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-white text-gray-900" style="font-family: 'Quicksand', sans-serif;">
    <!-- Navigation -->
    @livewire('navigation')

    <!-- About Us Section -->
    @livewire('about-section')

    <!-- Additional About Content -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Our Story -->
            <div class="mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Our <span class="gradient-text">Story</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        From humble beginnings to becoming a leading healthcare institution
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Founded in 2000</h3>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Bayazid Rokhan Hospital was established with a simple yet powerful vision: to provide exceptional healthcare services to our community. What started as a small medical facility has grown into a comprehensive healthcare institution serving thousands of patients annually.
                        </p>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Our journey has been marked by continuous growth, innovation, and an unwavering commitment to patient care. We have expanded our services, invested in cutting-edge technology, and assembled a team of the finest medical professionals.
                        </p>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-6 bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl">
                                <div class="text-3xl font-bold text-teal-600 mb-2">2000</div>
                                <div class="text-sm text-gray-600">Founded</div>
                            </div>
                            <div class="text-center p-6 bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl">
                                <div class="text-3xl font-bold text-teal-600 mb-2">50+</div>
                                <div class="text-sm text-gray-600">Specialists</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             alt="Hospital History"
                             class="w-full h-96 object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>

            <!-- Leadership Team -->
            <div class="mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Our <span class="gradient-text">Leadership</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Meet the dedicated leaders who guide our mission
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center p-8 bg-white rounded-3xl shadow-lg border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             alt="Dr. Bayazid Rokhan"
                             class="w-24 h-24 rounded-full mx-auto mb-6 object-cover">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Bayazid Rokhan</h3>
                        <p class="text-teal-600 font-semibold mb-4">Chief Executive Officer</p>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            With over 25 years of experience in healthcare administration, Dr. Rokhan leads our organization with vision and compassion.
                        </p>
                    </div>

                    <div class="text-center p-8 bg-white rounded-3xl shadow-lg border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             alt="Dr. Sarah Johnson"
                             class="w-24 h-24 rounded-full mx-auto mb-6 object-cover">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Sarah Johnson</h3>
                        <p class="text-teal-600 font-semibold mb-4">Chief Medical Officer</p>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            A renowned cardiologist with 20+ years of experience, Dr. Johnson oversees our medical operations and quality standards.
                        </p>
                    </div>

                    <div class="text-center p-8 bg-white rounded-3xl shadow-lg border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             alt="Dr. Michael Chen"
                             class="w-24 h-24 rounded-full mx-auto mb-6 object-cover">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Michael Chen</h3>
                        <p class="text-teal-600 font-semibold mb-4">Director of Operations</p>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Dr. Chen ensures smooth hospital operations and implements innovative healthcare solutions for better patient outcomes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Awards & Recognition -->
            <div class="mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Awards & <span class="gradient-text">Recognition</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Recognized for excellence in healthcare delivery
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center p-6 bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Quality Excellence</h3>
                        <p class="text-sm text-gray-600">2023 Healthcare Quality Award</p>
                    </div>

                    <div class="text-center p-6 bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Patient Satisfaction</h3>
                        <p class="text-sm text-gray-600">98% Patient Satisfaction Rate</p>
                    </div>

                    <div class="text-center p-6 bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Innovation Award</h3>
                        <p class="text-sm text-gray-600">Medical Technology Innovation 2023</p>
                    </div>

                    <div class="text-center p-6 bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Community Service</h3>
                        <p class="text-sm text-gray-600">Outstanding Community Impact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @livewire('footer-section')

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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="patientEmail"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your email">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date *</label>
                            <input type="date" id="appointmentDate" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                        </div>
                    </div>

                    <!-- Appointment Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Department</label>
                            <select id="department"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                                <option value="">Select department</option>
                                <option value="cardiology">Cardiology</option>
                                <option value="orthopedics">Orthopedics</option>
                                <option value="pediatrics">Pediatrics</option>
                                <option value="dermatology">Dermatology</option>
                                <option value="neurology">Neurology</option>
                                <option value="general">General Medicine</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Reason for Visit</label>
                        <textarea id="reason" rows="4"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                  placeholder="Please describe your symptoms or reason for the appointment"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit"
                                class="w-full bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-600 hover:to-emerald-600 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Appointment Modal Functions
        function openAppointmentModal() {
            document.getElementById('appointmentModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeAppointmentModal() {
            document.getElementById('appointmentModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
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

        // Form submission
        document.getElementById('appointmentForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                name: document.getElementById('patientName').value,
                phone: document.getElementById('patientPhone').value,
                email: document.getElementById('patientEmail').value,
                date: document.getElementById('appointmentDate').value,
                time: document.getElementById('appointmentTime').value,
                department: document.getElementById('department').value,
                reason: document.getElementById('reason').value
            };

            // Simulate form submission
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
