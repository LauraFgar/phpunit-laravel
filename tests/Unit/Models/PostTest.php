<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
  
    public function test_set_email()
    {
        $post = new Post();
        $post->name = 'Proyecto de Test';

        $this->assertEquals('proyecto de test', $post->name);
    }

    public function test_get_slug_email()
    {
        $post = new Post();
        $post->name = 'Proyecto de Test';

        $this->assertEquals('proyecto-de-test', $post->slug);
    }

    public function test_get_href()
    {
        $post = new Post();
        $post->name = 'Proyecto de Test';

        $this->assertEquals('blog/proyecto-de-test', $post->href());
    }
}
