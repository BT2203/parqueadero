<?php

use Illuminate\Database\Seeder;

class TipodocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipodocumentos')->insert([
            'nombretipodoc' => 'Cédula de Ciudadanía',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipodocumentos')->insert([
            'nombretipodoc' => 'Cédula de Extranjería',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipodocumentos')->insert([
            'nombretipodoc' => 'Licencia de Conducción',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
