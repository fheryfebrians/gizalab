<?php

namespace Database\Seeders;

use App\Models\Webinar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Webinar::create([
            'title' => "UX Design I",
            'mentor' => "Mentor 1 UX Design, Mentor 2 UX Design, Mentor 3 UX Design",
            'kuota' => "20",
            'max_kuota' => "100",
            'category' => "uxdesign"
        ]);
        
        Webinar::create([
            'title' => "UX Writing I",
            'mentor' => "Mentor 1 UX Writing, Mentor 2 UX Writing, Mentor 3 UX Writing",
            'kuota' => "100",
            'max_kuota' => "100",
            'category' => "uxwriting"
        ]);

        Webinar::create([
            'title' => "Research I",
            'mentor' => "Mentor 1 Research, Mentor 2 Research, Mentor 3 Research",
            'kuota' => "70",
            'max_kuota' => "100",
            'category' => "research"
        ]);

        Webinar::create([
            'title' => "Product Design I",
            'mentor' => "Mentor 1 Product Design, Mentor 2 Product Design, Mentor 3 Product Design",
            'kuota' => "60",
            'max_kuota' => "100",
            'category' => "product_design"
        ]);

        Webinar::create([
            'title' => "UI Design I",
            'mentor' => "Mentor 1 UI Design, Mentor 2 UI Design, Mentor 3 UI Design",
            'kuota' => "40",
            'max_kuota' => "100",
            'category' => "uidesign"
        ]);

        Webinar::create([
            'title' => "Interaction Design I",
            'mentor' => "Mentor 1 Interaction Design, Mentor 2 Interaction Design, Mentor 3 Interaction Design",
            'kuota' => "90",
            'max_kuota' => "100",
            'category' => "interaction_design"
        ]);
    }
}
