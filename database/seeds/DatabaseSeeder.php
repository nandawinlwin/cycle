<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(rowTable::class);
        $this->call(itemName::class);
        $this->call(itemModel::class);
        $this->call(color::class);
        $this->call(type::class);
        $this->call(ltype::class);
        $this->call(shop::class);
        
    }
}
