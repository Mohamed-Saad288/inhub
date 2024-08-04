<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

//        Employee::create([
//            'name' => 'موظف رقم واحد',
//            'email' => 'emp@gmail.com',
//            'password' => Hash::make('password'),
//            'phone_number' => '01029869612',
//            'is_manger' => 0
//        ]);

//        Setting::create([
//            'whatsapp' => '01029869611',
//            'phone' => '01029869611',
//            'email' => 'mohamed.saadd288@gmail.com',
//            'facebook' => 'https://www.facebook.com/profile.php?id=100023249790165',
//            'x' => 'https://x.com/Mohamed87451013',
//            'instagram' => 'https://www.instagram.com/mohamed.saad447/',
//            'linkedin' => 'https://www.linkedin.com/in/mohamed-saad-6b7a2a282/',
//        ]);
    }
}
