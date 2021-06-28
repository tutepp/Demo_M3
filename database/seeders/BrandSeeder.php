<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = new Brand();
        $brand->id = 1;
        $brand->name_brand = 'Logitech';
        $brand->country = 'Thụy Sĩ';
        $brand->save();

        $brand = new Brand();
        $brand->id = 2;
        $brand->name_brand = 'Genius';
        $brand->country = 'Đài Loan';
        $brand->save();

        $brand = new Brand();
        $brand->id = 3;
        $brand->name_brand = 'Razer';
        $brand->country = 'Mỹ';
        $brand->save();

        $brand = new Brand();
        $brand->id = 4;
        $brand->name_brand = 'Razer';
        $brand->country = 'Mỹ';
        $brand->save();

        $brand = new Brand();
        $brand->id = 5;
        $brand->name_brand = 'Fuhlen';
        $brand->country = 'Trung Quốc ';
        $brand->save();

        $brand = new Brand();
        $brand->id = 6;
        $brand->name_brand = 'Newmen';
        $brand->country = 'Trung Quốc ';
        $brand->save();

        $brand = new Brand();
        $brand->id = 7;
        $brand->name_brand = 'E-DRA';
        $brand->country = 'Việt Nam';
        $brand->save();

        $brand = new Brand();
        $brand->id = 8;
        $brand->name_brand = 'Corsair';
        $brand->country = 'Mỹ';
        $brand->save();

        $brand = new Brand();
        $brand->id = 9;
        $brand->name_brand = 'Sam Sung';
        $brand->country = 'Hàn Quốc';
        $brand->save();

        $brand = new Brand();
        $brand->id = 10;
        $brand->name_brand = 'LG';
        $brand->country = 'Hàn Quốc';
        $brand->save();

        $brand = new Brand();
        $brand->id = 11;
        $brand->name_brand = 'ASUS';
        $brand->country = 'Đài Loan';
        $brand->save();

        $brand = new Brand();
        $brand->id = 12;
        $brand->name_brand = 'AOC';
        $brand->country = 'Đài Loan';
        $brand->save();

        $brand = new Brand();
        $brand->id = 13;
        $brand->name_brand = 'DELL';
        $brand->country = 'Mỹ';
        $brand->save();

        $brand = new Brand();
        $brand->id = 14;
        $brand->name_brand = 'BenQ';
        $brand->country = 'Trung Quốc';
        $brand->save();

        $brand = new Brand();
        $brand->id = 15;
        $brand->name_brand = 'Hugon';
        $brand->country = 'Trung Quốc';
        $brand->save();

        $brand = new Brand();
        $brand->id = 16;
        $brand->name_brand = 'Lenovo';
        $brand->country = 'Trung Quốc';
        $brand->save();

        $brand = new Brand();
        $brand->id = 17;
        $brand->name_brand = 'Khác...';
        $brand->country = 'None';
        $brand->save();

    }
}
