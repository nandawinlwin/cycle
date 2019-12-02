<?php

use Illuminate\Database\Seeder;

class color extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('colors')->insert([
            [
                'name'=>'Black',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'BLack Red',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Black Nant Thar',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Black Blue',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Black Gold',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Black Brown',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Nant Thar',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Blue Black',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Blue Red',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Red',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Red Black',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Black',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Black Brown',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Red',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Army',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'White Blue Pink',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Green Orange',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Blue',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Gray',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Red Nant Thar',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Orange',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Gray White',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'3 Color',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'Red Gray Nant Thar',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            
           
        ]);
    }
}
