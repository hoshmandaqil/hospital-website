<?php

namespace App\Livewire;

use Livewire\Component;

class ServicesSection extends Component
{
    public $services = [];

    public function mount()
    {
        $this->services = [
            [
                'id' => 1,
                'name' => 'Emergency Care',
                'description' => '24/7 emergency medical services with immediate response and expert care.',
                'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.5 0L4.268 18.5c-.77.833.192 2.5 1.732 2.5z',
                'color' => '#ef4444'
            ],
            [
                'id' => 2,
                'name' => 'Diagnostic Services',
                'description' => 'Advanced diagnostic imaging and laboratory services for accurate diagnosis.',
                'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                'color' => '#3b82f6'
            ],
            [
                'id' => 3,
                'name' => 'Surgery',
                'description' => 'State-of-the-art surgical procedures with minimally invasive techniques.',
                'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                'color' => '#8b5cf6'
            ],
            [
                'id' => 4,
                'name' => 'Cardiology',
                'description' => 'Comprehensive heart care with advanced cardiac procedures and treatments.',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'color' => '#f59e0b'
            ],
            [
                'id' => 5,
                'name' => 'Pediatrics',
                'description' => 'Specialized care for children from infancy through adolescence.',
                'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                'color' => '#10b981'
            ],
            [
                'id' => 6,
                'name' => 'Mental Health',
                'description' => 'Comprehensive mental health services and psychological support.',
                'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                'color' => '#ec4899'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.services-section');
    }
}
