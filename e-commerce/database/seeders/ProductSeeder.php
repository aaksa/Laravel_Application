<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
            'name'=>'Shirt 2',
            "price"=>"30",
            "description"=>"A best clothing ever 1",
            "category"=>"baju",
            "gallery"=>"https://cf.shopee.co.id/file/97db141e52babfc79728a2dfbe8f39a8"
        ],
        [
            'name'=>'Shirt 3',
            "price"=>"50",
            "description"=>"A best clothing ever 4",
            "category"=>"baju",
            "gallery"=>"https://cf.shopee.co.id/file/8191fb851e125c6ad3537bcf470ce2d5"
        ],
        [
            'name'=>'Shirt 4',
            "price"=>"90",
            "description"=>"A best clothing ever 3",
            "category"=>"baju",
            "gallery"=>"https://cf.shopee.co.id/file/a4fa96be223227999cff555152747607"
        ],
        [
            'name'=>'Shirt 5',
            "price"=>"10",
            "description"=>"A best clothing ever 2",
            "category"=>"baju",
            "gallery"=>"https://cf.shopee.co.id/file/281ea9691d9fab8f3b3eaacabd2c7beb"
        ],
           

          
        ]);
      
    }
}
