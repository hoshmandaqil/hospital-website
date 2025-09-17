<?php

namespace App\Livewire;

use Livewire\Component;

class ContactSection extends Component
{
    public $phone = '+1 (555) 123-4567';
    public $email = 'info@bayazidrokhan.com';
    public $address = '123 Medical Center Drive, Brooklyn, NY 11226';
    public $hours = 'Mon - Fri: 8:00 AM - 7:00 PM';

    public function render()
    {
        return view('livewire.contact-section');
    }
}
