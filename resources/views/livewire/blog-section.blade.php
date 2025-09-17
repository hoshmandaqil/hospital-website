<section id="blog" class="py-20 bg-gradient-to-br from-slate-50 via-white to-blue-50/30 relative overflow-hidden" style="font-family: 'Quicksand', sans-serif;">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-32 h-32 bg-teal-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-24 h-24 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-1/3 w-28 h-28 bg-emerald-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Health <span class="bg-gradient-to-r from-teal-600 to-emerald-600 bg-clip-text text-transparent">Blog</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Stay informed with the latest health insights, medical advice, and wellness tips from our expert medical team.
            </p>
        </div>

        <!-- Featured Blog Post -->
        <div class="mb-16">
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-2xl border border-white/20 group hover:shadow-3xl transition-all duration-700">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <!-- Image -->
                    <div class="relative h-80 lg:h-auto overflow-hidden">
                        <img src="{{ $blogPosts[0]['image'] }}" alt="{{ $blogPosts[0]['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-teal-500 to-emerald-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                {{ $blogPosts[0]['category'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="{{ $blogPosts[0]['author_image'] }}" alt="{{ $blogPosts[0]['author'] }}"
                                 class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-lg">
                            <div>
                                <p class="font-semibold text-gray-900">{{ $blogPosts[0]['author'] }}</p>
                                <p class="text-sm text-gray-600">{{ date('M d, Y', strtotime($blogPosts[0]['published_at'])) }} • {{ $blogPosts[0]['read_time'] }}</p>
                            </div>
                        </div>

                        <h3 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">
                            {{ $blogPosts[0]['title'] }}
                        </h3>

                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            {{ $blogPosts[0]['excerpt'] }}
                        </p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($blogPosts[0]['tags'] as $tag)
                            <span class="px-3 py-1 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 rounded-full text-sm font-medium">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>

                        <a href="{{ route('blog.post', $blogPosts[0]['id']) }}"
                           class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold group-hover:translate-x-2 transition-all duration-300">
                            Read Full Article
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogPosts->skip(1) as $post)
            <article class="group">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <!-- Image -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-3 left-3">
                            <span class="bg-teal-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $post['category'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ date('M d, Y', strtotime($post['published_at'])) }}
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300 line-clamp-2">
                            {{ $post['title'] }}
                        </h3>

                        <p class="text-gray-600 mb-4 line-clamp-3 text-sm">
                            {{ $post['excerpt'] }}
                        </p>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{ $post['author_image'] }}" alt="{{ $post['author'] }}" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-sm font-medium text-gray-700">{{ $post['author'] }}</span>
                            </div>
                            <span class="text-xs text-gray-500">{{ $post['read_time'] }}</span>
                        </div>

                        <a href="{{ route('blog.post', $post['id']) }}"
                           class="mt-4 inline-flex items-center text-teal-600 hover:text-teal-700 font-medium text-sm">
                            Read More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('all.blog') }}" class="group inline-flex items-center justify-center px-10 py-5 text-teal-600 font-bold text-xl rounded-2xl border-2 border-teal-600 hover:bg-gradient-to-r hover:from-teal-600 hover:to-emerald-600 hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                <span>View All Articles</span>
                <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
