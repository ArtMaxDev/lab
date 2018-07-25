<?php

namespace Tests\Unit;

use App\Models\User;
use Artisan;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateUserCommandTest extends TestCase
{

    /**
     * @return array
     */
    public static function dataProviderProduction(): array
    {
        return [
            [
                'production',
                'production@test.test',
                'paSSworD99',
                User::ROLES['root'],
                '/Server is in production mode. Are you sure you want to seed user?/',
            ],
        ];
    }

    /**
     * @return array
     */
    public static function dataProviderLocal(): array
    {
        return [
            [
                'local',
                'local@test.test',
                'paSSworD99',
                User::ROLES['root'],
                '/Server is in production mode. Are you sure you want to seed user?/',
            ],
        ];
    }

    /**
     * @return array
     */
    public static function dataProviderValidEmail(): array
    {
        return [
            [
                'local',
                'valid_email@test.test',
                'paSSworD99',
                User::ROLES['root'],
                '/Please enter a valid e-mail/',
            ],
        ];
    }

    /**
     * @return array
     */
    public static function dataProviderEmptyPassword(): array
    {
        return [
            [
                'local',
                'empty_password@test.test',
                '',
                User::ROLES['root'],
                '/Password: ((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,})/',
            ],
        ];
    }

    /**
     * @return array
     */
    public static function dataProviderValidPassword(): array
    {
        return [
            [
                'local',
                'valid_password@test.test',
                'oPge5M7b',
                User::ROLES['root'],
                '/Password: ((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,})/',
            ],
        ];
    }

    /**
     * @return array
     */
    public static function dataProviderRoles(): array
    {
        $data = [];
        $roles = User::ROLES;

        foreach ($roles as $key => $value) {
            $data []= [
                'local',
                "$key@test.test",
                'oPge5M7b',
                $key,
                $value,
                "/Role: (.*)/",
            ];
        }

        return $data;
    }

    /**
     * A basic test example.
     *
     * @dataProvider dataProviderProduction
     * @param string $env
     * @param string $email
     * @param string $password
     * @param int $role
     * @param string $message
     * @return void
     */
    public function testEnv(string $env, string $email, string $password, int $role, string $message)
    {
        $data = [
            '--env' => $env,
            '--email' => $email,
            '--password' => $password,
            '--role' => $role,
        ];

        $bufferOutput = new BufferedOutput();
        Artisan::call('make:user', $data, $bufferOutput);

        $this->assertRegExp($message, $bufferOutput->fetch());
    }

    /**
     * A basic test example.
     *
     * @dataProvider dataProviderLocal
     * @param string $env
     * @param string $email
     * @param string $password
     * @param int $role
     * @param string $message
     * @return void
     */
    public function testEnvLocal(string $env, string $email, string $password, int $role, string $message)
    {
        $data = [
            '--env' => $env,
            '--email' => $email,
            '--password' => $password,
            '--role' => $role,
        ];

        $bufferOutput = new BufferedOutput();
        Artisan::call('make:user', $data, $bufferOutput);

        $this->assertNotRegExp($message, $bufferOutput->fetch());
    }

    /**
     * A basic test example.
     *
     * @dataProvider dataProviderValidEmail
     * @param string $env
     * @param string $email
     * @param string $password
     * @param int $role
     * @param string $message
     * @return void
     */
    public function testValidEmail(string $env, string $email, string $password, int $role, string $message)
    {
        $data = [
            '--env' => $env,
            '--email' => $email,
            '--password' => $password,
            '--role' => $role,
        ];

        $bufferOutput = new BufferedOutput();
        Artisan::call('make:user', $data, $bufferOutput);

        $this->assertRegExp($message, $bufferOutput->fetch());
    }

    /**
     * A basic test example.
     *
     * @dataProvider dataProviderEmptyPassword
     * @param string $env
     * @param string $email
     * @param string $password
     * @param int $role
     * @param string $message
     */
    public function testEmptyPassword(string $env, string $email, string $password, int $role, string $message)
    {
        $data = [
            '--env' => $env,
            '--email' => $email,
            '--password' => $password,
            '--role' => $role,
        ];

        $bufferOutput = new BufferedOutput();
        Artisan::call('make:user', $data, $bufferOutput);

        $this->assertRegExp($message, $bufferOutput->fetch());
    }

    /**
     * @dataProvider dataProviderValidPassword
     *
     * @param string $env
     * @param string $email
     * @param string $password
     * @param int $role
     * @param string $message
     */
    public function testValidPassword(string $env, string $email, string $password, int $role, string $message)
    {
        $data = [
            '--env' => $env,
            '--email' => $email,
            '--password' => $password,
            '--role' => $role,
        ];

        $bufferOutput = new BufferedOutput();
        Artisan::call('make:user', $data, $bufferOutput);

        $this->assertRegExp($message, $bufferOutput->fetch());
    }

    /**
     * @dataProvider dataProviderRoles
     *
     * @param string $env
     * @param string $email
     * @param string $password
     * @param int|string $role
     * @param int $roleValue
     * @param string $message
     */
    public function testRoles(string $env, string $email, string $password, string $role, int $roleValue, string $message)
    {
        $data = [
            '--env' => $env,
            '--email' => $email,
            '--password' => $password,
            '--role' => $roleValue,
        ];

        $bufferOutput = new BufferedOutput();
        Artisan::call('make:user', $data, $bufferOutput);

        $this->assertTrue((bool)preg_match_all($message, $bufferOutput->fetch(), $role));
    }
}
