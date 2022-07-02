<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $commentsCount = 5;

        Article::factory()
            ->count(10)
            ->hasComments($commentsCount)
            ->create([
                'comments_count' => $commentsCount,
            ]);
    }
}
