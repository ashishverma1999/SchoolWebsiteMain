<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $schoolName = config('school.name');
        $schoolLocation = config('school.location');

        $banners = [
            [
                'image' => 'assets/images/banner/banner1.jpg',
                'title' => 'Welcome to ' . $schoolName,
                'subtitle' => $schoolLocation,
            ],
            [
                'image' => 'assets/images/banner/banner2.jpg',
                'title' => 'Empowering Minds, Shaping Futures',
                'subtitle' => 'Excellence in Education & Character Building',
            ],
            [
                'image' => 'assets/images/banner/banner3.jpg',
                'title' => 'Modern Infrastructure & Facilities',
                'subtitle' => 'Nurturing Potential in Every Student',
            ],
            [
                'image' => 'assets/images/banner/banner4.jpg',
                'title' => 'Dedicated Faculty & Staff',
                'subtitle' => 'Guiding Students Towards Excellence',
            ]
        ];

        $notices = [
            ['id' => 1, 'date' => '12-Aug-2026', 'title' => 'Admission Open for Session 2026-27'],
            ['id' => 2, 'date' => '05-Aug-2026', 'title' => 'Independence Day Celebration Rehearsal Notice'],
            ['id' => 3, 'date' => '25-Jul-2026', 'title' => 'Periodic Test-1 Schedule Released for Classes I to XII'],
            ['id' => 4, 'date' => '10-Jul-2026', 'title' => 'Parent-Teacher Meeting (PTM) Scheduled for Upcoming Saturday'],
        ];

        $events = [
            ['date' => '15-Aug-2026', 'title' => '79th Independence Day Celebration'],
            ['date' => '05-Sep-2026', 'title' => 'Teachers\' Day Function & Student Performance'],
            ['date' => '14-Nov-2026', 'title' => 'Annual Sports Meet & Children\'s Day Carnival'],
            ['date' => '25-Dec-2026', 'title' => 'Christmas Day Celebration'],
        ];

        $toppersX = [
            ['name' => 'Aditya Sharma', 'percentage' => '98.4%', 'rank' => '1st Rank', 'year' => '2024-25', 'image' => 'assets/images/toppers/student1.jpg'],
            ['name' => 'Priya Verma', 'percentage' => '97.2%', 'rank' => '2nd Rank', 'year' => '2024-25', 'image' => 'assets/images/toppers/student2.jpg'],
            ['name' => 'Rohan Gupta', 'percentage' => '96.5%', 'rank' => '3rd Rank', 'year' => '2024-25', 'image' => 'assets/images/toppers/student3.jpg'],
        ];

        $toppersXII = [
            ['name' => 'Ananya Singh', 'percentage' => '97.8%', 'stream' => 'Science', 'rank' => '1st Rank', 'year' => '2024-25', 'image' => 'assets/images/toppers/student4.jpg'],
            ['name' => 'Shivam Mishra', 'percentage' => '96.4%', 'stream' => 'Commerce', 'rank' => '2nd Rank', 'year' => '2024-25', 'image' => 'assets/images/toppers/student5.jpg'],
            ['name' => 'Kavya Pandey', 'percentage' => '95.8%', 'stream' => 'Science', 'rank' => '3rd Rank', 'year' => '2024-25', 'image' => 'assets/images/toppers/student6.jpg'],
        ];

        $testimonials = [
            [
                'name' => 'Aarav Sharma',
                'role' => 'Student',
                'rating' => 4,
                'quote' => '"We are extremely happy with School. The teachers are dedicated, and the curriculum is well-structured. Our child has shown remarkable growth."',
            ],
            [
                'name' => 'Priya Patel',
                'role' => 'Student',
                'rating' => 4,
                'quote' => '"The school provides an inspiring and supportive environment. The modern computer labs, sports facilities, and caring teachers make every day exciting."',
            ],
            [
                'name' => 'Rajesh Gupta',
                'role' => 'Parent',
                'rating' => 5,
                'quote' => '"St. Anthony\'s School has exceeded our expectations. The balance between academic excellence and moral values makes it the ideal place for student development."',
            ],
            [
                'name' => 'Sneha Verma',
                'role' => 'Student',
                'rating' => 4,
                'quote' => '"I love the interactive learning approach and outdoor adventure activities. The teachers encourage us to explore our potential in every field."',
            ],
        ];

        $blogs = [
            [
                'title' => 'Meet Our Faculty',
                'excerpt' => 'Our team of experienced, passionate educators who nurture every child....',
                'author' => 'Admin',
                'date' => 'Aug 08, 2025',
                'image' => 'assets/images/blog/blog-2025-08-08-172249.jpg',
            ],
            [
                'title' => 'Infrastructure and Facilities',
                'excerpt' => 'A tour of our state-of-the-art facilities including smart classrooms, labs, and library....',
                'author' => 'Admin',
                'date' => 'Aug 08, 2025',
                'image' => 'assets/images/blog/blog-2025-08-08-172249.jpg',
            ],
            [
                'title' => 'Admission Process 2025-2026',
                'excerpt' => 'Everything you need to know about enrolling your child at St. Anthony\'s Convent School....',
                'author' => 'Admin',
                'date' => 'Aug 08, 2025',
                'image' => 'assets/images/blog/blog-2025-08-08-172249.jpg',
            ],
            [
                'title' => 'Student Achievements',
                'excerpt' => 'Celebrating the success stories of our talented students in academics and sports....',
                'author' => 'Admin',
                'date' => 'Aug 08, 2025',
                'image' => 'assets/images/blog/blog-2025-08-08-172249.jpg',
            ],
            [
                'title' => 'Holistic Student Development',
                'excerpt' => 'How we foster leadership, creativity, and moral discipline alongside academic excellence....',
                'author' => 'Admin',
                'date' => 'Aug 08, 2025',
                'image' => 'assets/images/blog/blog-2025-08-08-172249.jpg',
            ],
        ];

        return view('home', compact('banners', 'notices', 'events', 'toppersX', 'toppersXII', 'testimonials', 'blogs'));
    }
}
