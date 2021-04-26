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
            'name' => 'I Phone 12 pro',
            'price'=> '1022',
            'description' => 'Comes with the latest bionic chip',
            'category'=>'mobile',
            'gallery'=>'https://img.router-switch.com/media/customoptions/129/2/4/iphone-12-pro-max-blue.jpg'
           ],
           [
            'name' => 'Samsung Galaxy S21 Ultra',
            'price'=> '1100',
            'description' => 'Best camera phone in the world',
            'category' =>'mobile',
            'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/11/Samsung-Galaxy-S21-Ultra-5G-500x500.jpg',
           ],
           [
            'name' => 'Sony Smart TV',
            'price'=> '1600',
            'description' => 'Shows over a trillion colors',
            'category' =>'tv',
            'gallery'=>'https://www.startech.com.bd/image/cache/catalog/television/sony/x7000e/kd-x700e-500x500.jpg'
           ],
           [
            'name' => 'LG 4k UHD TV',
            'price'=> '1400',
            'description' => 'For the best colors and sound experience',
            'category' =>'tv',
            'gallery'=>'https://www.lg.com/us/images/tvs/md07000410/gallery/desktop-01.jpg'
           ],
           [
            'name' => 'Samsung Fridge',
            'price'=> '1800',
            'description' => 'For a healthy life',
            'category' =>'fridge',
            'gallery'=>'https://images.samsung.com/is/image/samsung/assets/au/support/home-appliances/family-hub-apps/111.jpg?$1156_n_JPG$'
           ],

        ]);
    }
}
