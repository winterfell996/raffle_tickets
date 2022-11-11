<?php

namespace App\Exports;

use App\Models\raffle_tickets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class raffleTicketsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return raffle_tickets::all();

        // $raffle_tickets=raffle_tickets::select('username','raffle_tickets')->get();
        // return $raffle_tickets;
    }

    public function headings(): array
    {
        return ["username", "raffle ticktes", "created datetime", "updated datetime"];
    }
}
