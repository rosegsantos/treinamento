<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected  $table = 'usuario';

    public function run()
    {
        for($i=0;$i<2;$i++){
            DB::table('usuario')->insert([
                'nome' => str_random(10),
                'apelido' => str_random(5),
                'login' => str_random(5),
                'senha' => bcrypt('secret')

            ]);
        }
    }
}
