<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Episode;
use App\Models\Show;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach (range(1, 20) as $showNumber) {
            $show = Show::factory()->createOne();
            foreach (range(1, rand(2, 10)) as $seasonNumber) {
                foreach (range(1, rand(4, 24)) as $episodeNumber) {
                    Episode::factory()->create([
                        'show_id' => $show->id,
                        'season' => $seasonNumber,
                        'number' => $episodeNumber,
                    ]);
                }
            }
        }

    }
}
