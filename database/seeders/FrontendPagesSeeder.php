<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\User;

class FrontendPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('is_admin', true)->first();
        if (!$admin) {
            // Create a default admin user if none exists
            $admin = User::create([
                'name' => 'Admin',
                'email' => 'admin@bansal.edu',
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]);
        }
        $authorId = $admin->id;

        $frontendPages = [
            [
                'title' => 'Home',
                'slug' => 'home',
                'route_name' => 'home',
                'status' => 'published',
                'is_homepage' => true,
                'order' => 1,
            ],
            [
                'title' => 'About Us',
                'slug' => 'about',
                'route_name' => 'about',
                'status' => 'published',
                'order' => 2,
            ],
            [
                'title' => 'Courses',
                'slug' => 'courses',
                'route_name' => 'courses',
                'status' => 'published',
                'order' => 3,
            ],
            [
                'title' => 'Student Services',
                'slug' => 'services',
                'route_name' => 'services',
                'status' => 'published',
                'order' => 4,
            ],
            [
                'title' => 'Success Stories',
                'slug' => 'testimonials',
                'route_name' => 'testimonials',
                'status' => 'published',
                'order' => 5,
            ],
            [
                'title' => 'Contact',
                'slug' => 'contact',
                'route_name' => 'contact',
                'status' => 'published',
                'order' => 6,
            ],
        ];

        foreach ($frontendPages as $pageData) {
            Page::updateOrCreate(
                ['route_name' => $pageData['route_name']],
                array_merge($pageData, [
                    'author_id' => $authorId,
                    'published_at' => now(),
                ])
            );
        }
    }
}
