<?php

use App\Job;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JobTest extends TestCase
{


    use DatabaseMigrations;

    public function testJobsCanBeDeleted(){

        $user = factory(App\User::class)->create();

        $job = $user->jobs()->create([
            'title' => 'Welder',
            'wage' => 70.50,
        ]);

        $job->delete();

        $this->notSeeInDatabase('jobs', ['id' => 1, 'title' => 'Welder', 'wage' => 70.50]);

    }

    /** @test */
    public function testJobsCanBeCreated()
    {

        $user = factory(App\User::class)->create();


        $job = $user->jobs()->create([
            'title' => 'Welder',
            'wage' => 70.50,
        ]);

        $found_job = Job::find(1);

        $this->assertEquals($found_job->title, 'Welder');
        $this->assertEquals($found_job->wage, 70.50);

        $this->seeInDatabase('jobs', ['id' => 1, 'title' => 'Welder', 'wage' => 70.50]);
    }
}
