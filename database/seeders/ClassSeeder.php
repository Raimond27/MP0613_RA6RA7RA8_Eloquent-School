<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get a user ID to use as created_by
        $userId = User::first()?->id ?? 1;

        $classNames = [
            'Pre-Primary A',
            'Pre-Primary B',
            'Grade 1A',
            'Grade 1B',
            'Grade 2A',
            'Grade 2B',
            'Grade 3A',
            'Grade 3B',
            'Grade 4A',
            'Grade 4B',
            'Grade 5A',
            'Grade 5B',
            'Grade 6A',
            'Grade 6B',
            'Grade 7A',
            'Grade 7B',
            'Grade 8A',
            'Grade 8B',
            'Grade 9A',
            'Grade 9B',
        ];

        foreach ($classNames as $className) {
            DB::table('class')->insert([
                'name' => $className,
                'status' => 0,
                'is_delete' => 0,
                'created_by' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
