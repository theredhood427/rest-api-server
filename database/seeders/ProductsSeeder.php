<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Jacket',
            'description' => 'BIGYAN NG JACKET YAN! BAYBTHOUSAND PANG BAYAD UTANG!!!',
            'currency' => 'PHP',
            'price' => 5000.50,
            'brand' => 'KuyaWill',
            'category' => 'apparel',
            'image' => 'https://mb.com.ph/wp-content/uploads/2021/08/Shopee-Jackie-Chan-1.jpg?&imwidth=1200',
        ]);

        DB::table('products')->insert([
            'title' => 'iPhone 13 Pro Max',
            'description' => 'One of the best phones in the market!',
            'currency' => 'PHP',
            'price' => 70990.00,
            'brand' => 'iPhone',
            'category' => 'electronic device',
            'image' => 'https://www.pinoytechnoguide.com/wp-content/uploads/2021/09/iPhone-13-Pro-Max.jpg?&imwidth=1200'
        ]);

        DB::table('products')->insert([
            'title' => 'Swanns Way: In Search of Lost Time, Vol. 1',
            'description' => 'be lost in time...',
            'currency' => 'PHP',
            'price' => 1099.00,
            'brand' => 'Marcel Proust, Lydia Davis',
            'category' => 'book',
            'image' => 'https://cdn.shopify.com/s/files/1/0490/1657/0022/products/270804279_302310768623194_778438930086285627_n_1400x.jpg?&imwidth=1200'
        ]);
    }
}