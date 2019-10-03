<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\Schedule;
use App\Single;
use App\Group;

class SendSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends the schedule to the accepted and confirmed contestants';

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
        $groups=Group::where('status','accepted')->where('confirmed','yes')->get();
        $singles=Single::where('status','accepted')->where('confirmed','yes')->get();
        $numGroups=0;
        $numSingles=0;
        foreach($groups as $group){
            // \Mail::to(['email' => $group->leadEmail])->send(new Schedule());
            $numGroups++;
        }

        foreach($singles as $single){
            // \Mail::to(['email' => $single->email])->send(new Schedule());
            $numSingles;
        }
        $this->info('Sent to '.$numSingles.' Singles and '.$numGroups.' Groups');

    }
}
