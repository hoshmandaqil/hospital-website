<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(isset($post)){{ $post['title'] }} - @endif Bayazid Rokhan Hospital Blog</title>

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

        .prose h2 {
            @apply text-2xl font-bold text-gray-900 mt-8 mb-4;
        }

        .prose h3 {
            @apply text-xl font-bold text-gray-900 mt-6 mb-3;
        }

        .prose ul {
            @apply list-disc list-inside mb-4;
        }

        .prose ol {
            @apply list-decimal list-inside mb-4;
        }

        .prose li {
            @apply mb-2;
        }

        .prose strong {
            @apply font-bold text-gray-900;
        }

        .prose p {
            @apply mb-4;
        }
    </style>
</head>
<body class="bg-white text-gray-900" style="font-family: 'Quicksand', sans-serif;">
    <!-- Navigation -->
    @livewire('navigation')

    <!-- Blog Post Content -->
    @livewire('blog-post', ['postId' => $postId])

    <!-- Footer -->
    @livewire('footer-section')

    <!-- Scripts -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('shadow-xl');
            } else {
                nav.classList.remove('shadow-xl');
            }
        });
    </script>
</body>
</html>
