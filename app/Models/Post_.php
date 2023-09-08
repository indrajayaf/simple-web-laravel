<?php

namespace App\Models;

class Post 
{
    private  static $blog_posts = [
        [
            'title' => "Judul Post Pertama",
            'slug' => "judul-post-pertama",
            'author' => "Fahmy Indrajaya",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat autem enim magnam veritatis nostrum voluptatum adipisci porro nemo tenetur officiis illum voluptatibus saepe culpa, minus cumque ducimus atque! Quis eius sed deleniti voluptate distinctio excepturi aut minus perspiciatis temporibus placeat blanditiis illo fugit dolor, tempora error quod recusandae. Accusantium eius sunt mollitia autem illo, temporibus sapiente facilis consequuntur culpa fugit accusamus, omnis animi eos eveniet modi aut soluta est voluptas id debitis, numquam illum dolor voluptate! Veritatis necessitatibus vel quibusdam voluptatem, doloribus hic unde reprehenderit laudantium similique debitis nemo architecto ab neque, suscipit nobis? Eveniet rerum sint doloremque! Saepe."
        ],
        [
            'title' => "Judul Post Ke dua",
            'slug' => "judul-post-kedua",
            'author' => "Milan Yunidha",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat autem enim magnam veritatis nostrum voluptatum adipisci porro nemo tenetur officiis illum voluptatibus saepe culpa, minus cumque ducimus atque! Quis eius sed deleniti voluptate distinctio excepturi aut minus perspiciatis temporibus placeat blanditiis illo fugit dolor, tempora error quod recusandae. Accusantium eius sunt mollitia autem illo, temporibus sapiente facilis consequuntur culpa fugit accusamus, omnis animi eos eveniet modi aut soluta est voluptas id debitis, numquam illum dolor voluptate! Veritatis necessitatibus vel quibusdam voluptatem, doloribus hic unde reprehenderit laudantium similique debitis nemo architecto ab neque, suscipit nobis? Eveniet rerum sint doloremque! Saepe."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts); 
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }
}
