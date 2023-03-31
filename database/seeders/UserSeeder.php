<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->name = "Maddalena";
        $user1->email = "zaddalenamanchetta@gmail.com";
        $user1->password = Hash::make("maddalena1234");
        $user1->save();

        $user2 = new User;
        $user2->name = "Gaia";
        $user2->email = "gaiascuteri@gmail.com";
        $user2->password = Hash::make("gaia1234");
        $user2->save();
    }
}
