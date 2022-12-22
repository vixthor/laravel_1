<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'POst One',
                'excerpt' => 'Summary of Post one',
                'body' => 'Body of post one',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'POst Two',
                'excerpt' => 'Summary of Post two',
                'body' => 'Body of post two',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 1,
            ],
        ];
        foreach($posts as $Key => $value) {
            Post::create($value);
        }
    }
}
