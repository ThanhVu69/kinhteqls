<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name'=>'Vũ Ngọc Thành',
                'email'=>'thanhngocvu2k2@gmail.com',
                'password'=>bcrypt('12345678'),
                'loainguoidung_id'=> '1'
            ]
        );
    }
}
