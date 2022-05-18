<?php

use Illuminate\Database\Seeder;

class Clientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clientes')->insert(['cli_ruc'=>'999999999','cli_nombres'=>'Vida nueva']);        
        DB::table('clientes')->insert(['cli_ruc'=>'888888888','cli_nombres'=>'Tecno Mega']);        
    }
}
