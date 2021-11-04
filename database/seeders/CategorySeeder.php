<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static array $categories = array(
        'Продукты',
        'Транспорт',
        'Гигиена',
        'Быт',
        'Рестораны',
        'Образование',
        'Развлечения',
        'Подарки'
    );

    public function run()
    {
        foreach(self::$categories as $name){
            DB::table('category')->insert([
                'name'=>$name
            ]);
        }
    }
}
