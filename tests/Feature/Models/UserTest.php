<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;//migrate

    public function test_user()
    {
        User::factory()->create([
            'email' => 'lau@gmail.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'lau@gmail.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'lau@noexiste.com'
        ]);
    }
}
