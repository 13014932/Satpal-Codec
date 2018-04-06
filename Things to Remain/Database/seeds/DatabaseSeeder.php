<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

        {

<!-- ENTER '1200' RECORD TO VENDORS TABLE BY 'Vendor' MODEL -->

            factory(App\Models\Vendor::class, 1200)->create();
			
<!-- Rough Data for Further REfRENCE -->			
            // whiteshirt SKU
            /*$product_title = array('Hugh & Crye', 'Ralph Lauren Black Label', 'Tom Ford', 'Turnbull & Asser','Brooks Brothers');
            $product_price=array(900,786,1190,680,983);

            for ($i = 0; $i < 5; $i++) {
                DB::table('variants')->insert([

                    'sku' => 'whitetshirt',
                    'inventory_quantity' => 100,

                    'product_title' => $product_title[$i],
                    'price'=>$product_price[$i],


                ]);
            }*/

//            for ($i = 0; $i < 5; $i++) {
//
//                $arr[]=['vendors_name' => str_random(6), 'vendor_split' => rand(111,999), 'vendor_login_accounts' => str_random(10)];
//
//
//            }
<!-- INSERT DATA TO 'VENDORS' TABLE -->
//            DB::table('vendors')->insert(
//
//                $arr
//
//
//            );

//        $a = array(0=> $someV, 1 => $someV2)


            // $this->call(UsersTableSeeder::class);
        }

}
