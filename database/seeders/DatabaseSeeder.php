<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Anime;
use \App\Models\Genre;

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
            'username' => 'ismail fikri',
            'email' => '203040008@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Fikri Ridwan',
            'username' => 'fikri ridwan',
            'email' => '203040001@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Nur Ihsan',
            'username' => 'nur ihsan',
            'email' => '203040025@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Salsabila',
            'username' => 'salsabila',
            'email' => '203040028@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Fikri Ismail ',
        //     'email' => '203040000@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Anime Fall',
            'slug' => 'anime-fall'
        ]);

        Category::create([
            'name' => 'Anime Spring',
            'slug' => 'anime-spring'
        ]);

        Category::create([
            'name' => 'Anime Summer',
            'slug' => 'anime-summer'
        ]);

        Category::create([
            'name' => 'Anime Winter',
            'slug' => 'anime-winter'
        ]);

        // Post::factory(20)->create();

        Genre::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);

        Genre::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);

        Genre::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);

        Genre::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Genre::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'slug' => 'thriller'
        ]);

        Genre::create([
            'name' => 'Slie of Life',
            'slug' => 'slie-of-life'
        ]);

        Genre::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Anime::create([
           'user_id' => 1,
           'category_id' => 1,
           'genre_id' => 1,
           'judul' => 'One Piece',
           'slug' => 'one-piece',
           'tipe' => 'TV',
           'episode' => '12 Episode',
           'status' => 'On Going',
           'rilis' => '10 Desember 2020',
           'primer' => '10 Desember 2020',
           'tayang' => '20 Desember 2020',
           'produser' => 'Mappa',
           'lisensi' => 'Mappa Lisensi',
           'studio' => 'Mappa Studio',
           'sumber' => 'Shounen Jump',
           'demografis' => 'Shounen',
           'durasi' => '24 Menit',
           'rating' => '2.4',
           'image' => 'Go-Toubun.jpg',
           'excerpt' => 'Ini Excerpt',
           'sinopsis' => 'Ini Sinopsis Ya Geys'
        ]);

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
