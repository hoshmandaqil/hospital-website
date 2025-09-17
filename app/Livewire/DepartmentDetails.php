<?php

namespace App\Livewire;

use Livewire\Component;

class DepartmentDetails extends Component
{
    public $department;
    public $doctors = [];
    public $services = [];
    public $equipment = [];
    public $stats = [];

    public function mount($departmentId = null)
    {
        $this->loadDepartmentData($departmentId);
    }

    public function loadDepartmentData($departmentId)
    {
        $departments = [
            1 => [
                'id' => 1,
                'name' => 'General Medicine',
                'image' => '/images/departments/medicine.jpg',
                'color' => '#059669',
                'description' => 'Comprehensive medical care for adults with a focus on prevention, diagnosis, and treatment of various health conditions.',
                'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                'fullDescription' => 'Our General Medicine department provides comprehensive healthcare services for adults, focusing on preventive care, early diagnosis, and treatment of various medical conditions. Our experienced physicians work together to provide personalized care tailored to each patient\'s unique needs.',
                'headOfDepartment' => 'Dr. Sarah Johnson',
                'experience' => '15+ Years',
                'specialization' => 'Internal Medicine',
                'phone' => '+93 775054044',
                'email' => 'general.medicine@bayazidrokhan.com'
            ],
            2 => [
                'id' => 2,
                'name' => 'General Surgery',
                'image' => '/images/departments/surgery.jpg',
                'color' => '#0ea5e9',
                'description' => 'Advanced surgical procedures and treatments performed by our experienced surgical team using state-of-the-art technology.',
                'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4',
                'fullDescription' => 'Our General Surgery department offers advanced surgical procedures using cutting-edge technology and minimally invasive techniques. Our team of skilled surgeons provides comprehensive surgical care with a focus on patient safety and optimal outcomes.',
                'headOfDepartment' => 'Dr. Michael Chen',
                'experience' => '12+ Years',
                'specialization' => 'General Surgery',
                'phone' => '+93 775054045',
                'email' => 'surgery@bayazidrokhan.com'
            ],
            3 => [
                'id' => 3,
                'name' => 'Gynecology',
                'image' => '/images/departments/gyncology.jpg',
                'color' => '#8b5cf6',
                'description' => 'Specialized women\'s health services including reproductive health, pregnancy care, and gynecological treatments.',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'fullDescription' => 'Our Gynecology department provides comprehensive women\'s health services, including reproductive health, pregnancy care, and gynecological treatments. We offer compassionate care in a comfortable environment with state-of-the-art facilities.',
                'headOfDepartment' => 'Dr. Emily Rodriguez',
                'experience' => '10+ Years',
                'specialization' => 'Obstetrics & Gynecology',
                'phone' => '+93 775054046',
                'email' => 'gynecology@bayazidrokhan.com'
            ],
            4 => [
                'id' => 4,
                'name' => 'Pediatrics',
                'image' => '/images/departments/pediatric.jpg',
                'color' => '#f59e0b',
                'description' => 'Comprehensive healthcare for infants, children, and adolescents with specialized pediatric care and treatments.',
                'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z',
                'fullDescription' => 'Our Pediatrics department is dedicated to providing comprehensive healthcare for infants, children, and adolescents. Our pediatric specialists create a child-friendly environment while delivering expert medical care tailored to young patients.',
                'headOfDepartment' => 'Dr. David Kim',
                'experience' => '8+ Years',
                'specialization' => 'Pediatrics',
                'phone' => '+93 775054047',
                'email' => 'pediatrics@bayazidrokhan.com'
            ],
            5 => [
                'id' => 5,
                'name' => 'Dental',
                'image' => '/images/departments/dental.jpg',
                'color' => '#10b981',
                'description' => 'Complete dental care services including preventive, restorative, and cosmetic dentistry for all ages.',
                'icon' => 'M7 4V2a1 1 0 011-1h4a1 1 0 011 1v2m-5 0h6m-6 0a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2V6a2 2 0 00-2-2M7 4a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2V6a2 2 0 00-2-2',
                'fullDescription' => 'Our Dental department offers comprehensive oral healthcare services including preventive, restorative, and cosmetic dentistry. We use advanced dental technology to provide comfortable and effective treatments for patients of all ages.',
                'headOfDepartment' => 'Dr. Lisa Wang',
                'experience' => '6+ Years',
                'specialization' => 'General Dentistry',
                'phone' => '+93 775054048',
                'email' => 'dental@bayazidrokhan.com'
            ]
        ];

        $this->department = $departments[$departmentId] ?? $departments[1];
        $this->loadDepartmentSpecificData();
    }

    public function loadDepartmentSpecificData()
    {
        // Load doctors for this department
        $this->doctors = [
            [
                'name' => $this->department['headOfDepartment'],
                'specialization' => $this->department['specialization'],
                'experience' => $this->department['experience'],
                'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'rating' => 4.9
            ],
            [
                'name' => 'Dr. Ahmed Hassan',
                'specialization' => $this->department['specialization'],
                'experience' => '10+ Years',
                'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'rating' => 4.8
            ],
            [
                'name' => 'Dr. Fatima Al-Zahra',
                'specialization' => $this->department['specialization'],
                'experience' => '8+ Years',
                'image' => 'https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'rating' => 4.7
            ]
        ];

        // Load services for this department
        $this->services = [
            'Primary Care Services',
            'Diagnostic Testing',
            'Preventive Medicine',
            'Chronic Disease Management',
            'Health Screenings',
            'Emergency Consultations',
            'Follow-up Care',
            'Patient Education'
        ];

        // Load equipment for this department
        $this->equipment = [
            'Advanced Diagnostic Equipment',
            'State-of-the-art Treatment Tools',
            'Digital Imaging Systems',
            'Laboratory Facilities',
            'Emergency Response Equipment',
            'Patient Monitoring Systems'
        ];

        // Load statistics for this department
        $this->stats = [
            'patients_treated' => rand(5000, 15000),
            'success_rate' => rand(95, 99),
            'years_experience' => rand(5, 20),
            'specialists' => rand(8, 25)
        ];
    }

    public function bookAppointment()
    {
        // Handle appointment booking
        session()->flash('message', 'Appointment booking request sent successfully!');
    }

    public function render()
    {
        return view('livewire.department-details');
    }
}
