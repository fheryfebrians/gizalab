<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'image' => "/assets/images/user1.jpg",
            'name' => "User 1",
            'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim."
        ]);

        Testimonial::create([
            'image' => "/assets/images/user2.jpg",
            'name' => "User 2",
            'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim."
        ]);

        Testimonial::create([
            'image' => "/assets/images/user3.jpg",
            'name' => "User 3",
            'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim."
        ]);

        Testimonial::create([
            'image' => "/assets/images/user1.jpg",
            'name' => "User 4",
            'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim."
        ]);
    }
}
