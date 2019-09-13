<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class MakeAdmins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admins';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'seeds the users table with three admins';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        User::create([ 'name' => 'Admin1',
        'email' => 'Admin1@futurehackathon.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$DqJDrFhyUeBUdY/Ybzouiuu4OxYGClPb63csfXNzHX3jQJujCwRdG', 
        ]);

        User::create([ 'name' => 'Admin2',
        'email' => 'Admin2@futurehackathon.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$JwvIPZHCpYnGVLC4SWp3iOJDPGAkIn9BZbb98ErFjEBGnpwtyHtmW', 
        ]);

        User::create([ 'name' => 'Admin3',
        'email' => 'Admin3@futurehackathon.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$tOb76v9t3afPtxIMOO1Z9O3A8qLJOwSuoYDlyBOBSNYPkMUmqA5hq', 
        ]);

        $this->info('Created 3 Admins Successfully');
    }
}
