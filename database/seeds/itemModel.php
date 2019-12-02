<?php

use Illuminate\Database\Seeder;

class itemModel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_models')->insert([
           
            [
                'name'=>'2012',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'2013',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'2014',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'2015',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'2016',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'2017',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'2018',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'2019',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
           
           
        ]);
    }
}
