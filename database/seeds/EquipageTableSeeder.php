<?php

use Illuminate\Database\Seeder;

class EquipageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipage')->insert([
            ['nom' => "EquipageGarçon1",
            'sexe' => "M",],
            ['nom' => "EquipageGarçon2",
            'sexe' => "M",],
            ['nom' => "EquipageFille1",
            'sexe' => "F",],
            ['nom' => "EquipageFille2",
            'sexe' => "F",]
            ]
        );
    }
}
