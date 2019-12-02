<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'name'=>'Nanda Win Lwin',
                'email'=>'nandawinlwin.mm@gmail.com',
                'password'=>bcrypt('Nanda@123'),
                'row'=>'1',
                'shop_id' => 1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            ]
        ]);
    }
}
