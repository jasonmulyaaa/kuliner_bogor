<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Mail\Mailer;

class SendMail extends Mailable
{
    public $data;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->data->send('email', $this->data, function ($message) {
        //     $message->to('matthewalexander.wan@gmail.com', 'SAMA BeautyStudio')
        //         ->subject('Booking SAMA BeautyStudio');
        // });
        return $this->from($this->data['email'])->subject('Kuliner Bogor')->view('email')->with('data', $this->data);
    }
}
