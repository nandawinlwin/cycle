<?php

use Illuminate\Database\Seeder;

class ltype extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ltypes')->insert([
            [
                'name'=>'မႏၱေလး',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'ေနျပည္ေတာ္',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'ေတာင္ႀကီ',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'သထံု',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'ေမာ္လၿမိဳင္',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'ပဲခူး',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'ရမည္းသင္း',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            [
                'name'=>'မိတၳီလာ',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ],
            
           
        ]);
    }
}
