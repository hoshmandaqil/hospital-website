<?php

namespace App\Livewire;

use Livewire\Component;

class BlogPost extends Component
{
    public $postId;
    public $post;
    public $relatedPosts = [];

    public function mount($postId = null)
    {
        $this->postId = $postId;
        $this->loadPostData();
    }

    public function loadPostData()
    {
        if (!$this->postId) {
            $this->post = null;
            $this->relatedPosts = [];
            return;
        }

        $allPosts = [
            1 => [
                'id' => 1,
                'title' => 'Understanding Heart Health: A Complete Guide',
                'excerpt' => 'Learn about the essential steps to maintain a healthy heart and prevent cardiovascular diseases through lifestyle changes and regular check-ups.',
                'content' => 'Heart health is one of the most important aspects of overall wellness. In this comprehensive guide, we explore the key factors that contribute to cardiovascular health, including diet, exercise, stress management, and regular medical check-ups. Our cardiology team shares expert insights on prevention strategies and early warning signs to watch for.

The Foundation of Heart Health

Your heart is a remarkable muscle that works tirelessly to pump blood throughout your body. Maintaining its health requires a holistic approach that encompasses multiple aspects of your lifestyle. Here are the key pillars of heart health:

1. Nutrition and Heart Health

A heart-healthy diet is rich in fruits, vegetables, whole grains, lean proteins, and healthy fats. The Mediterranean diet, for example, has been extensively studied and shown to significantly reduce the risk of cardiovascular disease. Key components include:

- Omega-3 fatty acids found in fish, nuts, and seeds
- Antioxidants from colorful fruits and vegetables
- Fiber from whole grains and legumes
- Limited sodium to maintain healthy blood pressure

2. Physical Activity

Regular exercise strengthens your heart muscle, improves circulation, and helps maintain a healthy weight. The American Heart Association recommends at least 150 minutes of moderate-intensity exercise per week. This can include:

- Brisk walking
- Swimming
- Cycling
- Dancing
- Strength training

3. Stress Management

Chronic stress can have a significant impact on heart health. It can lead to high blood pressure, inflammation, and unhealthy coping mechanisms like overeating or smoking. Effective stress management techniques include:

- Meditation and mindfulness
- Deep breathing exercises
- Regular physical activity
- Adequate sleep
- Social connections

4. Regular Health Screenings

Early detection is crucial for preventing serious heart conditions. Regular screenings should include:

- Blood pressure monitoring
- Cholesterol level checks
- Blood sugar testing
- Body mass index (BMI) assessment
- Electrocardiogram (ECG) if recommended

Warning Signs to Watch For

It is important to recognize the early warning signs of heart problems:

- Chest pain or discomfort
- Shortness of breath
- Fatigue or weakness
- Swelling in legs, ankles, or feet
- Irregular heartbeat
- Dizziness or fainting

If you experience any of these symptoms, consult with a healthcare professional immediately.

Prevention Strategies

Prevention is always better than cure. Here are some evidence-based strategies to protect your heart:

1. Quit smoking - This is the single most important thing you can do for your heart health
2. Maintain a healthy weight - Excess weight puts strain on your heart
3. Limit alcohol consumption - Moderation is key
4. Get quality sleep - Aim for 7-9 hours per night
5. Manage chronic conditions - Keep diabetes, high blood pressure, and high cholesterol under control

Conclusion

Taking care of your heart is an investment in your long-term health and quality of life. By making informed choices about your diet, exercise, stress management, and regular health screenings, you can significantly reduce your risk of heart disease and enjoy a healthier, more active life.

Remember, it is never too late to start making heart-healthy changes. Even small improvements can have a big impact on your cardiovascular health. Consult with your healthcare provider to develop a personalized plan that works for your lifestyle and health goals.',
                'image' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Sarah Johnson',
                'author_image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'author_bio' => 'Dr. Sarah Johnson is a board-certified cardiologist with over 15 years of experience in preventive cardiology and heart disease management.',
                'category' => 'Cardiology',
                'read_time' => '5 min read',
                'published_at' => '2024-01-15',
                'tags' => ['Heart Health', 'Prevention', 'Cardiology'],
                'views' => 1250,
                'likes' => 89
            ],
            2 => [
                'id' => 2,
                'title' => 'The Importance of Regular Health Screenings',
                'excerpt' => 'Discover why regular health screenings are crucial for early disease detection and maintaining optimal health throughout your life.',
                'content' => 'Regular health screenings are your first line of defense against serious health conditions. This comprehensive guide explains the different types of screenings available, when to get them, and how they can save your life by detecting problems early when they are most treatable.

## Why Health Screenings Matter

Early detection of health problems can mean the difference between life and death. Many serious conditions, including cancer, heart disease, and diabetes, often develop silently without obvious symptoms in their early stages. Regular screenings can identify these conditions before they become life-threatening.

## Essential Health Screenings by Age

### In Your 20s and 30s
- Blood pressure checks (every 2 years)
- Cholesterol screening (every 5 years)
- Blood glucose testing (every 3 years)
- Skin cancer screening (annually)
- Eye exams (every 2 years)

### In Your 40s
- Mammograms (women, annually)
- Colonoscopy (every 10 years)
- Bone density testing (women at 65, men at 70)
- Thyroid function tests
- Heart disease risk assessment

### In Your 50s and Beyond
- Prostate cancer screening (men)
- Colorectal cancer screening
- Osteoporosis screening
- Hearing tests
- Cognitive assessments

## Making Screenings Work for You

1. **Schedule regular appointments** with your primary care physician
2. **Keep track of your results** and any changes over time
3. **Ask questions** about your risk factors and recommended screenings
4. **Follow up** on any abnormal results promptly
5. **Maintain a healthy lifestyle** to reduce your risk of developing conditions

Remember, prevention is always better than cure. Regular health screenings are an investment in your long-term health and well-being.',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Michael Chen',
                'author_image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'author_bio' => 'Dr. Michael Chen is a preventive medicine specialist focused on early disease detection and health optimization.',
                'category' => 'General Health',
                'read_time' => '4 min read',
                'published_at' => '2024-01-12',
                'tags' => ['Screening', 'Prevention', 'Health Check'],
                'views' => 980,
                'likes' => 67
            ],
            // Add more posts as needed...
        ];

        $this->post = $allPosts[$this->postId] ?? null;

        if ($this->post) {
            // Get related posts (excluding current post)
            $this->relatedPosts = collect($allPosts)
                ->where('id', '!=', $this->postId)
                ->take(3)
                ->values()
                ->toArray();
        } else {
            $this->relatedPosts = [];
        }
    }

    public function render()
    {
        return view('livewire.blog-post');
    }
}
