<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Confirmation extends Mailable
{
    use Queueable, SerializesModels;

    protected $info;
    protected $url;
    protected $type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info,$url,$type)
    {
        
        $this->info=$info;
        $this->url=$url;
        $this->type=$type;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.confiramtion')->with(['info' => $this->info, 'url' => $this->url,'type' => $this->type]);
    }
}
