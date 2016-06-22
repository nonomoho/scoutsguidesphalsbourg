<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');


        foreach (range(1, 30) as $index) {

            $nom = $faker->lastName;
            $sex = $faker->randomElement(array('M', 'F'));
            if ($sex == "F") {
                $prenom = $faker->firstNameFemale;
                $equipage = $faker->numberBetween(3, 4);
            } else {
                $prenom = $faker->firstNameMale;
                $equipage = $faker->numberBetween(1, 2);
            }

            DB::table('users')->insert([
                'nom' => $nom,
                'prenom' => $prenom,
                'login' => $prenom . $faker->numberBetween(1, 100),
                'email' => $nom . $prenom . "@gmail.com",
                'password' => bcrypt('coucou'),
                'date_naissance' => $faker->dateTimeBetween('-14 years', '-11 years'),
                'sexe' => $sex,
                'equipage_id' => $equipage,
            ]);
        }
        DB::table('users')->insert([
            'nom' => "Freismuth",
            'prenom' => "Arnaud",
            'login' => "nono",
            'email' => "arnaudfreismuth@gmail.com",
            'password' => bcrypt('coucou'),
            'date_naissance' => "1994-09-09",
            'sexe' => "M",
            'equipage_id' => 1,
        ]);
    }
}
