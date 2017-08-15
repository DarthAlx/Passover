<?php

use Illuminate\Database\Seeder;

class PaqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('paquetes')->insert([
      'habitacion_id'=>1,
      'vista_id'=>1,
      'precio'=>3700.00,
      ]);
      DB::table('paquetes')->insert([
      'habitacion_id'=>1,
      'vista_id'=>2,
      'precio'=>4111.00,
      ]);

      DB::table('paquetes')->insert([
      'habitacion_id'=>2,
      'vista_id'=>1,
      'precio'=>7200.00,
      ]);
      DB::table('paquetes')->insert([
      'habitacion_id'=>2,
      'vista_id'=>2,
      'precio'=>7500.00,
      ]);

      DB::table('paquetes')->insert([
      'habitacion_id'=>3,
      'vista_id'=>1,
      'precio'=>2400.00,
      ]);
      DB::table('paquetes')->insert([
      'habitacion_id'=>3,
      'vista_id'=>2,
      'precio'=>2400.00,
      ]);

      DB::table('paquetes')->insert([
      'habitacion_id'=>4,
      'vista_id'=>1,
      'precio'=>1500.00,
      ]);
      DB::table('paquetes')->insert([
      'habitacion_id'=>4,
      'vista_id'=>2,
      'precio'=>1500.00,
      ]);

      DB::table('paquetes')->insert([
      'habitacion_id'=>5,
      'vista_id'=>1,
      'precio'=>1200.00,
      ]);
      DB::table('paquetes')->insert([
      'habitacion_id'=>5,
      'vista_id'=>2,
      'precio'=>1200.00,
      ]);

      DB::table('paquetes')->insert([
      'habitacion_id'=>6,
      'vista_id'=>1,
      'precio'=>2700.00,
      ]);
      DB::table('paquetes')->insert([
      'habitacion_id'=>6,
      'vista_id'=>2,
      'precio'=>2700.00,
      ]);

      DB::table('paquetes')->insert([
      'habitacion_id'=>7,
      'vista_id'=>1,
      'precio'=>300.00,
      ]);
      DB::table('paquetes')->insert([
      'habitacion_id'=>7,
      'vista_id'=>2,
      'precio'=>300.00,
      ]);

    }
}
