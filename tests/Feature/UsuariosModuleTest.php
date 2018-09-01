<?php
namespace Tests\Feature;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuariosModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testloadigPage()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios')
        ->assertSee('Juan');
    }
    /** @test */
    function testDetailtest()
    {
    	$this->get('/usuarios/1')
    	->assertStatus(200)
    	->assertSee('Datos de Usuario');
    }
    /** @test */
    function create_a_new_user()
    {
        $this->post('/usuarios/',[
            'name' => 'Duilio',
            'email' => 'example@example.com',
            'password' => '1234',
        ]);
        $this->assertDatabaseHas('users',[
            'name' => 'Duilio',
            'email' => 'example@example.com',
        ]);
    }
}
