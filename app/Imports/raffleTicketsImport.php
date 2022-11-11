<?php

namespace App\Imports;

use App\Models\raffle_tickets;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class raffleTicketsImport implements ToModel, WithHeadingRow, WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new raffle_tickets([
            //
            // 'username' => $row[0],
            // 'raffle_tickets' => $row[1]
            'username' => $row['login'],
            'raffle_tickets' => $row['raffle_tickets']
        ]);
    }

    public function uniqueBy()
    {
        return 'username';
    }
}
