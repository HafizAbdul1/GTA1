<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HashPasswords extends Command
{
    protected $signature = 'passwords:hash';
    protected $description = 'Hashes all unencrypted passwords in the users table';

    public function handle()
    {
        $users = DB::table('users')->get(); // Adjust the table name if needed

        foreach ($users as $user) {
            if (!password_get_info($user->password)['algo']) { // Check if it's already hashed
                DB::table('users')->where('id', $user->id)->update([
                    'password' => Hash::make($user->password),
                ]);
                $this->info("Hashed password for user ID: {$user->id}");
            }
        }

        $this->info('All passwords hashed successfully.');
    }
}
