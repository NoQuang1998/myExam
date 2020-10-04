<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Apple',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'SamSung',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'Xiaomi',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ];

        Categories::insert($data);
    }
}
