<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//use Maatwebsite\Excel\Excel::XLSX;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ticketExport;

class sendTicketCode extends Mailable
{
    use Queueable, SerializesModels;

    public $body;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $body)
    {
        $this->body = $body;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $filename = "codes.xlsx";
        $attachment = Excel::raw(new ticketExport($this->body->code_list), \Maatwebsite\Excel\Excel::XLSX);
        return $this->from('admin@fda.express', 'fda.karton.express')
            ->subject($this->subject)
            ->view('email.sendTicketCode')
            ->attachData($attachment, $filename);
    }
}
