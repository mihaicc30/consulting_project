<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('files')->insert([
            [
                'sender' => 'John Doe',
                'receiver' => 'Jane Smith',
                'downloaded' => 1,
                'files' => json_encode(['file1.pdf', 'file2.jpg']),
                'status' => 'successful',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender' => 'Alice Johnson',
                'receiver' => 'Bob Williams',
                'downloaded' => 0,
                'files' => json_encode(['file3.docx', 'file4.png']),
                'status' => 'in progress',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender' => 'Emily Davis',
                'receiver' => 'Michael Wilson',
                'downloaded' => 1,
                'files' => json_encode(['file5.txt', 'file6.jpg']),
                'status' => 'successful',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender' => 'Sarah Thompson',
                'receiver' => 'Bob Williams',
                'downloaded' => 1,
                'files' => json_encode(['file7.pdf', 'file8.png']),
                'status' => 'successful',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender' => 'Emma Martinez',
                'receiver' => 'Oliver Clark',
                'downloaded' => 0,
                'files' => json_encode(['file9.docx', 'file10.jpg']),
                'status' => 'in progress',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
