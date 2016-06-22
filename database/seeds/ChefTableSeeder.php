<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ChefTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chef')->insert([
            ['nom' => "Freismuth",
                'prenom' => "Arnaud",
                'login' => "nono",
                'email' => "arnaudfreismuth@gmail.com",
                'password' => bcrypt('coucou'),
                'date_naissance' => "1994-09-09",
                'sexe' => "M",
                'photo' => "arnaudFreismuth.png",],
            ['nom' => "Freismuth",
                'prenom' => "Aline",
                'login' => "aline",
                'email' => "alinefreismuth@gmail.com",
                'password' => bcrypt('coucou'),
                'date_naissance' => "1997-12-10",
                'sexe' => "F",
                'photo' => "alineFreismuth.png",],
            ['nom' => "Colin",
                'prenom' => "Marie-Claire",
                'login' => "colinou",
                'email' => "mcolin@gmail.com",
                'password' => bcrypt('coucou'),
                'date_naissance' => "1981-08-20",
                'sexe' => "F",
                'photo' => "marieclaireColin.png",],
            ['nom' => "Bieth",
                'prenom' => "Mallory",
                'login' => "mallo",
                'email' => "mallo@gmail.com",
                'password' => bcrypt('coucou'),
                'date_naissance' => "1997-12-15",
                'sexe' => "F",
                'photo' => "malloryBieth.png",]
        ]);
    }
}
