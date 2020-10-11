<?php

use Illuminate\Database\Seeder;
use App\User as User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;
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
        $faker = Faker::create('App\User');
         DB::table('users')->insert([
            'name' => 'Ian Jay Subang',
            'email' => 'test@test.com',
            'type' => '1',
            'status' => 'Approved',
            'photo' => 'default.png',
            'expertises' => 'Data Mining, Web Programming, System Analysis and Design',
            'password' => Hash::make('123456'),
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
         $a = ['Approved', 'Pending'];
         for($i= 1; $i <= 50; $i++) {
            DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'type' => '2',
            'status' => $a[mt_rand(0, count($a) - 1)],
            'photo' => 'default.png',
            'password' => Hash::make('123456'),
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        }
        $exp = ['Data Mining', 'Web Programming','System Anaylsis and Design', 'VB.Net'];
    
        for($i = 1; $i <= 20; $i++) {
         DB::table('users')->insert([
            'name' => $faker->name,
            'email' =>  $faker->email,
            'type' => '3',
            'status' => $a[mt_rand(0, count($a) - 1)],
            'photo' => 'default.png',
            'expertises' => $exp[mt_rand(0, count($exp) - 1)],
            'password' => Hash::make('123456'),
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
     }
    }
}
