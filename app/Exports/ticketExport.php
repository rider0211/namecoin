<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class ticketExport implements FromArray
{

    public function __construct($code_list)
    {
        $this->code_list = $code_list;
    }

    public function array(): array
    {
        $data = [];
        foreach($this->code_list as $code){
            $data[] = ["code" => $code];
        }
        return [
            $data
        ];
    }
}
