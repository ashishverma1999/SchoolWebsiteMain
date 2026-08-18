<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function objectives()
    {
        return view('objectives');
    }

    public function principal()
    {
        return view('principal');
    }

    public function admission()
    {
        return view('admission');
    }

    public function fees()
    {
        return view('fees');
    }

    public function curriculum()
    {
        return view('content-page', [
            'title' => 'Curriculum & Academic Program',
            'subtitle' => 'Comprehensive learning framework designed for holistic excellence.',
            'content' => '
                <h4>Our Academic Philosophy</h4>
                <p>' . config('school.name') . ' follows a comprehensive, student-centric curriculum aligned with modern educational standards. We emphasize conceptual clarity, analytical thinking, creativity, and moral integrity.</p>
                <h4 class="mt-4">Subjects Offered</h4>
                <ul>
                    <li>Primary & Middle Wing: English, Hindi, Mathematics, Science, Social Studies, Computer Science, Environmental Studies, Value Education, Art & Craft.</li>
                    <li>Secondary Wing (Classes IX-X): English Language & Literature, Mathematics, Science (Physics, Chemistry, Biology), Social Science, Hindi / Information Technology.</li>
                    <li>Senior Secondary Wing (Classes XI-XII): Science Stream (PCM / PCB with Computer Science / Physical Education) & Commerce Stream (Accountancy, Business Studies, Economics, Mathematics / Informatics Practices).</li>
                </ul>
            '
        ]);
    }

    public function facilityDetail($slug)
    {
        $facilities = [
            'library' => [
                'title' => 'School Library',
                'subtitle' => 'A storehouse of knowledge and quiet learning.',
                'image' => 'assets/images/facilities/library.jpg',
                'description' => 'Our school library is well-stocked with over 10,000 reference books, encyclopedias, journals, educational periodicals, and fiction. It provides a peaceful atmosphere for independent study and research.'
            ],
            'computer-lab' => [
                'title' => 'Computer Laboratory',
                'subtitle' => 'State-of-the-art digital infrastructure.',
                'image' => 'assets/images/facilities/computer-lab.jpg',
                'description' => 'Equipped with high-speed internet, modern desktop PCs, high-definition monitors, and updated software tools to ensure practical technological literacy for all age groups.'
            ],
            'physics-lab' => [
                'title' => 'Physics Laboratory',
                'subtitle' => 'Experiential learning through practical experiments.',
                'image' => 'assets/images/facilities/physics-lab.jpg',
                'description' => 'Fully equipped physics laboratory featuring precision optics instruments, electrical circuit kits, mechanics apparatus, and safety measures.'
            ],
            'chemistry-lab' => [
                'title' => 'Chemistry Laboratory',
                'subtitle' => 'Safe and hands-on chemical experimentation.',
                'image' => 'assets/images/facilities/chemistry-lab.jpg',
                'description' => 'Spacious, well-ventilated lab with modern glassware, chemical reagents, safety gas lines, fume hoods, and emergency eye-wash stations.'
            ],
            'biology-lab' => [
                'title' => 'Biology Laboratory',
                'subtitle' => 'Exploring the science of life and living organisms.',
                'image' => 'assets/images/facilities/biology-lab.jpg',
                'description' => 'Features high-magnification microscopes, preserved biological specimens, detailed anatomical models, slides, and charts.'
            ],
            'parent-teacher-interaction' => [
                'title' => 'Parent-Teacher Interaction',
                'subtitle' => 'Collaborative partnership for student development.',
                'image' => 'assets/images/facilities/ptm.jpg',
                'description' => 'We maintain regular communication with parents through scheduled PTMs, progress cards, mobile app notifications, and personal counseling sessions.'
            ],
        ];

        $facility = $facilities[$slug] ?? [
            'title' => str_replace('-', ' ', ucfirst($slug)),
            'subtitle' => 'Facility details for ' . config('school.name'),
            'image' => null,
            'description' => 'Detailed information about this facility is available at ' . config('school.name') . ', ' . config('school.location') . '.'
        ];

        return view('content-page', [
            'title' => $facility['title'],
            'subtitle' => $facility['subtitle'],
            'content' => '
                <div class="facility-detail">
                    <p class="lead text-secondary">' . $facility['description'] . '</p>
                    <h5 class="mt-4 text-primary">Key Highlights:</h5>
                    <ul>
                        <li>Experienced faculty and trained lab assistants.</li>
                        <li>Strict adherence to safety standards and guidelines.</li>
                        <li>Regular updates and modern equipment upgrades.</li>
                    </ul>
                </div>
            '
        ]);
    }

    public function show($slug)
    {
        $pages = [
            'school-timings' => [
                'title' => 'School Timings',
                'subtitle' => 'Daily operational schedule',
                'content' => '
                    <table class="table table-bordered table-striped mt-3">
                        <thead class="table-dark">
                            <tr><th>Season</th><th>Session</th><th>Timings</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Summer (April - Oct)</td><td>Class PG to UKG</td><td>07:30 AM – 11:30 AM</td></tr>
                            <tr><td>Summer (April - Oct)</td><td>Class I to XII</td><td>07:30 AM – 01:30 PM</td></tr>
                            <tr><td>Winter (Nov - March)</td><td>Class PG to UKG</td><td>08:30 AM – 12:30 PM</td></tr>
                            <tr><td>Winter (Nov - March)</td><td>Class I to XII</td><td>08:30 AM – 02:00 PM</td></tr>
                        </tbody>
                    </table>
                '
            ],
            'teaching-staff' => [
                'title' => 'Teaching Staff',
                'subtitle' => 'Our highly qualified and dedicated educators',
                'content' => '
                    <p>' . config('school.name') . ' takes immense pride in its team of passionate educators who bring deep subject expertise and compassionate guidance to the classroom.</p>
                    <div class="row g-3 mt-3">
                        <div class="col-md-6"><div class="p-3 border rounded bg-light"><strong>Primary Wing:</strong> 25 Qualified PRTs</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded bg-light"><strong>Middle Wing:</strong> 20 Experienced TGTs</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded bg-light"><strong>Senior Secondary Wing:</strong> 18 Expert PGTs</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded bg-light"><strong>Specialists:</strong> Sports, Art, Music & Counselor</div></div>
                    </div>
                '
            ],
            'academic-calendar' => [
                'title' => 'Academic Calendar 2026-27',
                'subtitle' => 'Important dates and events schedule',
                'content' => '
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item d-flex justify-content-between"><span>Session Commencement</span> <strong>15 April 2026</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Summer Vacation</span> <strong>20 May – 30 June 2026</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Half-Yearly Examinations</span> <strong>10 Sept – 24 Sept 2026</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Winter Break</span> <strong>31 Dec 2026 – 10 Jan 2027</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Annual Board & School Exams</span> <strong>March 2027</strong></li>
                    </ul>
                '
            ],
            'school-infrastructure' => [
                'title' => 'School Infrastructure',
                'subtitle' => 'Campus facilities & infrastructure',
                'content' => '
                    <p>Situated in ' . config('school.location') . ', ' . config('school.name') . ' features a campus designed for safe, creative, and athletic growth.</p>
                    <ul>
                        <li>Spacious, well-ventilated smart classrooms.</li>
                        <li>Modern Science & Computer Laboratories.</li>
                        <li>Multipurpose sports grounds for Football, Cricket, Badminton & Athletics.</li>
                        <li>24/7 CCTV surveillance and security staff.</li>
                        <li>Clean drinking water filtration unit and hygienic sanitation facilities.</li>
                    </ul>
                '
            ],
            'school-management-committee' => [
                'title' => 'School Management Committee (SMC)',
                'subtitle' => 'Leadership & Governance Body',
                'content' => '
                    <p>The SMC oversees the institutional standards, administrative compliance, and academic excellence of ' . config('school.name') . '.</p>
                    <table class="table table-sm table-bordered">
                        <thead class="table-primary"><tr><th>Name</th><th>Designation</th></tr></thead>
                        <tbody>
                            <tr><td>Fr. Superior / President</td><td>Chairman</td></tr>
                            <tr><td>Principal</td><td>Member Secretary</td></tr>
                            <tr><td>Parent Representatives</td><td>Members (2)</td></tr>
                            <tr><td>Teacher Representatives</td><td>Members (2)</td></tr>
                        </tbody>
                    </table>
                '
            ]
        ];

        $page = $pages[$slug] ?? [
            'title' => str_replace('-', ' ', ucfirst($slug)),
            'subtitle' => config('school.name'),
            'content' => '<p>Information regarding this section is currently being updated for ' . config('school.name') . ', ' . config('school.location') . '.</p>'
        ];

        return view('content-page', $page);
    }

    public function toppersX()
    {
        $title = "Class X Toppers";
        $toppers = [
            ['name' => 'Aditya Sharma', 'percentage' => '98.4%', 'rank' => '1st Rank', 'year' => '2024-25', 'remarks' => 'School Topper'],
            ['name' => 'Priya Verma', 'percentage' => '97.2%', 'rank' => '2nd Rank', 'year' => '2024-25', 'remarks' => 'Science Distinction'],
            ['name' => 'Rohan Gupta', 'percentage' => '96.5%', 'rank' => '3rd Rank', 'year' => '2024-25', 'remarks' => 'Maths Centum (100/100)'],
            ['name' => 'Sneha Tripathi', 'percentage' => '95.8%', 'rank' => '4th Rank', 'year' => '2024-25', 'remarks' => 'High Achiever'],
            ['name' => 'Aman Patel', 'percentage' => '95.0%', 'rank' => '5th Rank', 'year' => '2024-25', 'remarks' => 'High Achiever'],
        ];

        return view('toppers', compact('title', 'toppers'));
    }

    public function toppersXII()
    {
        $title = "Class XII Toppers";
        $toppers = [
            ['name' => 'Ananya Singh', 'percentage' => '97.8%', 'stream' => 'Science (PCM)', 'rank' => '1st Rank', 'year' => '2024-25', 'remarks' => 'Stream Topper'],
            ['name' => 'Shivam Mishra', 'percentage' => '96.4%', 'stream' => 'Commerce', 'rank' => '2nd Rank', 'year' => '2024-25', 'remarks' => 'Commerce Topper'],
            ['name' => 'Kavya Pandey', 'percentage' => '95.8%', 'stream' => 'Science (PCB)', 'rank' => '3rd Rank', 'year' => '2024-25', 'remarks' => 'Biology Centum'],
            ['name' => 'Utkarsh Srivastava', 'percentage' => '95.2%', 'stream' => 'Commerce', 'rank' => '4th Rank', 'remarks' => 'High Achiever'],
        ];

        return view('toppers', compact('title', 'toppers'));
    }

    public function gallery()
    {
        $galleryItems = [
            ['title' => 'Independence Day Assembly - Flag Hoisting', 'category' => 'Assembly', 'image' => 'assets/images/banner/banner1.jpg'],
            ['title' => 'Tricolor Courtyard Formation', 'category' => 'Assembly', 'image' => 'assets/images/banner/banner2.jpg'],
            ['title' => 'School Group Photo & Assembly', 'category' => 'Campus', 'image' => 'assets/images/banner/banner3.jpg'],
            ['title' => 'Teaching Staff & Event Ceremony', 'category' => 'Events', 'image' => 'assets/images/banner/banner4.jpg'],
            ['title' => 'Principal Address & Speech', 'category' => 'Events', 'image' => 'assets/images/principal/principal.jpg'],
            ['title' => 'Campus Overview & Courtyard', 'category' => 'Campus', 'image' => 'assets/images/about/campus.jpg'],
            ['title' => 'School Management & Student Activity', 'category' => 'Campus', 'image' => 'assets/images/about/management.jpg'],
            ['title' => 'Summer Camp Felicitation Ceremony', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/felicitation.jpg'],
            ['title' => 'Adventure Sports - Zipline Activity', 'category' => 'Sports', 'image' => 'assets/images/facilities/zipline.jpg'],
            ['title' => 'Sports Facility - Net Climbing Challenge', 'category' => 'Sports', 'image' => 'assets/images/facilities/sports-net.jpg'],
            ['title' => 'Sports Facility - Rope Bridge Crossing', 'category' => 'Sports', 'image' => 'assets/images/facilities/rope-bridge.jpg'],
            ['title' => 'Sports Facility - Wall Climbing', 'category' => 'Sports', 'image' => 'assets/images/facilities/climbing.jpg'],
            ['title' => 'Independence Day Assembly View 1', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-1.jpg'],
            ['title' => 'Independence Day Assembly View 2', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-2.jpg'],
            ['title' => 'Independence Day Assembly View 3', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-3.jpg'],
            ['title' => 'Independence Day Assembly View 4', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-4.jpg'],
            ['title' => 'Independence Day Assembly View 5', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-5.jpg'],
            ['title' => 'Independence Day Assembly View 6', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-6.jpg'],
            ['title' => 'Independence Day Assembly View 7', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-7.jpg'],
            ['title' => 'Independence Day Assembly View 8', 'category' => 'Assembly', 'image' => 'assets/images/gallery/assembly-8.jpg'],
            ['title' => 'Summer Camp Adventure Activity 1', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-1.jpg'],
            ['title' => 'Summer Camp Adventure Activity 2', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-2.jpg'],
            ['title' => 'Summer Camp Adventure Activity 3', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-3.jpg'],
            ['title' => 'Summer Camp Adventure Activity 4', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-4.jpg'],
            ['title' => 'Summer Camp Adventure Activity 5', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-5.jpg'],
            ['title' => 'Summer Camp Adventure Activity 6', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-6.jpg'],
            ['title' => 'Summer Camp Adventure Activity 7', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-7.jpg'],
            ['title' => 'Summer Camp Adventure Activity 8', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-8.jpg'],
            ['title' => 'Summer Camp Adventure Activity 9', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-9.jpg'],
            ['title' => 'Summer Camp Adventure Activity 10', 'category' => 'Summer Camp', 'image' => 'assets/images/gallery/adventure-10.jpg'],
        ];

        return view('gallery', compact('galleryItems'));
    }

    public function tc()
    {
        return view('tc');
    }
}
