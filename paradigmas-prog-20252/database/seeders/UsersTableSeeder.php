<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $user = [
        //     'name' => 'manager',
        //     'email' => 'manager@email.com',
        //     'password' => bcrypt('123456'),
        //     'company_id' => $company->id
        // ];

        // $company =Company::create [
        //     'name' => 'company',
        //     'licensed' = true
        // ];

        User::factory()->count(20)->create();
    }

    // private function create (array $data) {
    //     User::create ($data);
    // }
}
