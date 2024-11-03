<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Post
{
    public static function all()
    {
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Abdul Aziz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cum dolorem dolores expedita suscipit non at? Placeat, est maiores ullam possimus autem perferendis obcaecati quae, aspernatur ipsam harum hic quibusdam!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Abdul Aziz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita modi quidem consectetur suscipit facere vero voluptas aut, praesentium quo optio, ratione dolor, officia numquam aspernatur odio rem perferendis sed autem!'
        ]
        ];
    }
    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if ( !$post) {
            abort(404);
        }
        return $post;
    }
}