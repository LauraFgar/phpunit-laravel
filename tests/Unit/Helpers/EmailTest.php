<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        $resultado = Email::validate('lau@email.com');
        $this->assertTrue($resultado);
    }
}
