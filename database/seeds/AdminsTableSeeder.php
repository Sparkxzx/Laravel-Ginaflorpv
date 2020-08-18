<?php

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'cristo@admin.com',
            'password'  =>  bcrypt('simbidium59'),
        ]);
        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'jonsthanpv@admin.com',
            'password'  =>  bcrypt('sucursal90'),
        ]);


    }
}
