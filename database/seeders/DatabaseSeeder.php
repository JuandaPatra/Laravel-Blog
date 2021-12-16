<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Rahmad Juanda Patra',
        //     'email' => 'patrajuanda10@gmail.com',
        //     'password' => bcrypt(12345),
        //     'is_admin' =>0

        // ]);

        Category::create([
            'name' => 'Web Programmer',
            'slug' => 'web-programmer'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 3,
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolores!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, velit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, iure! Sit pariatur nemo laboriosam voluptates consequatur, neque, qui error similique mollitia quisquam accusamus, perferendis nobis consectetur quaerat delectus? Beatae rerum corrupti itaque animi numquam facilis dolorum excepturi ea ab et! </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus maxime enim placeat inventore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut delectus ad harum perspiciatis rem quae laborum aliquam quo, eos repellendus Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maxime sunt laborum eveniet, voluptatem, fugiat corporis explicabo dignissimos illum, in non similique facere ut? Nam blanditiis error rem earum explicabo.</p>',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'title'=> 'Judul Kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolores!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, velit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, iure! Sit pariatur nemo laboriosam voluptates consequatur, neque, qui error similique mollitia quisquam accusamus, perferendis nobis consectetur quaerat delectus? Beatae rerum corrupti itaque animi numquam facilis dolorum excepturi ea ab et! </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus maxime enim placeat inventore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut delectus ad harum perspiciatis rem quae laborum aliquam quo, eos repellendus Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maxime sunt laborum eveniet, voluptatem, fugiat corporis explicabo dignissimos illum, in non similique facere ut? Nam blanditiis error rem earum explicabo.</p>',
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'title'=> 'Judul Ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolores!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, velit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, iure! Sit pariatur nemo laboriosam voluptates consequatur, neque, qui error similique mollitia quisquam accusamus, perferendis nobis consectetur quaerat delectus? Beatae rerum corrupti itaque animi numquam facilis dolorum excepturi ea ab et! </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus maxime enim placeat inventore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut delectus ad harum perspiciatis rem quae laborum aliquam quo, eos repellendus Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maxime sunt laborum eveniet, voluptatem, fugiat corporis explicabo dignissimos illum, in non similique facere ut? Nam blanditiis error rem earum explicabo.</p>',
        //     'user_id' => 3
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'title'=> 'Judul Keempat',
        //     'slug'=> 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolores!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, velit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, iure! Sit pariatur nemo laboriosam voluptates consequatur, neque, qui error similique mollitia quisquam accusamus, perferendis nobis consectetur quaerat delectus? Beatae rerum corrupti itaque animi numquam facilis dolorum excepturi ea ab et! </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus maxime enim placeat inventore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut delectus ad harum perspiciatis rem quae laborum aliquam quo, eos repellendus Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maxime sunt laborum eveniet, voluptatem, fugiat corporis explicabo dignissimos illum, in non similique facere ut? Nam blanditiis error rem earum explicabo.</p>',
        //     'user_id' => 1
        // ]);


    }
}
