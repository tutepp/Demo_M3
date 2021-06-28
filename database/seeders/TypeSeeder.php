<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->id = 1;
        $type->name_type = 'Chuột';
        $type->save();

        $type = new Type();
        $type->id = 2;
        $type->name_type = 'Bàn phím';
        $type->save();

        $type = new Type();
        $type->id = 3;
        $type->name_type = 'Tai nghe';
        $type->save();

        $type = new Type();
        $type->id = 4;
        $type->name_type = 'Màn hình';
        $type->save();

        $type = new Type();
        $type->id = 5;
        $type->name_type = 'Case Máy tính ';
        $type->save();

        $type = new Type();
        $type->id = 6;
        $type->name_type = 'Camera An Ninh';
        $type->save();

        $type = new Type();
        $type->id = 7;
        $type->name_type = 'Khác...';
        $type->save();


    }
}
