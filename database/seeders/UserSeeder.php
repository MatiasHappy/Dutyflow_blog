<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subscription;
use App\Models\Membership;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ensure there are memberships available
        $memberships = Membership::all()->keyBy('name');

        // Create non-admin users and subscribe them to a membership plan
        $users = [
            [
                'name' => 'mats',
                'email' => 'mats@mats.com',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'membership' => 'Basic Plan',
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'membership' => 'Basic Plan',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'membership' => 'Standard Plan',
            ],
            [
                'name' => 'Robert Johnson',
                'email' => 'robert@example.com',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'membership' => 'Premium Plan',
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily@example.com',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'membership' => 'Standard Plan',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'is_admin' => $userData['is_admin'],
            ]);

            Subscription::create([
                'user_id' => $user->id,
                'membership_id' => $memberships[$userData['membership']]->id,
                'status' => 'active',
            ]);
        }
    }
}
