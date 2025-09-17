<!-- Statistics Section -->
<section class="py-24 bg-gradient-to-r from-teal-500 to-teal-600" style="font-family: 'Quicksand', sans-serif;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($stats as $stat)
            <div class="text-center group">
                <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:scale-105">
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path>
                        </svg>
                    </div>

                    <!-- Number -->
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2 group-hover:scale-110 transition-transform duration-300">
                        {{ $stat['number'] }}
                    </div>

                    <!-- Label -->
                    <div class="text-white/90 text-lg font-semibold">
                        {{ $stat['label'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
