<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Renandra Rahadian Putri',
            'email' => 'putrirenan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ericko Timur Apandi',
            'email' => 'erickotmr@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet voluptates error voluptatum! Ex, sequi ab accusamus eligendi, praesentium nam dignissimos beatae dolores deleniti explicabo voluptate, at quisquam nulla nisi alias dolore possimus illo. Deleniti corrupti tempore tempora reiciendis fugiat. Mollitia nesciunt, velit, a ullam atque neque commodi aut quas libero hic temporibus! Architecto, fugiat quibusdam? Dolore atque laborum iure cum modi voluptatibus nemo, fugiat temporibus sit sapiente, ipsam cumque! Atque repellat a molestias itaque ut vitae sit, numquam dicta eos laboriosam molestiae repudiandae reiciendis omnis explicabo illum odio consectetur sed placeat cum dolorum doloremque, libero amet. Blanditiis id aperiam, assumenda sapiente excepturi voluptatibus repellat fuga rem consequuntur incidunt natus, repudiandae minima suscipit aliquam.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet voluptates error voluptatum! Ex, sequi ab accusamus eligendi, praesentium nam dignissimos beatae dolores deleniti explicabo voluptate, at quisquam nulla nisi alias dolore possimus illo. Deleniti corrupti tempore tempora reiciendis fugiat. Mollitia nesciunt, velit, a ullam atque neque commodi aut quas libero hic temporibus! Architecto, fugiat quibusdam? Dolore atque laborum iure cum modi voluptatibus nemo, fugiat temporibus sit sapiente, ipsam cumque! Atque repellat a molestias itaque ut vitae sit, numquam dicta eos laboriosam molestiae repudiandae reiciendis omnis explicabo illum odio consectetur sed placeat cum dolorum doloremque, libero amet. Blanditiis id aperiam, assumenda sapiente excepturi voluptatibus repellat fuga rem consequuntur incidunt natus, repudiandae minima suscipit aliquam.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet voluptates error voluptatum! Ex, sequi ab accusamus eligendi, praesentium nam dignissimos beatae dolores deleniti explicabo voluptate, at quisquam nulla nisi alias dolore possimus illo. Deleniti corrupti tempore tempora reiciendis fugiat. Mollitia nesciunt, velit, a ullam atque neque commodi aut quas libero hic temporibus! Architecto, fugiat quibusdam? Dolore atque laborum iure cum modi voluptatibus nemo, fugiat temporibus sit sapiente, ipsam cumque! Atque repellat a molestias itaque ut vitae sit, numquam dicta eos laboriosam molestiae repudiandae reiciendis omnis explicabo illum odio consectetur sed placeat cum dolorum doloremque, libero amet. Blanditiis id aperiam, assumenda sapiente excepturi voluptatibus repellat fuga rem consequuntur incidunt natus, repudiandae minima suscipit aliquam.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sint iste laboriosam asperiores eum iure eveniet voluptates error voluptatum! Ex, sequi ab accusamus eligendi, praesentium nam dignissimos beatae dolores deleniti explicabo voluptate, at quisquam nulla nisi alias dolore possimus illo. Deleniti corrupti tempore tempora reiciendis fugiat. Mollitia nesciunt, velit, a ullam atque neque commodi aut quas libero hic temporibus! Architecto, fugiat quibusdam? Dolore atque laborum iure cum modi voluptatibus nemo, fugiat temporibus sit sapiente, ipsam cumque! Atque repellat a molestias itaque ut vitae sit, numquam dicta eos laboriosam molestiae repudiandae reiciendis omnis explicabo illum odio consectetur sed placeat cum dolorum doloremque, libero amet. Blanditiis id aperiam, assumenda sapiente excepturi voluptatibus repellat fuga rem consequuntur incidunt natus, repudiandae minima suscipit aliquam.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
