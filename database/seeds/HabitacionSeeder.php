<?php

use Illuminate\Database\Seeder;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('habitaciones')->insert([
      'nombre'=>'SINGLE ROOM',
      'personas'=>1,
      'edadminima'=>0,
      'edadmaxima'=>100
      ]);
      DB::table('habitaciones')->insert([
      'nombre'=>'DOUBLE ROOM',
      'personas'=>2,
      'edadminima'=>0,
      'edadmaxima'=>100
      ]);
      DB::table('habitaciones')->insert([
      'nombre'=>'ADULT SHARING ROOM',
      'personas'=>5,
      'edadminima'=>18,
      'edadmaxima'=>100
      ]);
      DB::table('habitaciones')->insert([
      'nombre'=>'JUNIOR SHARING ROOM',
      'personas'=>5,
      'edadminima'=>12,
      'edadmaxima'=>17
      ]);
      DB::table('habitaciones')->insert([
      'nombre'=>'KID SHARING ROOM',
      'personas'=>5,
      'edadminima'=>3,
      'edadmaxima'=>11
      ]);
      DB::table('habitaciones')->insert([
      'nombre'=>'EXTRA ROOM',
      'personas'=>5,
      'edadminima'=>3,
      'edadmaxima'=>11
      ]);
      DB::table('habitaciones')->insert([
      'nombre'=>'EXTRA NIGHT',
      'personas'=>5,
      'edadminima'=>3,
      'edadmaxima'=>11
      ]);
    }
}
