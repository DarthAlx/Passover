<?php

use Illuminate\Database\Seeder;

class VistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('vistas')->insert([
      'nombre'=>'GARDEN'
      ]);
      DB::table('vistas')->insert([
      'nombre'=>'OCEAN'
      ]);
    }
}
