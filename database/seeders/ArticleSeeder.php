<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'email' => config('mail.from.address'),
        ]);

        $commentsCount = 5;

        Article::factory()
            ->count(10)
            ->for($user)
            ->hasComments($commentsCount)
            ->create([
                'comments_count' => $commentsCount,
            ]);
    }
}
