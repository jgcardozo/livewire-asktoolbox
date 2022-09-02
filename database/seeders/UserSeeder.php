<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin = User::create([
            'name' => 'Juan Cardozo',
            'email' => 'juan.cardozo@ideaware.co',
            'password' => bcrypt('Oreo2021'),
        ]);

        $user1 = User::create([
            'name' => 'Erick Acevedo',
            'email' => 'erick.acevedo@ideaware.co',
            'password' => bcrypt('Warzone'),
        ]);

        
        $user2 = User::create([
            'name' => 'JuanGmail',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('12345678'),
        ]); 

        Coupon::create([
            'name' => 'AskMet',
            'discount' => 100,
            'description' => 'using for testing of the devTeam',
            'limit' => 200
        ]);
        Coupon::create([
            'name' => '30off',
            'discount' => 30,
            'description' => 'gives you 30 usd OFF',
            'limit' => 3000
        ]);




    } //run

} //class
