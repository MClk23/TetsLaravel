<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Mauricio Cardona',
            'email'=> 'lmangel36@misena.edu.co'

        ]);

        $user2 = User::make([
            'name' => 'Stiven Cano',
            'email'=> 'lmangel77554m@gmail.com'

        ]);

        $this->assertTrue($user1->email != $user2->email && $user1->name != $user2->name);

    }

    public function test_delete_user(){
        $user = User::factory()->count(1)->make();

        $user =User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);

    }

    public function test_guarda_nuevo_user(){
        $respuesta = $this->post('/register' , [
            'name' => 'Mauricio',
            'email' =>'lmangel36@misena.edu.co',
            'password' => '27242Mauricio',
            'password_confirmation' => '27242Mauricio'
        ]);

        return $respuesta->assertRedirect('/home');
    }

    public function tets_loguea_user(){
        $respuesta = $this->post('/login', [
            'email' => 'mauricio@gmail.com',
            'password'=> 'mauricio09000'
        ]);
        return $respuesta->assertRedirect('/home');
    }
}
