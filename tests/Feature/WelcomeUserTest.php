<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_welcomes_users_with_nickname(){
        $this->get('saludo/pepe/chorizo')
            ->assertStatus(200)
            ->assertSee("Bienvenido pepe, tu apodo es chorizo");
    }

    public function test_it_welcomes_users_without_nickname(){
        $this->get('saludo/pepe')
            ->assertStatus(200)
            ->assertSee("Bienvenido pepe, No tienes Apodo");


    }

}
//Cread una ruta ,con su prueba correspondiente
//   /usuarios/{ID del usuario aquí}/edit

/*Desafio adicional:
La Id solo puede ser un entero y deberias escribir una prueba
 comprobar que la URL /usuarios/texto/edit no es valida
*/

//Que es el standar PSR-4

