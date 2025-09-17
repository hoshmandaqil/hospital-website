<?php

namespace App\Livewire;

use Livewire\Component;

class DoctorsSection extends Component
{
    public $doctors = [];

    public function mount()
    {
        $this->doctors = [
            [
                'id' => 1,
                'name' => 'Dr. Sarah Johnson',
                'specialty' => 'Cardiologist',
                'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '15+ Years',
                'rating' => 4.9
            ],
            [
                'id' => 2,
                'name' => 'Dr. Michael Chen',
                'specialty' => 'Orthopedic Surgeon',
                'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '12+ Years',
                'rating' => 4.8
            ],
            [
                'id' => 3,
                'name' => 'Dr. Emily Rodriguez',
                'specialty' => 'Pediatrician',
                'image' => 'https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '10+ Years',
                'rating' => 4.9
            ],
            [
                'id' => 4,
                'name' => 'Dr. David Kim',
                'specialty' => 'Dental Surgeon',
                'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '8+ Years',
                'rating' => 4.7
            ]
        ];
    }

    public function render()
    {
        return view('livewire.doctors-section');
    }
}
