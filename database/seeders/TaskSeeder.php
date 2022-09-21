<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'title'=>'タスク1',
                'body'=>'タスク1の内容記入',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'=>'タスク2',
                'body'=>'タスク2の内容記入',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        //DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
