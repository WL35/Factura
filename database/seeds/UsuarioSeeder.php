<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'usu_name'=>'admin',
            'usu_cedula'=>'1234567890',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
            'created_at'=>date('Y-m-d H:i'),
            'cat_id'=>1
        ]);
    }
}
