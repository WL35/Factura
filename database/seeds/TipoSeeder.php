<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipos')->insert(['tip_descripcion'=>'Sueldos y Salarios']);
        DB::table('tipos')->insert(['tip_descripcion'=>'Viveres']);
        DB::table('tipos')->insert(['tip_descripcion'=>'Ocio']);
        DB::table('tipos')->insert(['tip_descripcion'=>'Educación']);
    }
}
