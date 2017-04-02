<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ts_users')->insert([
        	[
        		'username' 	=>	'supperadmin', 
        		'email' 	=>	'thanh@gmail.com',
        		'password'	=>	bcrypt('1234567'),
        		'HoTen'		=>	'Nguyen Van Thanh',
        		'DiaChi'	=>	'Ha Noi',
        		'SDT'		=>	'0124588722',
        		'level'		=>	1
        	],
            [
            	'username' 	=>	'admin', 
            	'email' 	=>	'thanh1@gmail.com',
            	'password'	=>	bcrypt('1234567'),
            	'HoTen'		=>	'Van Thanh',
            	'DiaChi'	=>	'Ha Noi',
            	'SDT'		=>	'0124588722',
            	'level'		=>	1
            ],
            [
            	'username' 	=>	'thanh', 
            	'email' 	=>	'thanh2@gmail.com',
            	'password'	=>	bcrypt('1234567'),
            	'HoTen'		=>	'Thanh',
            	'DiaChi'	=>	'Ha Noi',
            	'SDT'		=>	'0124588722',
            	'level'		=>	2
            ]
        ]);
    }
}
