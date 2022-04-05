<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Country\country_detail;

class getExchangeRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:exchangeRate';

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
        $currencys = ["THB", "GBP", "EUR", "AUD", "SGD", "NZD", "CAD", "TRY", "USD"];
        foreach($currencys as $c){

            $client = new \GuzzleHttp\Client([
                'base_uri' => "https://api.transferwise.com/v1/",
            ]);

            $response = $client->request('GET', "rates", [
                'headers' => [
                    "Authorization" => "Bearer 999362d4-3871-465b-a3eb-efaa6c54eaaf"
                ],
                'http_errors' => false,
                'query' => [
                    'source' => "USD",
                    'target' => $c
                ],
            ]);

            $body = json_decode($response->getBody()->getContents());

            $rate = round($body[0]->rate, 5);
            if($c == "USD"){
                country_detail::where("currency", "=", $c)->update(["exchange_rate_usd" => 1]);
            }else{
                country_detail::where("currency", "=", $c)->update(["exchange_rate_usd" => $rate]);
            }
        }

        return 0;
    }
}
