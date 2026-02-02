<?php

declare(strict_types=1);

namespace Tests;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = 'localhost:8000';
        $this->assertSame('localhost:8000', Request::uri());
    }
}
