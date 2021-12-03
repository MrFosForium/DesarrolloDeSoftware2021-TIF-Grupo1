<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::truncate();

        Usuario::create([
            'Nombre' => 'Matias',
            'Apellido' => 'Olazar',
            'Escuela' => 'ESET',
            'Correo' => 'matiselacome@gmail.com',
            'Clave' => 'esverdad123',
        ]);
        Usuario::create([
            'Nombre' => 'Emiliano',
            'Apellido' => 'Dominguez',
            'Escuela' => 'ESET',
            'Correo' => 'emielmejor@gmail.com',
            'Clave' => 'totalmente123',
        ]);
    }
}
