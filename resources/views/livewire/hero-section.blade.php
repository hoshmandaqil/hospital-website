<div>
    <!-- Hero Section - People's Care Style -->
    <section class="relative bg-white" style="font-family: 'Quicksand', sans-serif;">
        <!-- Background Pattern -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 right-20 w-96 h-96 bg-teal-100 rounded-full opacity-30"></div>
            <div class="absolute bottom-20 left-20 w-64 h-64 bg-blue-100 rounded-full opacity-20"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 pt-16 pb-96">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Content -->
                    <div class="text-gray-800">
                        <!-- Small line and text -->
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-1 bg-teal-500 rounded-full mr-4"></div>
                            <span class="text-teal-600 font-semibold text-sm uppercase tracking-wide">A Hospital Of Experts</span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-8 text-gray-900">
                            Your Health, Our Priority
                        </h1>

                        <!-- Description -->
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed max-w-2xl">
                            Experience world-class healthcare with our team of expert physicians, cutting-edge technology, and compassionate care. We're committed to providing exceptional medical services that put your health and well-being first, 24/7.
                        </p>

                        <!-- Departments Info -->
                        <p class="text-base text-gray-500 mb-12 leading-relaxed max-w-2xl">
                            Our comprehensive medical center features specialized departments including Cardiology, Neurology, Orthopedics, Emergency Medicine, and General Surgery, ensuring complete care for all your health needs under one roof.
                        </p>

                        <!-- CTA Button -->
                        <div class="text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row gap-4 items-center lg:items-start">
                                <button onclick="openAppointmentModal()" class="inline-flex items-center justify-center px-12 py-4 bg-teal-500 hover:bg-teal-600 text-white font-bold text-lg rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                    BOOK NOW
                                </button>
                                <button onclick="openVideoModal()" class="inline-flex items-center justify-center px-8 py-4 bg-white border-2 border-teal-500 hover:bg-teal-50 text-teal-600 font-bold text-lg rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                    WATCH VIDEO
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Overlapping Image Cards -->
                    <div class="relative h-96">
                        <!-- Main Surgery Image Card (Back) -->
                        <div class="absolute -top-4 right-4 w-72 h-72 z-10">
                            <div class="relative group">
                                <img src="{{ asset('images/hero/surgery.jpg') }}"
                                     alt="Surgery in progress"
                                     class="w-full h-full object-cover rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-300">

                                <!-- Emergency Contact Card -->
                                <div class="absolute top-4 left-4 bg-teal-500 text-white px-4 py-3 rounded-lg shadow-lg">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <div>
                                            <div class="text-xs font-semibold">Emergency (24/7)</div>
                                            <div class="text-sm font-bold">0775054044</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Heart Surgery Image Card (Bottom Left) -->
                        <div class="absolute -bottom-8 left-0 w-72 h-72 z-30">
                            <div class="relative group">
                                <img src="{{ asset('images/hero/heard.jpg') }}"
                                     alt="Heart surgery"
                                     class="w-full h-full object-cover rounded-xl shadow-xl transform group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-xl"></div>

                                <!-- Service Label -->
                                <div class="absolute bottom-4 left-4 text-white">
                                    <div class="text-sm font-bold">Heart Surgery</div>
                                    <div class="text-xs opacity-90">Life Saving</div>
                                </div>
                            </div>
                        </div>

                        <!-- Background Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-32 h-32 bg-teal-500 rounded-full opacity-20 z-0"></div>
                        <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-blue-500 rounded-full opacity-20 z-0"></div>

                        <!-- Floating Stats Card -->
                        <div class="absolute -bottom-2 right-0 bg-white rounded-xl p-2 shadow-xl z-50">
                            <div class="flex items-center space-x-2">
                                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">5k+</div>
                                    <div class="text-sm text-gray-600">Successful Surgeries</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Cards -->
            <div class="absolute bottom-0 left-0 right-0 z-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 -mb-8">
                        <!-- Request Appointment Card -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Request Appointment</h3>
                                    <p class="text-sm text-gray-600">24/7 We are available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Find Location Card -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Find Location</h3>
                                    <p class="text-sm text-gray-600">24/7 We are available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Service Hours Card -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Service Hours</h3>
                                    <p class="text-sm text-gray-600">24/7 We are available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Quicksand Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- YouTube Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 class="text-2xl font-bold text-gray-900">Our Hospital Tour</h3>
                <button onclick="closeVideoModal()" class="text-gray-400 hover:text-gray-600 transition-colors duration-200">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Video Container -->
            <div class="relative w-full" style="padding-bottom: 56.25%;">
                <iframe id="videoFrame"
                        class="absolute top-0 left-0 w-full h-full"
                        src=""
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <script>
        function openVideoModal() {
            const modal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');

            // Replace with your YouTube video ID
            const videoId = 'dQw4w9WgXcQ'; // Replace with actual YouTube video ID
            videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');

            modal.classList.add('hidden');
            videoFrame.src = '';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVideoModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeVideoModal();
            }
        });

        // Appointment Modal Functions
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
    </script>
</div>
