<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\CbCurrency;
class Cb_currencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('cb_currency')->insert([
        CbCurrency::create([
            'idcurrency'=>'7',
            'currency'=>'Euro',
            'description'=>'Euro',
            'isactive'=>'Y',
            'cursymbol'=>'E',
            'isocode'=>'EUR',
            'precisioncost'=>2.00,
            'precisionstd'=>4.00,
            'precisionprize'=>4.00

        ]);

        factory(CbCurrency::class, 15)->create();







    }


    /**

    User::create([
    //        DB::table('users')->insert([
    'name' => 'veronica jaqueline',
    'email' => 'veronica@gmail.com',
    'password' => bcrypt('vero'),
    'profession_id' => $professionId,
    'is_admin'=> true,
    ]);

    // Se crea un usuario con valores aleatorios salvo profession_id
    factory(User::class)->create([
    'profession_id'=>$professionId,
    ]);

    // Se crea un usuario con valores aleatorios
    factory(User::class, 48)->create();



     */

}

