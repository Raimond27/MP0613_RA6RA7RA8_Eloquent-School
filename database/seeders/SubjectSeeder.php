<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get a user ID to use as created_by
        $userId = User::first()?->id ?? 1;

        $subjects = [
            ['name' => 'English', 'type' => 'Language', 'class_id' => 1],
            ['name' => 'Mathematics', 'type' => 'Science', 'class_id' => 1],
            ['name' => 'Science', 'type' => 'Science', 'class_id' => 1],
            ['name' => 'Social Studies', 'type' => 'Social', 'class_id' => 2],
            ['name' => 'English', 'type' => 'Language', 'class_id' => 2],
            ['name' => 'Mathematics', 'type' => 'Science', 'class_id' => 2],
            ['name' => 'Physical Education', 'type' => 'Sports', 'class_id' => 3],
            ['name' => 'Art', 'type' => 'Arts', 'class_id' => 3],
            ['name' => 'Music', 'type' => 'Arts', 'class_id' => 3],
            ['name' => 'Computer Science', 'type' => 'Technology', 'class_id' => 4],
            ['name' => 'English', 'type' => 'Language', 'class_id' => 4],
            ['name' => 'History', 'type' => 'Social', 'class_id' => 5],
            ['name' => 'Geography', 'type' => 'Social', 'class_id' => 5],
            ['name' => 'Mathematics', 'type' => 'Science', 'class_id' => 5],
            ['name' => 'Chemistry', 'type' => 'Science', 'class_id' => 6],
            ['name' => 'Biology', 'type' => 'Science', 'class_id' => 6],
            ['name' => 'Physics', 'type' => 'Science', 'class_id' => 6],
            ['name' => 'English', 'type' => 'Language', 'class_id' => 7],
            ['name' => 'Hindi', 'type' => 'Language', 'class_id' => 7],
            ['name' => 'Economics', 'type' => 'Social', 'class_id' => 8],
        ];

        foreach ($subjects as $subject) {
            DB::table('subject')->insert([
                'name' => $subject['name'],
                'type' => $subject['type'],
                'by_class' => $subject['class_id'],
                'status' => 0,
                'is_delete' => 0,
                'created_by' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
