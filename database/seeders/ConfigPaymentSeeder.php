<?php

namespace Database\Seeders;
use App\Models\MasterData\ConfigPayment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //create data
        $config_payment = 
        [
            [
                'fee' => '150000',
                'vat' => '20',  //vat adalah persen
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            
        ];
        
        //array $spceialist akan memasukan data array ke table 'config_payment
        ConfigPayment::insert($config_payment);
    }
}
