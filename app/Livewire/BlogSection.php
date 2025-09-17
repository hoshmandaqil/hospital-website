<?php

namespace App\Livewire;

use Livewire\Component;

class BlogSection extends Component
{
    public $blogPosts = [];

    public function mount()
    {
        $this->blogPosts = collect([
            [
                'id' => 1,
                'title' => 'Understanding Heart Health: A Complete Guide',
                'excerpt' => 'Learn about the essential steps to maintain a healthy heart and prevent cardiovascular diseases through lifestyle changes and regular check-ups.',
                'content' => 'Heart health is one of the most important aspects of overall wellness. In this comprehensive guide, we explore the key factors that contribute to cardiovascular health, including diet, exercise, stress management, and regular medical check-ups. Our cardiology team shares expert insights on prevention strategies and early warning signs to watch for.',
                'image' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Sarah Johnson',
                'author_image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'category' => 'Cardiology',
                'read_time' => '5 min read',
                'published_at' => '2024-01-15',
                'tags' => ['Heart Health', 'Prevention', 'Cardiology']
            ],
            [
                'id' => 2,
                'title' => 'The Importance of Regular Health Screenings',
                'excerpt' => 'Discover why regular health screenings are crucial for early disease detection and maintaining optimal health throughout your life.',
                'content' => 'Regular health screenings are your first line of defense against serious health conditions. This article explains the different types of screenings available, when to get them, and how they can save your life by detecting problems early when they are most treatable.',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Michael Chen',
                'author_image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'category' => 'General Health',
                'read_time' => '4 min read',
                'published_at' => '2024-01-12',
                'tags' => ['Screening', 'Prevention', 'Health Check']
            ],
            [
                'id' => 3,
                'title' => 'Mental Health and Physical Wellness Connection',
                'excerpt' => 'Explore the deep connection between mental health and physical wellness, and learn strategies to maintain both aspects of your health.',
                'content' => 'The mind-body connection is more powerful than many people realize. This comprehensive article examines how mental health affects physical health and vice versa, providing practical strategies for maintaining both mental and physical wellness.',
                'image' => 'https://images.unsplash.com/photo-1506905925346-14b5e4d4c4b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Emily Rodriguez',
                'author_image' => 'https://images.unsplash.com/photo-1594824388855-8880a85b4a5d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'category' => 'Mental Health',
                'read_time' => '6 min read',
                'published_at' => '2024-01-10',
                'tags' => ['Mental Health', 'Wellness', 'Mind-Body']
            ],
            [
                'id' => 4,
                'title' => 'Nutrition Tips for a Healthy Lifestyle',
                'excerpt' => 'Get expert nutrition advice from our dietitians on how to fuel your body with the right foods for optimal health and energy.',
                'content' => 'Proper nutrition is the foundation of good health. Our nutrition experts share evidence-based advice on building a balanced diet, understanding macronutrients, and making sustainable dietary choices that support your health goals.',
                'image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Lisa Wang',
                'author_image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'category' => 'Nutrition',
                'read_time' => '7 min read',
                'published_at' => '2024-01-08',
                'tags' => ['Nutrition', 'Diet', 'Healthy Eating']
            ],
            [
                'id' => 5,
                'title' => 'Exercise and Recovery: Finding the Balance',
                'excerpt' => 'Learn how to balance exercise intensity with proper recovery to maximize health benefits and prevent injury.',
                'content' => 'Exercise is essential for health, but recovery is equally important. This article provides guidance on creating a balanced fitness routine that includes adequate rest and recovery periods to prevent burnout and injury.',
                'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. James Wilson',
                'author_image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'category' => 'Fitness',
                'read_time' => '5 min read',
                'published_at' => '2024-01-05',
                'tags' => ['Exercise', 'Recovery', 'Fitness']
            ],
            [
                'id' => 6,
                'title' => 'Managing Chronic Conditions Effectively',
                'excerpt' => 'Discover strategies for living well with chronic conditions and maintaining quality of life through proper management.',
                'content' => 'Living with a chronic condition doesn\'t mean giving up on quality of life. This comprehensive guide offers practical strategies for managing chronic conditions effectively, including medication adherence, lifestyle modifications, and support systems.',
                'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Maria Garcia',
                'author_image' => 'https://images.unsplash.com/photo-1594824388855-8880a85b4a5d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'category' => 'Chronic Care',
                'read_time' => '8 min read',
                'published_at' => '2024-01-03',
                'tags' => ['Chronic Care', 'Management', 'Quality of Life']
            ]
        ]);
    }

    public function render()
    {
        return view('livewire.blog-section');
    }
}
