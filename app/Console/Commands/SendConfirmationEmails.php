<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\URL;
use App\Mail\Confirmation;
use App\Single;
use App\Group;

class SendConfirmationEmails extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:confirmation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a confirmation email to all the accepted singles and group leaders';

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
        $singles=Single::where('status','accepted')->get();
        $groups=Group::where('status','accepted')->get();
        $numGroups=0;
        $numSingles=0;
        foreach($groups as $group){
            \Mail::to(['email' => $group->leadEmail])->send(new Confirmation($group->leadName,URL::signedURL('confirmGroup',['Group' => $group->id])));
            $numGroups++;
        }

        foreach($singles as $single){
            \Mail::to(['email' => $single->email])->send(new Confirmation($single->name,URL::signedRoute('confirmSingle',['Single' => $single->id])));
            $numSingles++;
        }

        $this->info('Sent '.$numSingles.' Confirmation emails to singles and '.$numGroups.' to group leaders');
    }
}
