<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use PHPUnit\Framework\TestCase;
use Mockery as m;


class UserRepositoryTest extends TestCase
{
    protected function makeRepository($connection)
    {
        return new UserRepository($connection);
    }

    protected function mockDatabaseConnection()
    {
        return $connection = m::mock(Connection::class);
    }

    public function test_create_or_update_invalid_id()
    {
        $c = $this->mockDatabaseConnection();
        $repo = $this->makeRepository($c);

        // mock request
        $request = new Request();
        // invalid id
        $id = -1;

        $cond = $repo.createOrUpdate(-1, $request);
        $this->expectException(ModelNotFoundException::class);
    }

    public function test_create()
    {
        $c = $this->mockDatabaseConnection();
        $repo = $this->makeRepository($c);

        // mock request
        $request = new Request();

        $this->assertNotNull($repo.createOrUpdate($request))
    }

    public function test_update()
    {
        $c = $this->mockDatabaseConnection();
        $repo = $this->makeRepository($c);

        // mock request add data
        $request = new Request();
        // valid id
        $id = 1;

        $this->assertNotNull($repo.createOrUpdate(,$request))
    }
}