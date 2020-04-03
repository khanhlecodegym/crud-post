<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user3 = new User();
        $user3->name = 'Sang';
        $user3->email = 'sang.sang@gmail.com';
        $user3->password = Hash::make('12345678');
        $user3->save();

        $user4 = new User();
        $user4->name = 'Linh';
        $user4->email = 'linhcodegym@gmail.com';
        $user4->password = Hash::make('12345678');
        $user4->save();
    }
}
