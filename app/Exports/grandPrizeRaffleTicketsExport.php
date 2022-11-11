<?php

namespace App\Exports;

use App\Models\grand_prize_raffle_tickets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class grandPrizeRaffleTicketsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return grand_prize_raffle_tickets::all();
    }

    public function headings(): array
    {
        return ["username", "raffle ticktes", "created datetime", "updated datetime"];
    }
}