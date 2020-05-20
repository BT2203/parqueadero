<?php

use Illuminate\Database\Seeder;

class TipovehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipovehiculos')->insert([
            'nombretipoveh' => 'Automóvil',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipovehiculos')->insert([
            'nombretipoveh' => 'Motocicleta',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
