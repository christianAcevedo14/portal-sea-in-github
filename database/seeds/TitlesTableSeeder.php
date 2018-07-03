<?php

use App\Title;
use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            ['id' => 1, 'description' => 'Administrador de Sistemas'],
            ['id' => 2, 'description' => 'Agente Agrícola'],
            ['id' => 3, 'description' => 'Personal Secretarial del AA'],
            ['id' => 4, 'description' => 'Registrador de Datos'],

            ['id' => 10, 'description' => 'Especialista - Agricultura'],
            ['id' => 12, 'description' => 'Educador en CFC - Ciencias de la Familia y el Consumidor'],
            ['id' => 13, 'description' => 'Especialista - Ciencias de la Familia y del Consumidor'],
            ['id' => 14, 'description' => 'Educador en CFC - Ciencias de la Familia y el Consumidor  - PEAN'],
            ['id' => 15, 'description' => 'Coordinador(a) CTI'],
            ['id' => 16, 'description' => 'Coordinadora Estatal Programa PEAN'],

            ['id' => 20, 'description' => 'Especialista 4-H'],
            ['id' => 21, 'description' => 'Especialista en Recursos Externos'],
            ['id' => 22, 'description' => 'Coordinador(a) Recursos Externos SEA'],
            ['id' => 23, 'description' => 'Administrador(a) Regional SEA'],
            ['id' => 24, 'description' => 'Coordinador(a) Regional del Programa Educativo SEA'],
            ['id' => 25, 'description' => 'Especialista de Planificación y Evaluación'],
            ['id' => 26, 'description' => 'Director Auxiliar de Planificación y Evaluación'],
            ['id' => 27, 'description' => 'Líder de Área Programática (Agricultura)'],
            ['id' => 29, 'description' => 'Especialista de Medios Educativos e Información (MEI)'],

            ['id' => 30, 'description' => 'Especialista en Evaluación'],
            ['id' => 34, 'description' => 'Especialista en Desarrollo Recursos de la Comunidad (CRD)'],
            ['id' => 38, 'description' => 'Especialista en Comunicación'],

            ['id' => 40, 'description' => 'Decano Auxiliar a/c Programa Educativo del SEA'],
            ['id' => 41, 'description' => 'Especialista en Educación en Computadoras'],
            ['id' => 42, 'description' => 'Decano Asociado y Subdirector del SEA'],
            ['id' => 43, 'description' => 'Docente Facultad'],
            ['id' => 44, 'description' => 'Docente EEA'],
        ];

        foreach ($titles as $title)
        {
            Title::create($title);
        }
    }
}
