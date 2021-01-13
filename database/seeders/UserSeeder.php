<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'id'  => '1',
                'name' => 'Fadhiil Rachman',
                'email' => 'devs@icloud.com',
                'password' => app('hash')->make('devs'),
                'email_verified_at' => Carbon::now()
            ]
        ]);
    }
}
