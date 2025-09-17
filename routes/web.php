<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about.us');

Route::get('/department/{departmentId}', function ($departmentId) {
    return view('department-details', ['departmentId' => $departmentId]);
})->name('department.details');

Route::get('/doctor/{doctorId}', function ($doctorId) {
    return view('doctor-profile', ['doctorId' => $doctorId]);
})->name('doctor.profile');

Route::get('/blog/{postId}', function ($postId) {
    return view('blog-post', ['postId' => $postId]);
})->name('blog.post');

Route::get('/all-doctors', function () {
    // Sample doctors data - in a real app, this would come from a database
    $doctors = [
        [
            'id' => 1,
            'name' => 'Dr. Sarah Johnson',
            'specialty' => 'Cardiologist',
            'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'experience' => '15+ Years',
            'rating' => 4.9,
            'department' => 'Cardiology'
        ],
        [
            'id' => 2,
            'name' => 'Dr. Michael Chen',
            'specialty' => 'Orthopedic Surgeon',
            'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'experience' => '12+ Years',
            'rating' => 4.8,
            'department' => 'Orthopedics'
        ],
        [
            'id' => 3,
            'name' => 'Dr. Emily Rodriguez',
            'specialty' => 'Pediatrician',
            'image' => 'https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'experience' => '10+ Years',
            'rating' => 4.9,
            'department' => 'Pediatrics'
        ],
        [
            'id' => 4,
            'name' => 'Dr. David Kim',
            'specialty' => 'Dental Surgeon',
            'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'experience' => '8+ Years',
            'rating' => 4.7,
            'department' => 'Dentistry'
        ],
        [
            'id' => 5,
            'name' => 'Dr. Lisa Wang',
            'specialty' => 'Neurologist',
            'image' => 'https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'experience' => '14+ Years',
            'rating' => 4.8,
            'department' => 'Neurology'
        ],
        [
            'id' => 6,
            'name' => 'Dr. James Wilson',
            'specialty' => 'Emergency Medicine',
            'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'experience' => '11+ Years',
            'rating' => 4.9,
            'department' => 'Emergency'
        ]
    ];

    return view('all-doctors', ['doctors' => $doctors]);
})->name('all.doctors');

Route::get('/all-blog', function () {
    // Sample blog posts data - in a real app, this would come from a database
    $blogPosts = [
        [
            'id' => 1,
            'title' => 'Understanding Heart Health: A Complete Guide',
            'excerpt' => 'Learn about the importance of cardiovascular health and how to maintain a healthy heart through proper diet, exercise, and regular check-ups.',
            'image' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'category' => 'Cardiology',
            'date' => 'January 15, 2025',
            'readTime' => '5 min read',
            'author' => 'Dr. Sarah Johnson',
            'authorImage' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'id' => 2,
            'title' => 'Preventing Sports Injuries: Tips from Our Orthopedic Team',
            'excerpt' => 'Discover effective strategies to prevent common sports injuries and maintain optimal physical performance throughout your athletic journey.',
            'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'category' => 'Orthopedics',
            'date' => 'January 12, 2025',
            'readTime' => '7 min read',
            'author' => 'Dr. Michael Chen',
            'authorImage' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'id' => 3,
            'title' => 'Child Development Milestones: What Parents Should Know',
            'excerpt' => 'A comprehensive guide to understanding your child\'s development stages and when to seek medical advice for developmental concerns.',
            'image' => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'category' => 'Pediatrics',
            'date' => 'January 10, 2025',
            'readTime' => '6 min read',
            'author' => 'Dr. Emily Rodriguez',
            'authorImage' => 'https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'id' => 4,
            'title' => 'Oral Health: Beyond Brushing and Flossing',
            'excerpt' => 'Explore advanced oral hygiene practices and learn about the latest developments in dental care and preventive dentistry.',
            'image' => 'https://images.unsplash.com/photo-1606811841689-23e56c363c2e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'category' => 'Dentistry',
            'date' => 'January 8, 2025',
            'readTime' => '4 min read',
            'author' => 'Dr. David Kim',
            'authorImage' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'id' => 5,
            'title' => 'Managing Chronic Pain: A Holistic Approach',
            'excerpt' => 'Learn about effective pain management strategies that combine medical treatment with lifestyle modifications for better quality of life.',
            'image' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'category' => 'General Health',
            'date' => 'January 5, 2025',
            'readTime' => '8 min read',
            'author' => 'Dr. Lisa Wang',
            'authorImage' => 'https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ],
        [
            'id' => 6,
            'title' => 'Emergency Preparedness: What Every Family Should Know',
            'excerpt' => 'Essential tips for handling medical emergencies at home and knowing when to seek immediate professional medical care.',
            'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'category' => 'Emergency Care',
            'date' => 'January 3, 2025',
            'readTime' => '6 min read',
            'author' => 'Dr. James Wilson',
            'authorImage' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'
        ]
    ];

    return view('all-blog', ['blogPosts' => $blogPosts]);
})->name('all.blog');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');
});

require __DIR__.'/auth.php';
