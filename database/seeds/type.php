<?php

use Illuminate\Database\Seeder;

class type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'name'=>'ဂ်င္း',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'သံႀကိဳး',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'လိပ္',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'မဲလံုး',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'ျဖဴလံုး',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'ေမ်ာက္ေခါင္း',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
           
        ]);
    }
}
