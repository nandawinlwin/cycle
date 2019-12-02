<?php

use Illuminate\Database\Seeder;

class rowTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rows')->insert([
            [
                'name'=>'admin',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'manager',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'editor',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'seller',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ]
        ]);
    }
}
