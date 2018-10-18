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
        if (in_array(config('app.env'), $this->env, true)) {
            if (!User::where('email', 'root@artmax.dev')->exists()) {
                User::create([
                    'name' => 'root',
                    'email' => 'root@artmax.dev',
                    'password' => '10101010',
                ]);
            }
        }
    }
}
