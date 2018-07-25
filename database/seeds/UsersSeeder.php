<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Ultraware\Roles\Models\Role;

class UsersSeeder extends Seeder
{

    private $env = [
        'local',
        'development',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (in_array(config('app.env'), $this->env)) {
            if (!User::where('email', 'root@stamax.ua')->exists()) {
                $rootRole = Role::where('name', 'root')->first();

                $rootUser = User::create([
                    'name' => 'root',
                    'email' => 'root@stamax.com.ua',
                    'password' => bcrypt('10101010'),
                ]);

                $rootUser->attachRole($rootRole);
            }

            if (!User::where('email', 'client@stamax.com.ua')->exists()) {
                $clientRole = Role::where('name', 'client')->first();

                $clientUser = User::create([
                    'name' => 'client',
                    'email' => 'client@stamax.com.ua',
                    'password' => bcrypt('10101010'),
                ]);

                $clientUser->attachRole($clientRole);
            }
        }
    }
}
