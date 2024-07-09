<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ensure there are users to associate with blog posts
        $user1 = User::firstOrCreate(
            ['email' => 'mats1@example.com'],
            [
                'name' => 'Mats Johnson',
                'password' => Hash::make('password'),
                'is_admin' => true,
            ]
        );

        $user2 = User::firstOrCreate(
            ['email' => 'mats2@example.com'],
            [
                'name' => 'Emily Davis',
                'password' => Hash::make('password'),
                'is_admin' => false,
            ]
        );

        // Ensure there are categories to associate with blog posts
        $categories = [
            'Duty' => Category::firstOrCreate(['name' => 'Duty']),
            'Habit' => Category::firstOrCreate(['name' => 'Habit']),
            'Fun' => Category::firstOrCreate(['name' => 'Fun']),
            'Productivity' => Category::firstOrCreate(['name' => 'Productivity']),
            'Wellness' => Category::firstOrCreate(['name' => 'Wellness']),
        ];

        // Create blog posts with realistic data
        $posts = [
            [
                'title' => '5 Tips to Stay on Top of Your Daily Duties',
                'content' => 'Managing daily tasks can be overwhelming. Here are 5 tips to help you stay organized and efficient.',
                'user_id' => $user1->id,
                'published_at' => now(),
                'category_id' => $categories['Duty']->id,
                'image' => 'images/tips_duties.jpg',
            ],
            [
                'title' => 'Building Healthy Habits: A Guide to Success',
                'content' => 'Learn how to build and maintain healthy habits that can improve your daily life and well-being.',
                'user_id' => $user1->id,
                'published_at' => now(),
                'category_id' => $categories['Habit']->id,
                'image' => 'images/healthy_habits.jpg',
            ],
            [
                'title' => '10 Fun Activities to Boost Your Mood',
                'content' => 'Discover 10 fun and engaging activities that can help lift your spirits and improve your mental health.',
                'user_id' => $user2->id,
                'published_at' => now(),
                'category_id' => $categories['Fun']->id,
                'image' => 'images/fun_activities.jpg',
            ],
            [
                'title' => 'How to Balance Work and Personal Life',
                'content' => 'Struggling to balance work and personal life? Here are some strategies to help you achieve harmony.',
                'user_id' => $user2->id,
                'published_at' => now(),
                'category_id' => $categories['Duty']->id,
                'image' => 'images/work_life_balance.jpg',
            ],
            [
                'title' => 'Maximizing Productivity with Simple Techniques',
                'content' => 'Increase your productivity with these simple yet effective techniques. Get more done in less time.',
                'user_id' => $user1->id,
                'published_at' => now(),
                'category_id' => $categories['Productivity']->id,
                'image' => 'images/max_productivity.jpg',
            ],
            [
                'title' => 'The Importance of Wellness in Daily Life',
                'content' => 'Wellness is crucial for a happy and healthy life. Learn how to incorporate wellness practices into your routine.',
                'user_id' => $user2->id,
                'published_at' => now(),
                'category_id' => $categories['Wellness']->id,
                'image' => 'images/daily_wellness.jpg',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
