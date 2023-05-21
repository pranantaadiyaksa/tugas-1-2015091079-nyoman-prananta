<?php

namespace App\Models;



class post
{
   static $blog_posts = [
    [
        "title" => "judul post pertama",
        "slug" => "judul-post-pertama",
        "autor" => "maan",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ad culpa aspernatur, placeat nihil praesentium aut aliquam alias necessitatibus odio incidunt magni dicta expedita labore mollitia perferendis assumenda consequuntur eaque quod in aliquid. Doloremque similique rem placeat maxime quam nihil recusandae exercitationem sit consequatur deserunt vel, unde commodi nesciunt distinctio, accusantium ipsum! Quibusdam fugit earum quam libero, reprehenderit ea voluptatem corrupti necessitatibus obcaecati ex possimus quisquam nobis molestias rem porro praesentium saepe veritatis officia vitae beatae voluptatum modi unde neque!"
    ],
    [
        "title" => "judul post ke dua",
        "slug" => "judul-post-kedua",
        "autor" => "adi",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ducimus cum voluptatum facilis ea velit blanditiis laudantium sequi enim quisquam praesentium repudiandae ad ratione explicabo adipisci tenetur ab harum rem amet, sint odit voluptates corporis? Accusantium modi blanditiis sint vel velit libero sunt aut repudiandae, doloribus iure delectus, dolorem tempora esse? Ipsum soluta atque repellat, ducimus totam, harum ipsa neque adipisci libero a minima quam rem architecto, iusto eius voluptates facilis facere nesciunt accusamus sapiente! Necessitatibus numquam hic molestiae cum odio doloremque labore sed facilis odit totam ducimus, inventore vel minus placeat dolores sit ut maxime ipsam. Voluptatum, tempore architecto."
    ],
    
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }

}
