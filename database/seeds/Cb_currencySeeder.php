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
}

