<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class UserTest extends TestCase
{
    use DatabaseMigrations;
    public function test_create_user1()
    {
        $user = users()->create([
            'name' => 'Huy',
    ]);
        $found_user = User::find(1);

        $this->assertEquals($found_user->name, 'Huy');
        $this->seeInDatabase('Huy',['id'=>1]);
    }
    public function test_create_user2()
    {
        $user = users()->create([
            'email' => 'huy@gmail.com',
        ]);
        $found_user = User::find(1);

        $this->assertEquals($found_user->email, 'huy@gmail.com');
    }
    public function test_create_user3()
    {
        $user = users()->create([
            'password' => '123',
        ]);
        $found_user = User::find(1);

        $this->assertEquals($found_user->password, '123');
    }
    public function test_create_user4()
    {
        $user = users()->create([
            'name' => 'Huy',
            'password' => '123',
            'email' => 'huy123@gmail.com',
        ]);
        $found_user = User::find(1);

        $this->assertEquals($found_user->password, '123');
    }
    public function test_delete_user1()
    {
        $user = users()->create([
            'name' => 'Huy',
        ]);
        $user->delete();
        $this->notSeeInDatabase('users',['id'=>1,'name'=>'Huy']);
    }
}
