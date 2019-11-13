<?php

use App\ProgrammaticUnit;
use Illuminate\Database\Seeder;

class ProgrammaticUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programmaticUnits = [
            ['id' => 100, 'region_id' => 100, 'description' => 'Región de Arecibo'],
            ['id' => 107, 'region_id' => 100, 'description' => 'Arecibo'],
            ['id' => 114, 'region_id' => 100, 'description' => 'Camuy / Hatillo'],
            ['id' => 120, 'region_id' => 100, 'description' => 'Ciales'],
            ['id' => 128, 'region_id' => 100, 'description' => 'Florida / Barceloneta / Manatí'],
            ['id' => 142, 'region_id' => 100, 'description' => 'Lares'],
            ['id' => 152, 'region_id' => 100, 'description' => 'Morovis'],
            ['id' => 159, 'region_id' => 100, 'description' => 'Quebradillas'],
            ['id' => 172, 'region_id' => 100, 'description' => 'Utuado'],
            ['id' => 174, 'region_id' => 100, 'description' => 'Vega Baja'],

            ['id' => 200, 'region_id' => 200, 'description' => 'Región de Caguas'],
            ['id' => 213, 'region_id' => 200, 'description' => 'Caguas'],
            ['id' => 218, 'region_id' => 200, 'description' => 'Cayey / Aibonito'],
            ['id' => 221, 'region_id' => 200, 'description' => 'Cidra / Aguas Buenas'],
            ['id' => 233, 'region_id' => 200, 'description' => 'Gurabo / San Lorenzo'],
            ['id' => 244, 'region_id' => 200, 'description' => 'Las Piedras / Naguabo / Humacao / Juncos'],
            ['id' => 249, 'region_id' => 200, 'description' => 'Maunabo'],
            ['id' => 277, 'region_id' => 200, 'description' => 'Yabucoa'],

            ['id' => 300, 'region_id' => 300, 'description' => 'Región de Mayagüez'],
            ['id' => 303, 'region_id' => 300, 'description' => 'Aguadilla / Rincón'],
            ['id' => 337, 'region_id' => 300, 'description' => 'Isabela'],
            ['id' => 341, 'region_id' => 300, 'description' => 'Lajas / Cabo Rojo / Hormigueros'],
            ['id' => 344, 'region_id' => 300, 'description' => 'Las Marías / Maricao'],
            ['id' => 350, 'region_id' => 300, 'description' => 'Mayagüez / Añasco'],
            ['id' => 351, 'region_id' => 300, 'description' => 'Moca / Aguada'],
            ['id' => 352, 'region_id' => 300, 'description' => 'Mayagüez Edif. C / Ofic. 106'],
            ['id' => 362, 'region_id' => 300, 'description' => 'Sábana Grande / San Germán'],
            ['id' => 367, 'region_id' => 300, 'description' => 'San Sebastián'],

            ['id' => 400, 'region_id' => 400, 'description' => 'Región de Ponce'],
            ['id' => 401, 'region_id' => 400, 'description' => 'Adjuntas / Jayuya'],
            ['id' => 422, 'region_id' => 400, 'description' => 'Coamo'],
            ['id' => 459, 'region_id' => 400, 'description' => 'Ponce / Juana Díaz / Peñuelas'],
            ['id' => 463, 'region_id' => 400, 'description' => 'Salinas - Santa Isabel / Guayama - Arroyo / Patillas'],
            ['id' => 476, 'region_id' => 400, 'description' => 'Villalba'],
            ['id' => 478, 'region_id' => 400, 'description' => 'Yauco / Guánica / Guayanilla'],

            ['id' => 500, 'region_id' => 500, 'description' => 'Región de San Juan'],
            ['id' => 510, 'region_id' => 500, 'description' => 'Barranquitas'],
            ['id' => 511, 'region_id' => 500, 'description' => 'Cataño / Bayamón'],
            ['id' => 524, 'region_id' => 500, 'description' => 'Corozal'],
            ['id' => 527, 'region_id' => 500, 'description' => 'Fajardo / Ceiba'],
            ['id' => 546, 'region_id' => 500, 'description' => 'Luquillo'],
            ['id' => 554, 'region_id' => 500, 'description' => 'Naranjito / Comerío'],
            ['id' => 555, 'region_id' => 500, 'description' => 'Orocovis'],
            ['id' => 561, 'region_id' => 500, 'description' => 'Río Grande / Canóvanas / Loíza'],
            ['id' => 569, 'region_id' => 500, 'description' => 'Toa Baja / Toa Alta / Vega Alta / Dorado'],
            ['id' => 575, 'region_id' => 500, 'description' => 'Vieques / Culebra'],
            ['id' => 580, 'region_id' => 500, 'description' => 'Río Piedras / Guaynabo / Carolina / Trujillo Alto'],

            ['id' => 680, 'region_id' => 600, 'description' => 'Centro de Tecnología de Información'],
            ['id' => 681, 'region_id' => 600, 'description' => 'Educación Agrícola'],
            ['id' => 682, 'region_id' => 600, 'description' => 'Planificación y Evaluación'],
            ['id' => 683, 'region_id' => 600, 'description' => 'Medios Educativos e Información'],
            ['id' => 684, 'region_id' => 600, 'description' => 'Ciencias de la Familia y el Consumidor'],
            ['id' => 685, 'region_id' => 600, 'description' => 'Juventud y Clubes 4-H'],
            ['id' => 686, 'region_id' => 600, 'description' => 'Desarrollo de los Recursos de la Comunidad'],
            ['id' => 687, 'region_id' => 600, 'description' => 'Economía Agrícola y Sociología Rural'],
            ['id' => 688, 'region_id' => 600, 'description' => 'Ciencia Animal'],
            ['id' => 689, 'region_id' => 600, 'description' => 'Ciencias Agroambientales'],
            ['id' => 691, 'region_id' => 600, 'description' => 'Ingeniería Agrícola'],
            ['id' => 694, 'region_id' => 600, 'description' => 'Recursos Externos'],
            ['id' => 695, 'region_id' => 600, 'description' => 'A Nivel Isla'],
            ['id' => 696, 'region_id' => 600, 'description' => 'Fuera de Puerto Rico'],
        ];

        foreach ($programmaticUnits as $programmaticUnit)
        {
            ProgrammaticUnit::create($programmaticUnit);
        }
    }
}
