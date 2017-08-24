<?php

use Illuminate\Database\Seeder;

class UserModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5000)->create()->each(function (Faker\Generator $faker) {
	        return [
		        'name' => $faker->name,
		        'email' => $faker->safeEmail,
		        'city' => $faker->city,
		        'state' => $faker->country,
		        'password' => bcrypt(str_random(10)),
		        'remember_token' => str_random(10),
	        ];
        });
    }
}
