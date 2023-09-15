<?php

namespace Database\Seeders;
use App\Models\Section;
use App\Models\Topic;
use App\Models\NestedTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::factory()
        ->count(3)
        ->has(Topic::factory()->count(2)->has(NestedTopic::factory()->count(2)))
        ->create(); 
       
    }
}
