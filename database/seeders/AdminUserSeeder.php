<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create/update admin user with the email from login form
        $admin = User::updateOrCreate(
            ['email' => 'admin@bansaleducation.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
        
        // Also ensure any existing admin users have the correct password
        $existingAdmins = User::where('is_admin', true)->get();
        foreach ($existingAdmins as $existingAdmin) {
            if ($existingAdmin->email !== 'admin@bansaleducation.com') {
                $existingAdmin->update([
                    'password' => Hash::make('admin123'),
                    'is_admin' => true,
                ]);
            }
        }
        
        $this->command->info('Admin user setup completed!');
        $this->command->info('Email: admin@bansaleducation.com');
        $this->command->info('Password: admin123');
    }
}
