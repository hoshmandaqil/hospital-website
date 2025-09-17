<!-- Departments Section -->
<section id="departments" class="pt-16 pb-8 bg-white" style="font-family: 'Quicksand', sans-serif;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center w-20 h-1 bg-gradient-to-r from-teal-500 to-blue-500 rounded-full"></div>
            <h2 class="text-5xl md:text-6xl font-bold mb-8 bg-gradient-to-r from-gray-900 via-teal-600 to-blue-600 bg-clip-text text-transparent">
                Our <span class="text-teal-600">Departments</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Comprehensive healthcare services across multiple specialized departments,
                each staffed with expert medical professionals and cutting-edge technology.
            </p>
        </div>

        <!-- Departments Slider -->
        <div class="relative group">
            <!-- Slider Container -->
            <div class="overflow-hidden rounded-2xl">
                <div class="flex space-x-8 transition-transform duration-700 ease-out" id="departments-slider">
                    @if(count($departments) > 0)
                        @foreach($departments as $index => $department)
                    <div class="flex-shrink-0 w-80">
                        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-700 group transform hover:-translate-y-4 hover:scale-105 border border-gray-100 h-full flex flex-col">
                            <!-- Image -->
                            <div class="h-64 relative overflow-hidden flex-shrink-0">
                                <img src="{{ $department['image'] }}"
                                     alt="{{ $department['name'] }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-teal-600/90 via-teal-600/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                                    <a href="{{ route('department.details', $department['id']) }}" class="text-white text-center transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="text-lg font-semibold mb-2">Learn More</p>
                                        <p class="text-sm opacity-90">Discover our services</p>
                                    </a>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-8 flex-1 flex flex-col">
                                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-teal-600 transition-colors duration-300 mb-4">
                                    {{ $department['name'] }}
                                </h3>
                                <p class="text-gray-600 leading-relaxed mb-6 text-sm flex-1">
                                    {{ $department['description'] }}
                                </p>
                                <div class="flex items-center justify-between mt-auto">
                                    <div class="flex items-center text-teal-600 text-sm font-semibold group-hover:text-teal-700 transition-colors duration-300">
                                        <span>View Services</span>
                                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center text-white text-xs font-bold" style="background-color: {{ $department['color'] }};">
                                        {{ $index + 1 }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button onclick="slideLeft()" class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-8 bg-white/90 backdrop-blur-sm rounded-full p-5 shadow-2xl hover:shadow-3xl transition-all duration-300 hover:scale-110 group border border-gray-100">
                <svg class="w-7 h-7 text-gray-600 group-hover:text-teal-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button onclick="slideRight()" class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-8 bg-white/90 backdrop-blur-sm rounded-full p-5 shadow-2xl hover:shadow-3xl transition-all duration-300 hover:scale-110 group border border-gray-100">
                <svg class="w-7 h-7 text-gray-600 group-hover:text-teal-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Dots Indicator -->
        <div class="flex justify-center mt-16 space-x-4">
            @foreach($departments as $index => $department)
            <button onclick="goToSlide({{ $index }})" class="w-5 h-5 rounded-full bg-gray-300 hover:bg-teal-500 transition-all duration-500 hover:scale-125 group relative" id="dot-{{ $index }}">
                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-teal-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </button>
            @endforeach
        </div>
    </div>

    <!-- JavaScript for Enhanced Slider -->
    <script>
        let currentSlide = 0;
        const totalSlides = {{ count($departments) }};
        const slideWidth = 320; // w-80 + gap-8
        let autoSlideInterval;
        let isHovered = false;

        function slideLeft() {
            currentSlide = currentSlide > 0 ? currentSlide - 1 : totalSlides - 1;
            updateSlider();
            resetAutoSlide();
        }

        function slideRight() {
            currentSlide = currentSlide < totalSlides - 1 ? currentSlide + 1 : 0;
            updateSlider();
            resetAutoSlide();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
            resetAutoSlide();
        }

        function updateSlider() {
            const slider = document.getElementById('departments-slider');
            const translateX = -currentSlide * slideWidth;
            slider.style.transform = `translateX(${translateX}px)`;

            // Update dots with enhanced styling
            document.querySelectorAll('[id^="dot-"]').forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-teal-500', 'scale-125');
                    dot.querySelector('div').classList.add('opacity-100');
                } else {
                    dot.classList.add('bg-gray-300');
                    dot.classList.remove('bg-teal-500', 'scale-125');
                    dot.querySelector('div').classList.remove('opacity-100');
                }
            });
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                if (!isHovered) {
                    slideRight();
                }
            }, 6000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        function resetAutoSlide() {
            stopAutoSlide();
            startAutoSlide();
        }

        // Pause auto-slide on hover
        document.getElementById('departments-slider').addEventListener('mouseenter', () => {
            isHovered = true;
            stopAutoSlide();
        });

        document.getElementById('departments-slider').addEventListener('mouseleave', () => {
            isHovered = false;
            startAutoSlide();
        });

        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;

        document.getElementById('departments-slider').addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        document.getElementById('departments-slider').addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const threshold = 50;
            const diff = startX - endX;

            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    slideRight();
                } else {
                    slideLeft();
                }
            }
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                slideLeft();
            } else if (e.key === 'ArrowRight') {
                slideRight();
            }
        });

        // Initialize slider
        updateSlider();
        startAutoSlide();
    </script>
</section>
