<?php

declare(strict_types=1);

use App\Exceptions\NotFoundHttpException;
use App\Http\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function test_route_request()
    {
        $router = new Router([
            '/' => __DIR__ . '/controllers/pokemon.php',
        ]);

        $this->assertSame(sprintf('%s%s', __DIR__, '/controllers/pokemon.php'), $router->direct('/'));
    }

    public function test_route_not_found()
    {
        $router = new Router([
            '/' => __DIR__ . '/controllers/pokemon.php',
        ]);

        $this->expectException(NotFoundHttpException::class);
        $router->direct('/hello');
    }
}
