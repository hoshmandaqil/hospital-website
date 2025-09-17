<?php

namespace App\Livewire;

use Livewire\Component;

class HeroSection extends Component
{
    public $emergencyPhone = '077 505 4044';
    public $location = 'Karte-now,Kabul,Afghanistan';
    public $operatingHours = '24/7';

    public $sliderImages = [
        [
            'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'title' => 'Caring For The Health And Well Being Of Family.',
            'subtitle' => 'Quality Health Care For Family.',
            'description' => 'The health and well-being of our patients and their health care team will always be our priority, so we follow the best practices for cleanliness.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'title' => 'Caring For The Health And Well Being Of Family.',
            'subtitle' => 'Delivering Best Medical Care.',
            'description' => 'The health and well-being of our patients and their health care team will always be our priority, so we follow the best practices for cleanliness.'
        ]
    ];

    public $currentSlide = 0;

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->sliderImages);
    }

    public function previousSlide()
    {
        $this->currentSlide = $this->currentSlide === 0 ? count($this->sliderImages) - 1 : $this->currentSlide - 1;
    }

    public function render()
    {
        return view('livewire.hero-section');
    }
}
