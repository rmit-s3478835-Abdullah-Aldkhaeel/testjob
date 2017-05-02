<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class TestJob extends TestCase
{
    public function testBasicExample()
    {
        $this->visit('/')
            ->dontSee('Laravel 5');
    }
}
