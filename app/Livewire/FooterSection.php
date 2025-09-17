<?php

namespace App\Livewire;

use Livewire\Component;

class FooterSection extends Component
{
    public $hospitalName = 'Bayazid Rokhan Hospital';
    public $description = 'Providing exceptional healthcare services with compassion, innovation, and excellence.';
    public $phone = '+1 (555) 123-4567';
    public $email = 'info@bayazidrokhan.com';
    public $address = '123 Medical Center Drive, Brooklyn, NY 11226';

    public function render()
    {
        return view('livewire.footer-section');
    }
}
