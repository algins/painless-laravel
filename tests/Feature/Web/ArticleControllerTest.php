<?php

namespace Tests\Feature;

use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $response = $this->get(route('articles.index'));
        $response->assertOk();
    }
}
