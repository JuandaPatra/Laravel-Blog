<?php

namespace App\Models;



class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rahmad Juanda Patra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloribus perferendis, fuga dignissimos nisi error. Quidem voluptatibus voluptatum veniam similique beatae doloremque. Aperiam est quod doloremque dolores accusamus provident esse velit alias praesentium dolor! Voluptates provident, qui magnam adipisci numquam voluptas placeat voluptate quae saepe porro dolore id ipsum illo! Officiis ea fuga, exercitationem veritatis mollitia quod vitae dolorum omnis magnam adipisci quam temporibus expedita minus harum nihil voluptate commodi excepturi earum a explicabo neque. Enim consequatur minima fugit atque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ibrahim Naufal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloribus perferendis, fuga dignissimos nisi error. Quidem voluptatibus voluptatum veniam similique beatae doloremque. Aperiam est quod doloremque dolores accusamus provident esse velit alias praesentium dolor! Voluptates provident, qui magnam adipisci numquam voluptas placeat voluptate quae saepe porro dolore id ipsum illo! Officiis ea fuga, exercitationem veritatis mollitia quod vitae dolorum omnis magnam adipisci quam temporibus expedita minus harum nihil voluptate commodi excepturi earum a explicabo neque. Enim consequatur minima fugit atque?"
        ]
        
        ];

        public static function all(){
            return collect(self::$blog_post);
        }

        public static function find($slug){
            $post = static::all();
            return $post->firstWhere('slug', $slug);

        }
}
