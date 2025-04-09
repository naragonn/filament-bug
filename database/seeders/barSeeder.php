<?php

namespace Database\Seeders;

use App\Models\Bar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bar::updateOrCreate(
            ['foo' => 'foo'],
            [
                'foo' => 'foo'
            ]
        );
    }
}
