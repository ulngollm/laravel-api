<?php

namespace Database\Seeders;

use App\Models\TodoList;
use Illuminate\Database\Seeder;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static array $timelines = [
        "Буфер",
        "Сегодня",
        "На очереди",
        "На неделе"
    ];

    public static array $topics = [
        "Быт",
        "Универ",
        "Продукты",
        "Одежда"
    ];


    public function run()
    {
        foreach(self::$timelines as $title){
            TodoList::create([
                "name"=>$title,
                "type"=>"timeline"
            ]);
        }
        foreach(self::$topics as $title){
            TodoList::create([
                "name"=>$title,
                "type"=>"topic"
            ]);
        }
    }
}
