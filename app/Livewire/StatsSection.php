<?php

namespace App\Livewire;

use Livewire\Component;

class StatsSection extends Component
{
    public $stats = [];

    public function mount()
    {
        $this->stats = [
            [
                'number' => '50K+',
                'label' => 'Happy Patients',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'color' => '#ef4444'
            ],
            [
                'number' => '100+',
                'label' => 'Expert Doctors',
                'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                'color' => '#3b82f6'
            ],
            [
                'number' => '24/7',
                'label' => 'Emergency Care',
                'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                'color' => '#f59e0b'
            ],
            [
                'number' => '5+',
                'label' => 'Years Experience',
                'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                'color' => '#10b981'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.stats-section');
    }
}
