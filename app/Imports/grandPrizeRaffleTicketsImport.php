<?php

namespace App\Imports;

use App\Models\grand_prize_raffle_tickets;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class grandPrizeRaffleTicketsImport implements ToModel, WithHeadingRow, WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new grand_prize_raffle_tickets([
            'username' => $row['login'],
            'raffle_tickets' => $row['raffle_tickets']
        ]);
    }

    public function uniqueBy()
    {
        return 'username';
    }
}