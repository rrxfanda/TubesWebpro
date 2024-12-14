<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\File;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Path file JSON
        $jsonPath = database_path('seeders/events.json');

        // Baca file JSON
        $jsonData = File::get($jsonPath);
        $events = json_decode($jsonData, true);

        // Simpan ke database
        foreach ($events as $event) {
            Event::create([
                'title' => $event['title'],
                'description' => $event['description'],
                'image_url' => $event['image_url'],
                'link' => $event['link'],
            ]);
        }
    }
}
