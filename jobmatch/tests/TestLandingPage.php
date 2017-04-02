<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestLandingPage extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    //Test response of Landing Page
    public function testResponse()
    {
        $this->visit('/');
        $this->assertResponseStatus(200);
    }
    //Test Home page is Landing page
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Welcome');
    }
    //Test Sign in button of Landing page
    public function testLogin()
    {
        $this->visit('/')
            ->click('Sign In')
            ->see('Login');
    }
    //Test Sign up button of Landing Page
    public function testSignup()
    {
        $this->visit('/')
            ->click('Sign In')
            ->see('Register');
    }
    public function testHomebutton()
    {
        $this->visit('/')
            ->click('Home')
            ->see('Login');
    }
    public function testLogininNavigation()
    {
        $this->visit('/')
            ->click('Login')
            ->see('Login');
    }
    public function testRegisinNavigation()
    {
        $this->visit('/')
            ->click('Register')
            ->see('Register');
    }
}
