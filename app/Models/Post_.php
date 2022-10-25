<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Suatu Sikap Untuk Bersikap Bodo Amat",
            "slug" => "judul-post-pertama",
            "author" => "Renandra Rahadian Putri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur repellat nostrum obcaecati, nemo, doloremque tempora vel quis sit enim suscipit laudantium voluptatum dolorem nesciunt. Dolor porro unde pariatur eius laborum maiores assumenda, a, aut officiis, beatae fugit optio? Cumque quidem corporis veritatis ducimus eos natus reprehenderit sed unde id assumenda laboriosam velit necessitatibus soluta nesciunt accusamus aperiam porro, consequatur odio quos est magnam dolor modi praesentium. Veritatis expedita tenetur itaque nam praesentium assumenda, deserunt molestiae facilis aliquam, accusantium quasi accusamus?"
        ],
        [
            "title" => "Suatu Sikap Untuk Bersikap Peduli",
            "slug" => "judul-post-kedua",
            "author" => "Ericko Timur Apandi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae ab cupiditate blanditiis accusamus veniam debitis, nisi repellat harum alias! Dolores quasi sequi adipisci odit repellat possimus quibusdam sapiente voluptates quidem, doloremque atque a perspiciatis corrupti labore perferendis nobis iure ad natus fugit voluptatibus. Aut voluptatem ullam ipsum libero odit ab enim non deserunt sunt maxime, cupiditate quas deleniti cum, distinctio similique nulla reprehenderit ad rerum. Laudantium vero illum unde possimus quam culpa alias minima perspiciatis architecto dicta rerum vel fugit minus officia, ratione magnam, voluptate exercitationem vitae ipsum amet! Corrupti eius, esse error dolor aspernatur veritatis nulla repellendus mollitia. Praesentium, ea. Debitis excepturi hic, odio harum nisi, sit labore officiis iure possimus nesciunt reprehenderit amet ex cupiditate expedita minus nemo doloremque fugit inventore beatae illo id laudantium voluptas! Repellat esse ab ea, quis doloribus alias omnis quidem aspernatur, numquam quibusdam nihil doloremque necessitatibus repellendus mollitia perspiciatis laudantium, porro fuga voluptas."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
