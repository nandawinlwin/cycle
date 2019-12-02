<?php

use Illuminate\Database\Seeder;

class shop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'name'=>'Branch 1',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Branch 2',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
           
        ]);
    }
}
