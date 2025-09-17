<?php

namespace App\Livewire;

use Livewire\Component;

class DepartmentsSection extends Component
{
    public $departments = [];

    public function mount()
    {
        $this->departments = [
            [
                'id' => 1,
                'name' => 'General Medicine',
                'image' => '/images/departments/medicine.jpg',
                'color' => '#059669',
                'description' => 'Comprehensive medical care for adults with a focus on prevention, diagnosis, and treatment of various health conditions.',
                'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
            ],
            [
                'id' => 2,
                'name' => 'General Surgery',
                'image' => '/images/departments/surgery.jpg',
                'color' => '#0ea5e9',
                'description' => 'Advanced surgical procedures and treatments performed by our experienced surgical team using state-of-the-art technology.',
                'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4'
            ],
            [
                'id' => 3,
                'name' => 'Gynecology',
                'image' => '/images/departments/gyncology.jpg',
                'color' => '#8b5cf6',
                'description' => 'Specialized women\'s health services including reproductive health, pregnancy care, and gynecological treatments.',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
            ],
            [
                'id' => 4,
                'name' => 'Pediatrics',
                'image' => '/images/departments/pediatric.jpg',
                'color' => '#f59e0b',
                'description' => 'Comprehensive healthcare for infants, children, and adolescents with specialized pediatric care and treatments.',
                'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z'
            ],
            [
                'id' => 5,
                'name' => 'Dental',
                'image' => '/images/departments/dental.jpg',
                'color' => '#10b981',
                'description' => 'Complete dental care services including preventive, restorative, and cosmetic dentistry for all ages.',
                'icon' => 'M7 4V2a1 1 0 011-1h4a1 1 0 011 1v2m-5 0h6m-6 0a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2V6a2 2 0 00-2-2M7 4a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2V6a2 2 0 00-2-2'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.departments-section');
    }
}
