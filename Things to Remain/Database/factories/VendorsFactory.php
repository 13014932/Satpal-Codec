<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 05-04-2018
 * Time: 02:07 PM
 */
use Faker\Generator as Faker;
use App\Models\Vendor;


        $factory->define(App\Models\Vendor::class, function (Faker $faker)

        {

            return [

                "vendors_name" => $faker->firstName,
                "vendor_split" => rand(11,99),
               "vendor_login_accounts" => $faker->unique()->safeEmail  // create unique email
         ];




        });