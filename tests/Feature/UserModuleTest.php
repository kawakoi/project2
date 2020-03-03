<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_show_the_user_list()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('');

    }
    public function test_it_show_a_default_message_if_the_user_list_is_empty()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Lucas')
            ->assertSee('Alguien');

    }

    public function test_it_loads_user_details_page()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando el detalle del usuario 5');

    }

    public function test_it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear un Nuevo Ususario');
    }

    public function test_it_loads_the_edit_user_page(){

        //$this->withoutExceptionHandling();
        $this->get('/usuarios/5/edit')
            ->assertStatus(200)
            ->assertSee('Edita el usuario 5');
    }
}
