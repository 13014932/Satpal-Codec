<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        for ($i = 0; $i < 5; $i++) {



            for ($j = 0; $j < 5; $j++) {
                $sku = str_random(5);
                $inventory_quantity = rand(111, 999);


                $arr[] = ['sku' => $sku, 'inventory_quantity' => $inventory_quantity, 'product_title' => str_random(5), 'price' => rand(111, 999),'title'=> str_random(7)];


            }
        }

        DB::table('variants')->insert(

            $arr


        );

//        $a = array(0=> $someV, 1 => $someV2)


        // $this->call(UsersTableSeeder::class);
    }
}
