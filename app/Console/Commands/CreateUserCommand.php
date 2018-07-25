<?php

namespace App\Console\Commands;

use App\Models\User;
use Hash;
use Illuminate\Console\Command;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\Validator;
use Ultraware\Roles\Models\Role;
use Ultraware\Roles\Traits\HasRoleAndPermission;

class CreateUserCommand extends Command
{

    /**
     * Count password chars
     */
    const COUNT_PASSWORD_CHARS = 8;

    /**
     * Check if autugenerate password
     *
     * @var bool
     */
    private $autoGenerate = false;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user {--env=} {--email=} {--password=} {--role=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Production env
     *
     * @var array
     */
    private $prodEnv = [
        'production',
        'server',
    ];

    private $env;
    private $email;
    private $password;
    private $role;

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set options
     */
    private function setOptions(): void
    {
        $this->env = $this->option('env') ?? config('app.env');
        $this->email = $this->option('email');
        $this->password = $this->option('password');
        $this->role = $this->option('role');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->setOptions();

        if (!$this->checkEnv()) {
            return;
        }

        $email = $this->email();
        $password = $this->password();

        $confirmed = $this->autoGenerate
            ? true
            : $password === $this->confirmPassword($password);

        $user = User::create([
            'name' => explode('@', $email)[0],
            'email' => $email,
            'password' => $password,
        ]);

        $info = 'The user has been successfully created!'
            . PHP_EOL . PHP_EOL
            . 'E-mail: ' . $email
            . PHP_EOL
            . 'Password: ' . $password;

        if (in_array(HasRoleAndPermission::class, class_uses(User::class))) {
            $roles = User::ROLES;
            $defaultValue = array_first(array_values($roles));

            $name = $this->role ?? $this->choice('Choose a role', array_keys($roles), $defaultValue);

            $role = Role::where('name', $name)->first();
            $user->attachRole($role);

            $info .= PHP_EOL . 'Role: ' . $name;
        }

        $this->info($info);

    }

    /**
     * Check environment
     *
     * @return bool
     */
    private function checkEnv(): bool
    {
        if (!in_array($this->env, $this->prodEnv)) {
            return true;
        }

        if ($this->env) {
            $this->line('Server is in production mode. Are you sure you want to seed user?');
            $answer = true;
        } else {
            $answer = $this->confirm('Server is in production mode. Are you sure you want to seed user?');
        }

        return $answer;
    }

    /**
     * Set an email
     *
     * @return string
     */
    private function email($invalidEmail = false): string
    {
        if ($invalidEmail) {
            if ($this->email) {
                $this->line('Please enter a valid e-mail');
                $email = $this->email;
            } else {
                $email = $this->ask('Please enter a valid e-mail');
            }
        } else {
            if ($this->email) {
                $this->line('Please enter user e-mail');
                $email = $this->email;
            } else {
                $email = $this->ask('Please enter user e-mail');
            }
        }

        if (empty($email)) {
            return $this->email(true);
        }

        if (!$this->validateEmail($email)) {
            return $this->email(true);
        }

        return $this->emailNotExist($email);

    }

    /**
     * Set a password
     *
     * @return string
     */
    private function password(): string
    {

        if (isset($this->password) && false !== $this->password) {
            $this->line( 'Password (Leave empty to autogenerate password)');
            $password = $this->password;
        } else {
            $password = $this->ask('Password (Leave empty to autogenerate password)');
        }

        if (empty($password)) {
            $password = $this->generatePassword();
        } else {
            if (strlen($password) < self::COUNT_PASSWORD_CHARS) {
                $password = $this->password();
            }
        }

        return $this->validatePassword($password);
    }

    /**
     * Confirm a password
     *
     * @param $password
     * @return bool
     */
    private function confirmPassword($password): bool
    {
        if ($this->password) {
            $confirmPassword = $this->password;
        } else {
            $confirmPassword = $this->ask('Repeat password');
        }

        if ($password !== $confirmPassword) {
            $this->info('Passwords should match');
            $passwordConfirmed = $this->confirmPassword($password);
        } else {
            $passwordConfirmed = true;
        }

        return $passwordConfirmed;
    }

    /**
     * Validate an email
     *
     * @param string $email
     * @return bool
     */
    private function validateEmail(string $email): bool
    {
        return (bool)filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Check email
     *
     * @param string $email
     * @return bool|string
     */
    private function emailNotExist(string $email): string
    {
        $user = User::where('email', $email)->exists();

        if ($user) {
            $this->info("$email already exists");
            return $this->email(true);
        }

        return $email;
    }

    /**
     * Generate password
     *
     * @return string
     */
    private function generatePassword(): string
    {
        $divide = (int)ceil(self::COUNT_PASSWORD_CHARS / 3);
        $after = self::COUNT_PASSWORD_CHARS % 3;

        $lowLetters = 'abcefghijklmnopqrstuvwxyz';
        $bigLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '1234567890';

        $low = substr(str_shuffle($lowLetters), 0, $divide);
        $big = substr(str_shuffle($bigLetters), 0, $divide);
        $numbers = substr(str_shuffle($numbers), 0, $after);

        $password = "$low$big$numbers";

        $this->autoGenerate = true;

        return $password;
    }

    /**
     * Validate password
     *
     * @param $password
     * @param bool $autoGenerate
     * @return string
     */
    private function validatePassword($password, $autoGenerate = false): string
    {
        $pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,})/";

        if (!preg_match($pattern, $password)) {
            if ($autoGenerate) {
                $password = $this->generatePassword();
            } else {
                $this->info('Password must contain one big letter, one small letter and one number, and min length is '
                    . self::COUNT_PASSWORD_CHARS);
                $password = $this->password(true);
            }
        }

        return $password;

    }
}
