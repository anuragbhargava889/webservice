<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = 'rajnish';
        $user1->email = 'rajnish.srivastava@nagarro.com';
        $user1->password = bcrypt('rajnish');
        $user1->save();


        $user2 = new User();
        $user2->name = 'anurag';
        $user2->email = 'anurag.bhargava@nagarro.com';
        $user2->password = bcrypt('anurag');
        $user2->save();
    }
}
