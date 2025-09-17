<?php

namespace App\Livewire;

use Livewire\Component;

class AboutSection extends Component
{
    public $title = "About Bayazid Rokhan Hospital";
    public $subtitle = "Delivering Excellence in Healthcare";
    public $description = "We are committed to providing the highest quality medical care with state-of-the-art facilities and experienced medical professionals.";
    public $features = [];

    public function mount()
    {
        $this->features = [
            'Advanced Medical Technology',
            'Experienced Medical Team',
            '24/7 Emergency Services',
            'Patient-Centered Care'
        ];
    }

    public function render()
    {
        return view('livewire.about-section');
    }
}
