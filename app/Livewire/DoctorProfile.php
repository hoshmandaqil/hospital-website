<?php

namespace App\Livewire;

use Livewire\Component;

class DoctorProfile extends Component
{
    public $doctor;
    public $education = [];
    public $experience = [];
    public $specializations = [];
    public $achievements = [];
    public $availability = [];
    public $reviews = [];
    public $languages = [];
    public $certifications = [];

    // Booking modal properties
    public $showBookingModal = false;
    public $patientName = '';
    public $patientEmail = '';
    public $patientPhone = '';
    public $appointmentDate = '';
    public $appointmentTime = '';
    public $reason = '';

    public function mount($doctorId = null)
    {
        $this->loadDoctorData($doctorId);
    }

    public function loadDoctorData($doctorId)
    {
        $doctors = [
            1 => [
                'id' => 1,
                'name' => 'Dr. Sarah Johnson',
                'specialty' => 'Cardiologist',
                'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '15+ Years',
                'rating' => 4.9,
                'department' => 'Cardiology',
                'phone' => '+93 775054044',
                'email' => 'sarah.johnson@bayazidrokhan.com',
                'bio' => 'Dr. Sarah Johnson is a highly experienced cardiologist with over 15 years of expertise in treating cardiovascular diseases. She specializes in interventional cardiology and has performed thousands of successful procedures.',
                'fullBio' => 'Dr. Sarah Johnson is a board-certified cardiologist with extensive experience in diagnosing and treating cardiovascular diseases. She completed her medical degree at Harvard Medical School and completed her residency at Johns Hopkins Hospital. Dr. Johnson specializes in interventional cardiology, heart failure management, and preventive cardiology. She has published numerous research papers in leading medical journals and is recognized as a leading expert in her field.',
                'consultationFee' => 150,
                'nextAvailable' => '2024-01-15',
                'location' => 'Cardiology Department, 3rd Floor'
            ],
            2 => [
                'id' => 2,
                'name' => 'Dr. Michael Chen',
                'specialty' => 'Orthopedic Surgeon',
                'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '12+ Years',
                'rating' => 4.8,
                'department' => 'Orthopedics',
                'phone' => '+93 775054045',
                'email' => 'michael.chen@bayazidrokhan.com',
                'bio' => 'Dr. Michael Chen is a skilled orthopedic surgeon specializing in joint replacement and sports medicine. He has helped thousands of patients regain their mobility and quality of life.',
                'fullBio' => 'Dr. Michael Chen is a fellowship-trained orthopedic surgeon with expertise in joint replacement, sports medicine, and minimally invasive surgery. He graduated from Stanford Medical School and completed his orthopedic residency at the Mayo Clinic. Dr. Chen specializes in hip and knee replacements, arthroscopic surgery, and sports injury treatment. He is known for his innovative surgical techniques and excellent patient outcomes.',
                'consultationFee' => 200,
                'nextAvailable' => '2024-01-16',
                'location' => 'Orthopedics Department, 2nd Floor'
            ],
            3 => [
                'id' => 3,
                'name' => 'Dr. Emily Rodriguez',
                'specialty' => 'Pediatrician',
                'image' => 'https://images.unsplash.com/photo-1594824388850-8890a4d4a8b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '10+ Years',
                'rating' => 4.9,
                'department' => 'Pediatrics',
                'phone' => '+93 775054046',
                'email' => 'emily.rodriguez@bayazidrokhan.com',
                'bio' => 'Dr. Emily Rodriguez is a compassionate pediatrician dedicated to providing comprehensive healthcare for children from infancy through adolescence.',
                'fullBio' => 'Dr. Emily Rodriguez is a board-certified pediatrician with over 10 years of experience in child healthcare. She completed her medical degree at Yale Medical School and her pediatric residency at Children\'s Hospital of Philadelphia. Dr. Rodriguez specializes in general pediatrics, developmental pediatrics, and adolescent medicine. She is known for her gentle approach with children and her ability to communicate effectively with both patients and parents.',
                'consultationFee' => 120,
                'nextAvailable' => '2024-01-14',
                'location' => 'Pediatrics Department, 1st Floor'
            ],
            4 => [
                'id' => 4,
                'name' => 'Dr. David Kim',
                'specialty' => 'Dental Surgeon',
                'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'experience' => '8+ Years',
                'rating' => 4.7,
                'department' => 'Dentistry',
                'phone' => '+93 775054047',
                'email' => 'david.kim@bayazidrokhan.com',
                'bio' => 'Dr. David Kim is an experienced dental surgeon specializing in oral and maxillofacial surgery, cosmetic dentistry, and dental implants.',
                'fullBio' => 'Dr. David Kim is a board-certified oral and maxillofacial surgeon with expertise in complex dental procedures and facial reconstruction. He graduated from UCLA School of Dentistry and completed his surgical residency at the University of California San Francisco. Dr. Kim specializes in dental implants, wisdom tooth extraction, jaw surgery, and cosmetic dental procedures. He is known for his precision and attention to detail in surgical procedures.',
                'consultationFee' => 100,
                'nextAvailable' => '2024-01-17',
                'location' => 'Dental Department, Ground Floor'
            ]
        ];

        // Ensure we have a valid doctor ID, default to 1 if not provided or invalid
        $doctorId = $doctorId ?? 1;
        $doctorId = is_numeric($doctorId) ? (int)$doctorId : 1;

        // Get the doctor data or default to first doctor
        $this->doctor = $doctors[$doctorId] ?? $doctors[1];

        // Ensure doctor is not null
        if (!$this->doctor) {
            $this->doctor = $doctors[1];
        }

        $this->loadDoctorSpecificData();
    }

    public function loadDoctorSpecificData()
    {
        // Load education
        $this->education = [
            [
                'degree' => 'Doctor of Medicine (MD)',
                'institution' => 'Harvard Medical School',
                'year' => '2008',
                'specialization' => 'Internal Medicine'
            ],
            [
                'degree' => 'Bachelor of Science (BS)',
                'institution' => 'Stanford University',
                'year' => '2004',
                'specialization' => 'Biology'
            ]
        ];

        // Load experience
        $this->experience = [
            [
                'position' => 'Senior Cardiologist',
                'institution' => 'Bayazid Rokhan Hospital',
                'duration' => '2018 - Present',
                'description' => 'Leading the cardiology department and performing complex cardiac procedures'
            ],
            [
                'position' => 'Cardiologist',
                'institution' => 'Johns Hopkins Hospital',
                'duration' => '2012 - 2018',
                'description' => 'Specialized in interventional cardiology and heart failure management'
            ],
            [
                'position' => 'Resident Physician',
                'institution' => 'Massachusetts General Hospital',
                'duration' => '2008 - 2012',
                'description' => 'Completed internal medicine residency with focus on cardiovascular diseases'
            ]
        ];

        // Load specializations
        $this->specializations = [
            'Interventional Cardiology',
            'Heart Failure Management',
            'Preventive Cardiology',
            'Cardiac Imaging',
            'Electrophysiology',
            'Valvular Heart Disease'
        ];

        // Load achievements
        $this->achievements = [
            [
                'title' => 'Best Cardiologist Award',
                'year' => '2023',
                'description' => 'Recognized for outstanding patient care and clinical excellence'
            ],
            [
                'title' => 'Research Excellence Award',
                'year' => '2022',
                'description' => 'Published 15+ research papers in leading medical journals'
            ],
            [
                'title' => 'Patient Choice Award',
                'year' => '2021',
                'description' => 'Voted by patients as the most compassionate doctor'
            ]
        ];

        // Load availability
        $this->availability = [
            'Monday' => '9:00 AM - 5:00 PM',
            'Tuesday' => '9:00 AM - 5:00 PM',
            'Wednesday' => '9:00 AM - 5:00 PM',
            'Thursday' => '9:00 AM - 5:00 PM',
            'Friday' => '9:00 AM - 3:00 PM',
            'Saturday' => '10:00 AM - 2:00 PM',
            'Sunday' => 'Closed'
        ];

        // Load reviews
        $this->reviews = [
            [
                'patient' => 'Ahmad Hassan',
                'rating' => 5,
                'comment' => 'Dr. Johnson is an exceptional cardiologist. Her expertise and compassionate care helped me recover from my heart condition. Highly recommended!',
                'date' => '2024-01-10'
            ],
            [
                'patient' => 'Fatima Al-Zahra',
                'rating' => 5,
                'comment' => 'Professional, knowledgeable, and caring. Dr. Johnson took the time to explain everything clearly and made me feel comfortable throughout my treatment.',
                'date' => '2024-01-08'
            ],
            [
                'patient' => 'Mohammad Ali',
                'rating' => 4,
                'comment' => 'Great doctor with excellent bedside manner. The treatment was successful and I\'m feeling much better now.',
                'date' => '2024-01-05'
            ]
        ];

        // Load languages
        $this->languages = ['English', 'Dari', 'Pashto', 'Arabic'];

        // Load certifications
        $this->certifications = [
            'Board Certified in Internal Medicine',
            'Fellowship in Cardiovascular Disease',
            'Advanced Cardiac Life Support (ACLS)',
            'Basic Life Support (BLS)',
            'Echocardiography Certification'
        ];
    }

    public function openBookingModal()
    {
        $this->showBookingModal = true;
        $this->resetBookingForm();
    }

    public function closeBookingModal()
    {
        $this->showBookingModal = false;
        $this->resetBookingForm();
    }

    public function resetBookingForm()
    {
        $this->patientName = '';
        $this->patientEmail = '';
        $this->patientPhone = '';
        $this->appointmentDate = '';
        $this->appointmentTime = '';
        $this->reason = '';
    }

    public function bookAppointment()
    {
        $this->validate([
            'patientName' => 'required|min:2',
            'patientEmail' => 'required|email',
            'patientPhone' => 'required|min:10',
            'appointmentDate' => 'required|date|after:today',
            'appointmentTime' => 'required',
            'reason' => 'required|min:10'
        ]);

        // Here you would typically save to database
        // For now, we'll just show a success message

        $doctorName = $this->doctor['name'] ?? 'the doctor';
        session()->flash('message', 'Appointment request sent successfully! ' . $doctorName . ' will contact you soon.');
        $this->closeBookingModal();
    }

    public function sendMessage()
    {
        // Handle message sending
        $doctorName = $this->doctor['name'] ?? 'the doctor';
        $lastName = explode(' ', $doctorName)[1] ?? 'the doctor';
        session()->flash('message', 'Message sent successfully! Dr. ' . $lastName . ' will respond within 24 hours.');
    }

    public function render()
    {
        return view('livewire.doctor-profile');
    }
}
