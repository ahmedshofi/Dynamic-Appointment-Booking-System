<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     public function test_users_can_authenticate_using_the_login_screen()
     {
         $user = User::factory()->create();
 
         $response = $this->post('/login', [
             'name' => $user->name,
             'password' => 'password',
         ]);
 
         $this->assertAuthenticated();
         $response->assertRedirect(RouteServiceProvider::HOME);
     }
 
     
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
