<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    static array $statuses = [
        'pending',
        'in_progress',
        'complete',
        'closed'
    ];

    public function run()
    {
        foreach(self::$statuses as $item){
            Status::create([
                "name"=>$item
            ]);
        }
    }
}
