<?php

use Illuminate\Database\Seeder;

use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['id' => 1, 'description' => 'Adjuntas'],
            ['id' => 2, 'description' => 'Aguada'],
            ['id' => 3, 'description' => 'Aguadilla'],
            ['id' => 4, 'description' => 'Aguadilla - San Antonio'],
            ['id' => 5, 'description' => 'Aguas Buenas'],
            ['id' => 6, 'description' => 'Aibonito'],
            ['id' => 7, 'description' => 'Aibonito - La Plata'],
            ['id' => 8, 'description' => 'Añasco'],
            ['id' => 9, 'description' => 'Añasco - Ángeles'],
            ['id' => 10, 'description' => 'Arecibo'],
            ['id' => 11, 'description' => 'Arecibo - Bajadero'],
            ['id' => 12, 'description' => 'Arecibo - Garrochales'],
            ['id' => 13, 'description' => 'Arecibo - Sábana Hoyos'],
            ['id' => 14, 'description' => 'Arroyo'],
            ['id' => 15, 'description' => 'Barceloneta'],
            ['id' => 16, 'description' => 'Barranquitas'],
            ['id' => 17, 'description' => 'Bayamón'],
            ['id' => 18, 'description' => 'Cabo Rojo'],
            ['id' => 19, 'description' => 'Cabo Rojo - Boquerón'],
            ['id' => 20, 'description' => 'Caguas'],
            ['id' => 21, 'description' => 'Camuy'],
            ['id' => 22, 'description' => 'Canóvanas'],
            ['id' => 23, 'description' => 'Carolina'],
            ['id' => 24, 'description' => 'Cataño'],
            ['id' => 25, 'description' => 'Cayey'],
            ['id' => 26, 'description' => 'Ceiba'],
            ['id' => 27, 'description' => 'Ciales'],
            ['id' => 28, 'description' => 'Cidra'],
            ['id' => 29, 'description' => 'Coamo'],
            ['id' => 30, 'description' => 'Comerío'],
            ['id' => 31, 'description' => 'Corozal'],
            ['id' => 32, 'description' => 'Culebra'],
            ['id' => 33, 'description' => 'Dorado'],
            ['id' => 34, 'description' => 'Fajardo'],
            ['id' => 35, 'description' => 'Fajardo - Puerto Real'],
            ['id' => 36, 'description' => 'Florida'],
            ['id' => 37, 'description' => 'Guánica'],
            ['id' => 38, 'description' => 'Guánica - Ensenada'],
            ['id' => 39, 'description' => 'Guayama'],
            ['id' => 40, 'description' => 'Guayama - Aguirre'],
            ['id' => 41, 'description' => 'Guayanilla'],
            ['id' => 42, 'description' => 'Guaynabo'],
            ['id' => 43, 'description' => 'Gurabo'],
            ['id' => 44, 'description' => 'Hatillo'],
            ['id' => 45, 'description' => 'Hormigueros'],
            ['id' => 46, 'description' => 'Humacao'],
            ['id' => 47, 'description' => 'Humacao - Punta Santiago'],
            ['id' => 48, 'description' => 'Isabela'],
            ['id' => 49, 'description' => 'Jayuya'],
            ['id' => 50, 'description' => 'Juana Díaz'],
            ['id' => 51, 'description' => 'Juncos'],
            ['id' => 52, 'description' => 'Lajas'],
            ['id' => 53, 'description' => 'Lares'],
            ['id' => 54, 'description' => 'Lares - Castañer'],
            ['id' => 55, 'description' => 'Las Marías'],
            ['id' => 56, 'description' => 'Las Piedras'],
            ['id' => 57, 'description' => 'Loíza'],
            ['id' => 58, 'description' => 'Luquillo'],
            ['id' => 59, 'description' => 'Manatí'],
            ['id' => 60, 'description' => 'Maricao'],
            ['id' => 61, 'description' => 'Maunabo'],
            ['id' => 62, 'description' => 'Mayagüez'],
            ['id' => 63, 'description' => 'Moca'],
            ['id' => 64, 'description' => 'Morovis'],
            ['id' => 65, 'description' => 'Naguabo'],
            ['id' => 66, 'description' => 'Naguabo - Río Blanco'],
            ['id' => 67, 'description' => 'Naranjito'],
            ['id' => 68, 'description' => 'Orocovis'],
            ['id' => 69, 'description' => 'Patillas'],
            ['id' => 70, 'description' => 'Peñuelas'],
            ['id' => 71, 'description' => 'Ponce'],
            ['id' => 72, 'description' => 'Ponce - Atocha'],
            ['id' => 73, 'description' => 'Ponce - Coto Laurel'],
            ['id' => 74, 'description' => 'Ponce - Mercedita'],
            ['id' => 75, 'description' => 'Ponce - Pámpanos'],
            ['id' => 76, 'description' => 'Ponce - Playa'],
            ['id' => 77, 'description' => 'Quebradillas'],
            ['id' => 78, 'description' => 'Rincón'],
            ['id' => 79, 'description' => 'Río Grande'],
            ['id' => 80, 'description' => 'Río Grande - Palmer'],
            ['id' => 81, 'description' => 'Sábana Grande'],
            ['id' => 82, 'description' => 'Salinas'],
            ['id' => 83, 'description' => 'San Germán'],
            ['id' => 84, 'description' => 'San Germán - Rosario'],
            ['id' => 85, 'description' => 'San Juan'],
            ['id' => 86, 'description' => 'San Juan - 65 de Infantería'],
            ['id' => 87, 'description' => 'San Juan - Barrio Obrero'],
            ['id' => 88, 'description' => 'San Juan - Caparra Heights'],
            ['id' => 89, 'description' => 'San Juan - Fernández Juncos'],
            ['id' => 90, 'description' => 'San Juan - Fort Buchanan'],
            ['id' => 91, 'description' => 'San Juan - Hato Rey'],
            ['id' => 92, 'description' => 'San Juan - Old San Juan'],
            ['id' => 93, 'description' => 'San Juan - Puerta de Tierra'],
            ['id' => 94, 'description' => 'San Juan - Río Piedras'], // rio piedras repetido con el id 65
            ['id' => 95, 'description' => 'San Juan - San José'],
            ['id' => 96, 'description' => 'San Juan - Santurce'],
            ['id' => 97, 'description' => 'San Juan - Veterans Plaza'],
            ['id' => 98, 'description' => 'San Lorenzo'],
            ['id' => 99, 'description' => 'San Sebastián'],
            ['id' => 100, 'description' => 'Santa Isabel'],
            ['id' => 101, 'description' => 'Toa Alta'],
            ['id' => 102, 'description' => 'Toa Baja'],
            ['id' => 103, 'description' => 'Toa Baja - Levittown'],
            ['id' => 104, 'description' => 'Toa Baja - Sábana Seca'],
            ['id' => 105, 'description' => 'Trujillo Alto'],
            ['id' => 106, 'description' => 'Trujillo Alto - Saint Just'],
            ['id' => 107, 'description' => 'Utuado'],
            ['id' => 108, 'description' => 'Utuado - Ángeles'],
            ['id' => 109, 'description' => 'Vega Alta'],
            ['id' => 110, 'description' => 'Vega Baja'],
            ['id' => 111, 'description' => 'Vieques'],
            ['id' => 112, 'description' => 'Villalba'],
            ['id' => 113, 'description' => 'Yabucoa'],
            ['id' => 114, 'description' => 'Yauco'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
