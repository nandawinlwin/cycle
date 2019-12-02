<?php

use Illuminate\Database\Seeder;

class itemName extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_names')->insert([
            [
                'name'=>'Scoopyi',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Click',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'TTX',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Cyclone',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Wave',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ]
           
        ]);
    
    }
}
