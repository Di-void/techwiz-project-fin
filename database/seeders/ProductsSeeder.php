<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $prods = [
            [
                'name' => 'Long Sleeve Shirt',
                'img' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1287&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Orange Sweat Shirt',
                'img' => 'https://images.unsplash.com/photo-1578587018452-892bacefd3f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'Plain White T-shirt',
                'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'Plain White T-shirt',
                'img' => 'https://images.unsplash.com/photo-1581655353564-df123a1eb820?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Blue Long sleeve shirt',
                'img' => 'https://images.unsplash.com/photo-1620012150748-c759a494c133?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Los Angeles Crop top',
                'img' => 'https://images.unsplash.com/photo-1548389995-fbd3151a501f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'Blue and White checkered dress shirt',
                'img' => 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'White and Blue cat-printed crew-neck T-shirt',
                'img' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80',
                'category' => 'unisex',
            ],
            [
                'name' => 'Blue dress shirt',
                'img' => 'https://images.unsplash.com/photo-1589310243389-96a5483213a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Blue crew-neck tops',
                'img' => 'https://images.unsplash.com/photo-1523381294911-8d3cead13475?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'White and Black print T-shirt',
                'img' => 'https://images.unsplash.com/photo-1554568218-0f1715e72254?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Blue and white plaid dress shirt',
                'img' => 'https://images.unsplash.com/photo-1609178879134-23206a67e48d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'unisex',
            ],
            [
                'name' => 'White button-up T-shirt',
                'img' => 'https://images.unsplash.com/photo-1591357037205-166318b51afd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'rain jacket',
                'img' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1336&q=80',
                'category' => 'unisex',
            ],
            [
                'name' => 'Black Biker Jacket',
                'img' => 'https://images.unsplash.com/photo-1617608587196-6391433fb6a3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1287&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'Full body Leather Jacket',
                'img' => 'https://images.unsplash.com/photo-1591079886542-53db52add557?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'Under Armor Sport Jacket',
                'img' => 'https://images.unsplash.com/photo-1559278079-0bbb5e183b3d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Chill Jean Jacket',
                'img' => 'https://images.unsplash.com/photo-1649178466381-8fc163d344fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Blue Bubble Jacket',
                'img' => 'https://images.unsplash.com/photo-1552327359-d86398116072?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=463&q=80',
                'category' => 'unisex',
            ],
            [
                'name' => 'Pink Coat',
                'img' => 'https://images.unsplash.com/flagged/photo-1554033750-2137b5cfd7ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=478&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'Blue Denim Button Up Jacket',
                'img' => 'https://images.unsplash.com/photo-1611312449408-fcece27cdbb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=369&q=80',
                'category' => 'unisex',
            ],
            [
                'name' => 'Black Coat',
                'img' => 'https://images.unsplash.com/photo-1558718932-c6dfc209f6fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'Brown Coat',
                'img' => 'https://images.unsplash.com/photo-1627637454030-5ddd536e06e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'Blue Zip-up Jacket',
                'img' => 'https://images.unsplash.com/photo-1489972536996-943907ea1cd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'black and white striped shorts',
                'img' => 'https://images.unsplash.com/photo-1598522325074-042db73aa4e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'black and white plaid shorts',
                'img' => 'https://images.unsplash.com/photo-1617953644310-e690da9be982?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'white shorts',
                'img' => 'https://images.unsplash.com/photo-1591678495920-daa30e3d2c38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'male',
            ],
            [
                'name' => 'blue denim shorts',
                'img' => 'https://images.unsplash.com/photo-1585145197502-8f36802f0a26?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=668&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'black fitted shorts/tights',
                'img' => 'https://images.unsplash.com/photo-1598211686290-a8ef209d87c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'female',
            ],
            [
                'name' => 'gray shorts',
                'img' => 'https://images.unsplash.com/photo-1601141256817-c60897f2776a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'category' => 'male',
            ],
        ];
//        DB::table('products')->truncate();

        foreach($prods as $prd) {
            DB::table('products')->insert([
                'product_name' => $prd['name'],
                'description' => $faker->paragraph(2),
                'category' => $prd['category'],
                'price' => $faker->randomFLoat(2, 0, 120),
                'stock' => $faker->numberBetween(4,25),
                'image' => $prd['img'],
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]);
        }

    }
}
