<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Juan Rafael',
            'email' => 'juan_curbelo@cifpzonzamas.es',
            'password' => Hash::make('2daw.pass'),
        ]);

        $libro = new Libro();
        $libro->titulo = 'El eco del silencio';
        $libro->autor = 'María López';
        $libro->anho = '2001';
        $libro->genero = 'NV';
        $libro->descripcion = 'Una H íntima sobre recuerdos y decisiones pasadas.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Sombras del futuro';
        $libro->autor = 'Carlos Méndez';
        $libro->anho = '2015';
        $libro->genero = 'CF';
        $libro->descripcion = 'La humanidad enfrenta las consecuencias de sus avances tecnológicos.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El último reino';
        $libro->autor = 'Laura Fernández';
        $libro->anho = '1998';
        $libro->genero = 'FN';
        $libro->descripcion = 'Un mundo mágico al borde de la destrucción.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Voces del pasado';
        $libro->autor = 'Antonio Ruiz';
        $libro->anho = '2007';
        $libro->genero = 'H';
        $libro->descripcion = 'Relatos que reconstruyen momentos olvidados.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'La noche eterna';
        $libro->autor = 'Sofía Navarro';
        $libro->anho = '2020';
        $libro->genero = 'T';
        $libro->descripcion = 'El miedo se esconde donde menos se espera.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Cartas sin destino';
        $libro->autor = 'Javier Morales';
        $libro->anho = '2012';
        $libro->genero = 'T';
        $libro->descripcion = 'Una H de amor contada a través de cartas.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Más allá del horizonte';
        $libro->autor = 'Elena Torres';
        $libro->anho = '2005';
        $libro->genero = 'NV';
        $libro->descripcion = 'Un viaje que cambia la vida de sus protagonistas.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El código oculto';
        $libro->autor = 'Miguel Santos';
        $libro->anho = '2018';
        $libro->genero = 'NV';
        $libro->descripcion = 'Nada es lo que parece en este thriller tecnológico.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Cenizas del ayer';
        $libro->autor = 'Patricia Gómez';
        $libro->anho = '1995';
        $libro->genero = 'NV';
        $libro->descripcion = 'El pasado vuelve para exigir respuestas.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'La ciudad invisible';
        $libro->autor = 'Daniel Herrera';
        $libro->anho = '2010';
        $libro->genero = 'FN';
        $libro->descripcion = 'Una ciudad que solo algunos pueden ver.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Fragmentos de verdad';
        $libro->autor = 'Lucía Peña';
        $libro->anho = '2003';
        $libro->genero = 'FN';
        $libro->descripcion = 'Reflexiones sobre la sociedad moderna.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El guardián del bosque';
        $libro->autor = 'Raúl Castro';
        $libro->anho = '1999';
        $libro->genero = 'FN';
        $libro->descripcion = 'Una antigua promesa protege el equilibrio natural.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Tiempo prestado';
        $libro->autor = 'Isabel Romero';
        $libro->anho = '2016';
        $libro->genero = 'NV';
        $libro->descripcion = 'Cada segundo cuenta cuando el tiempo se agota.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'La ruta perdida';
        $libro->autor = 'Fernando León';
        $libro->anho = '2008';
        $libro->genero = 'NV';
        $libro->descripcion = 'Un mapa antiguo guía a lo desconocido.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Sueños de acero';
        $libro->autor = 'Andrea Molina';
        $libro->anho = '2021';
        $libro->genero = 'CF';
        $libro->descripcion = 'Robots y humanos luchan por coexistir.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El reflejo oscuro';
        $libro->autor = 'Hugo Vidal';
        $libro->anho = '2013';
        $libro->genero = 'T';
        $libro->descripcion = 'El verdadero monstruo vive dentro.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Palabras al viento';
        $libro->autor = 'Carmen Salas';
        $libro->anho = '1997';
        $libro->genero = 'NV';
        $libro->descripcion = 'Versos que exploran el alma humana.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'La frontera del miedo';
        $libro->autor = 'Óscar Núñez';
        $libro->anho = '2019';
        $libro->genero = 'NV';
        $libro->descripcion = 'Cruzar la línea nunca fue tan peligroso.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Ecos del mar';
        $libro->autor = 'Beatriz Ríos';
        $libro->anho = '2004';
        $libro->genero = 'NV';
        $libro->descripcion = 'El océano guarda secretos profundos.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El pacto';
        $libro->autor = 'Samuel Ortega';
        $libro->anho = '2011';
        $libro->genero = 'NV';
        $libro->descripcion = 'Una decisión que cambia varias vidas.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Horizonte rojo';
        $libro->autor = 'Natalia Cruz';
        $libro->anho = '2022';
        $libro->genero = 'CF';
        $libro->descripcion = 'La colonización de Marte no sale como se esperaba.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El viajero inmóvil';
        $libro->autor = 'Iván Pardo';
        $libro->anho = '1996';
        $libro->genero = 'NV';
        $libro->descripcion = 'Un viaje interior sin moverse del sitio.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Sombras en la pared';
        $libro->autor = 'Marta Aguilar';
        $libro->anho = '2009';
        $libro->genero = 'T';
        $libro->descripcion = 'La casa esconde presencias inquietantes.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'La melodía rota';
        $libro->autor = 'Pablo Serrano';
        $libro->anho = '2002';
        $libro->genero = 'NV';
        $libro->descripcion = 'La música como salvación y condena.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El sendero oculto';
        $libro->autor = 'Rosa Valdés';
        $libro->anho = '2014';
        $libro->genero = 'NV';
        $libro->descripcion = 'Un camino secreto lleva a una verdad inesperada.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Luz de invierno';
        $libro->autor = 'Alberto Cano';
        $libro->anho = '1994';
        $libro->genero = 'T';
        $libro->descripcion = 'Un amor que nace en el frío.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'El umbral';
        $libro->autor = 'Clara Méndez';
        $libro->anho = '2017';
        $libro->genero = 'NV';
        $libro->descripcion = 'Una puerta que nunca debió abrirse.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Caminos cruzados';
        $libro->autor = 'Diego Fuentes';
        $libro->anho = '2006';
        $libro->genero = 'NV';
        $libro->descripcion = 'Hs que se entrelazan inesperadamente.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'La última señal';
        $libro->autor = 'Verónica Gil';
        $libro->anho = '2023';
        $libro->genero = 'CF';
        $libro->descripcion = 'Una transmisión cambia el destino del planeta.';
        $libro->save();

        $libro = new Libro();
        $libro->titulo = 'Memorias de polvo';
        $libro->autor = 'Julián Reyes';
        $libro->anho = '1993';
        $libro->genero = 'H';
        $libro->descripcion = 'El paso del tiempo contado desde el olvido.';
        $libro->save();


        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);

        $createPost = Permission::create(['name' => 'create post']);
        $editPost = Permission::create(['name' => 'edit post']);
        $deletePost = Permission::create(['name' => 'delete post']);

        $admin->givePermissionTo($createPost, $editPost, $deletePost);
        $editor->givePermissionTo($editPost);


        $user = User::find(2);
        $user->assignRole('admin');

    }
}
