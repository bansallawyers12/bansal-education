<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Course;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard
     */
    public function index()
    {
        $stats = [
            'total_pages' => Page::count(),
            'published_pages' => Page::where('status', 'published')->count(),
            'draft_pages' => Page::where('status', 'draft')->count(),
            'total_courses' => Course::count(),
            'total_testimonials' => Testimonial::count(),
            'recent_pages' => Page::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
