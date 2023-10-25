<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket_categories')->delete();
        DB::table('ticket_subcategories')->delete();

        $categories = [
            ['id' => 1, 'name' => 'Solicitud', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Incidencia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Autoservicio', 'created_at' => now(), 'updated_at' => now()],
        ];

        $subcategories = [
            ['id' => 1, 'name' => 'Cotización', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Arrendamiento', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'CCTV', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Desarrollo de software', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Hardware', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Software', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'redes', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'Comunicaciones de voz', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'Servicios de television', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => 'Alojamiento web / Correo electronico', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => 'Autoservicio', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('ticket_categories')->insert($categories);
        DB::table('ticket_subcategories')->insert($subcategories);
    }
}
