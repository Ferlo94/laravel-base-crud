<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config('fumetti');

        foreach ($fumetti as $fumetto) {
            
            $newProduct = new Product();
            
            $newProduct->title = $fumetto['title'];
            $newProduct->description = $fumetto['description'];
            $newProduct->thumb = $fumetto['thumb']; 
            $newProduct->price = $fumetto['price'];
            $newProduct->series = $fumetto['series'];
            $newProduct->sale_date = $fumetto['sale_date'];
            $newProduct->type = $fumetto['type'];
            
            $newProduct->save();
        }
    }
    
}