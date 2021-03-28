<?php

use Illuminate\Database\Seeder;
use App\Dog;
use Faker\Generator as Faker;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {

            $dog =new Dog();
            $dog->name = $faker->text(10);
            $dog->age = rand(1, 15);
            $dog->race = $faker->text(10);
            $dog->gender = $faker->text(5);
            $dog->weight = rand(3, 45);
            $dog->pic = 'https://www.bil-jac.com/Images/DogPlaceholder.svg';
            $dog->save();
        }
    }
}
