<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Country\port_code;
use App\Models\Country\iata_prefix;
use App\Models\Product\product_package;
use App\Models\Product\product_unit;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendTicketCode;
use App\Mail\creditTopup;
use App\Models\Ticket\ticket;
use Carbon\Carbon;

class run_custom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {

        sendSMS("+66894287401", "The SMS-OTP is 9445704", "TH", $unicode = false);
        dd("xx");

        $today = Carbon::now()->startOfDay();
        $ticket = ticket::where("code", "=", "a2bf5a297a52cc46")->first();
        if(is_null($ticket->expire)){
            dd("1");
            return true;
        }else{
            $expire = Carbon::parse($ticket->expire)->startOfDay();
            if($today->gt($expire)){
                dd("2");
                return false;
            }else{
                dd("3");
                return true;
            }
        }
        dd("xxx");
        // $client = new \GuzzleHttp\Client([
        //     'base_uri' => "http://fda.test/api/v1/",
        // ]);
        // $response = $client->request('POST', "create", [
        //     'http_errors' => true,
        //     'json' => [
        //         "ticket" => "2542d6ec966f304d",
        //         "transportation" => [
        //             "transportation" => "01"
        //         ]
        //     ]
        // ]);

        // $od = json_decode($response->getBody());
        // dd($od);
        //$product_unit = product_unit::all();

       // Mail::to("kabsila@gmail.com", "FDA")->send(new sendTicketCode("Your ticket code for order #ABCDEF"));

        // $bytes = genTicketCode();
        // dd(addDash($bytes));
        // $port_code = port_code::all();
        // foreach($port_code as $pc){
        //     $pc->port_code = trim($pc->port_code);
        //     $pc->save();
        // }

        // $iata_prefix = iata_prefix::all();
        // foreach($iata_prefix as $pc){
        //     // if($pc->id == 9){
        //     //     dd(strlen($pc->prefix));
        //     // }
        //     if(strlen($pc->prefix) == 2){
        //         $pc->prefix = "0$pc->prefix";
        //         echo $pc->prefix."\r\n";
        //         $pc->save();
        //     }

        // }
    }

    // function hyphenate($str) {
    //     $str = strtoupper($str);
    //     return implode("-", str_split($str, 4));
    // }
}
