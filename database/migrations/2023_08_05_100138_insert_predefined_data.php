<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::table('plans')->insert([
            [
                'id' => 1,
                'type' => 'Personal',
                'name' => 'Top-up',
                'code' => 'BMP-00007',
                'price' => '0.00',
                'icon' => '/icon-arcade.svg',
                'slug' => 'top-up',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 10MB", "Single File Send", "Normal Delivery"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ],
            [
                'id' => 2,
                'type' => 'Business',
                'name' => 'Top-up',
                'code' => 'BMP-00006',
                'price' => '0.00',
                'icon' => '/icon-arcade.svg',
                'slug' => 'top-up',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 10MB", "Single File Send", "Normal Delivery"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ],
            [
                'id' => 3,
                'type' => 'Personal',
                'name' => 'Personal Starter',
                'code' => 'PAG-00000',
                'price' => '10.99',
                'icon' => '/icon-arcade.svg',
                'slug' => 'personal-starter',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 50MB", "Single File Send", "Normal Delivery", "Register Delivery(extra charge)", "Special Delivery(extra charge)"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ],
            [
                'id' => 4,
                'type' => 'Personal',
                'name' => 'Personal Basic',
                'code' => 'PMB-00001',
                'price' => '12.99',
                'icon' => '/icon-arcade.svg',
                'slug' => 'personal-basic',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 50MB", "Single File Send", "Normal Delivery", "Register Delivery(extra charge)", "Special Delivery(extra charge)"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ],
            [
                'id' => 5,
                'type' => 'Personal',
                'name' => 'Personal Premium',
                'code' => 'PMP-00002',
                'price' => '15.90',
                'icon' => '/icon-arcade.svg',
                'slug' => 'personal-premium',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 50MB", "Single File Send", "Normal Delivery", "Register Delivery(extra charge)", "Special Delivery(extra charge)"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ],
            [
                'id' => 6,
                'type' => 'Business',
                'name' => 'Business Starter',
                'code' => 'BAG-00003',
                'price' => '15.99',
                'icon' => '/icon-arcade.svg',
                'slug' => 'business-starter',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 50MB", "Single File Send", "Normal Delivery", "Register Delivery(extra charge)", "Special Delivery(extra charge)"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ],
            [
                'id' => 7,
                'type' => 'Business',
                'name' => 'Business Basic',
                'code' => 'BMB-00004',
                'price' => '20.99',
                'icon' => '/icon-arcade.svg',
                'slug' => 'business-basic',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 50MB", "Single File Send", "Normal Delivery", "Register Delivery(extra charge)", "Special Delivery(extra charge)"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ],
            [
                'id' => 8,
                'type' => 'Business',
                'name' => 'Business Premium',
                'code' => 'BMP-00005',
                'price' => '25.99',
                'icon' => '/icon-arcade.svg',
                'slug' => 'business-premium',
                'stripe_plan' => '',
                'description' => 'Best option for personal use & for your next project.',
                'message' => 'Best option for personal use & for your next project.',
                'options' => '["Max Size 50MB", "Single File Send", "Normal Delivery", "Register Delivery(extra charge)", "Special Delivery(extra charge)"]',
                'created_at' => '2023-06-14 11:18:06',
                'updated_at' => '2023-06-14 11:18:06'
            ]
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Since this is an insert operation, we don't need to define the down method.
    }
};
