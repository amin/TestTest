<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Database\QueryBuilder;
use PDO;

class QueryBuilderTest extends TestCase
{
    public function test_query_builder_select()
    {
        $pdo = new PDO('sqlite::memory:');
        $database = new QueryBuilder($pdo);

        $this->assertSame("SELECT * FROM pokemon", $database->select()->from('pokemon')->getQuery());
    }

    public function test_query_builder_limit()
    {
        $pdo = new PDO('sqlite::memory:');
        $database = new QueryBuilder($pdo);

        $this->assertSame("SELECT * FROM pokemon LIMIT 2", $database->select()->from('pokemon')->limit(2)->getQuery());
    }
}
