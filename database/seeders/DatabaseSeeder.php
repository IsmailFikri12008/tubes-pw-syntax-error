<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ismail Fikri',
            'email' => '203040008@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Fikri Ismail ',
        //     'email' => '203040000@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(3)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit. Phasellus libero dolor, pellentesque a maximus id, consectetur suscipit quam. Nullam eget pellentesque mi, et facilisis mi. Fusce tristique mi leo, in varius magna aliquam eu. Vivamus lobortis nec mi in dapibus. Nullam vitae sapien pulvinar, lobortis sem vel, consectetur tellus. Proin tincidunt erat urna, a lobortis eros tincidunt sit amet. Aliquam erat volutpat. Nullam a ex at nibh iaculis porttitor ac pulvinar dui. Praesent ullamcorper malesuada dui sed aliquet. Maecenas sit amet erat vitae est suscipit fermentum. Donec vitae justo eu.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit. Phasellus libero dolor, pellentesque a maximus id, consectetur suscipit quam. Nullam eget pellentesque mi, et facilisis mi. Fusce tristique mi leo, in varius magna aliquam eu. Vivamus lobortis nec mi in dapibus. Nullam vitae sapien pulvinar, lobortis sem vel, consectetur tellus. Proin tincidunt erat urna, a lobortis eros tincidunt sit amet. Aliquam erat volutpat. Nullam a ex at nibh iaculis porttitor ac pulvinar dui. Praesent ullamcorper malesuada dui sed aliquet. Maecenas sit amet erat vitae est suscipit fermentum. Donec vitae justo eu.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit. Phasellus libero dolor, pellentesque a maximus id, consectetur suscipit quam. Nullam eget pellentesque mi, et facilisis mi. Fusce tristique mi leo, in varius magna aliquam eu. Vivamus lobortis nec mi in dapibus. Nullam vitae sapien pulvinar, lobortis sem vel, consectetur tellus. Proin tincidunt erat urna, a lobortis eros tincidunt sit amet. Aliquam erat volutpat. Nullam a ex at nibh iaculis porttitor ac pulvinar dui. Praesent ullamcorper malesuada dui sed aliquet. Maecenas sit amet erat vitae est suscipit fermentum. Donec vitae justo eu.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi nulla, eleifend a nibh at, consectetur laoreet elit. Phasellus libero dolor, pellentesque a maximus id, consectetur suscipit quam. Nullam eget pellentesque mi, et facilisis mi. Fusce tristique mi leo, in varius magna aliquam eu. Vivamus lobortis nec mi in dapibus. Nullam vitae sapien pulvinar, lobortis sem vel, consectetur tellus. Proin tincidunt erat urna, a lobortis eros tincidunt sit amet. Aliquam erat volutpat. Nullam a ex at nibh iaculis porttitor ac pulvinar dui. Praesent ullamcorper malesuada dui sed aliquet. Maecenas sit amet erat vitae est suscipit fermentum. Donec vitae justo eu.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
