<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $memberships = [
            [
                'name' => 'Basic Plan',
                'description' => 'Perfect for small households looking to stay organized.',
                'price' => 9.99,
                'features' => [
                    'Up to 2 people per household',
                    'Basic task management',
                    'Standard reminders',
                    'Access to community support',
                ],
            ],
            [
                'name' => 'Standard Plan',
                'description' => 'Ideal for medium-sized households needing more features.',
                'price' => 19.99,
                'features' => [
                    'Up to 4 people per household',
                    'Advanced task management',
                    'Priority reminders',
                    'Access to community support',
                    'Customizable task templates',
                ],
            ],
            [
                'name' => 'Premium Plan',
                'description' => 'Best for large households and those seeking comprehensive features.',
                'price' => 29.99,
                'features' => [
                    'Up to 6 people per household',
                    'Advanced task management',
                    'Priority reminders',
                    'Access to premium support',
                    'Customizable task templates',
                    'Exclusive wellness and habit-building content',
                ],
            ],
        ];

        foreach ($memberships as $membership) {
            Membership::create($membership);
        }
    }
}
