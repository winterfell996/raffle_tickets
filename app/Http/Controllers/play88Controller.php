<?php

namespace App\Http\Controllers;

use App\Exports\raffleTicketsExport;
use App\Imports\raffleTicketsImport;
use App\Models\raffle_tickets;
use App\Exports\grandPrizeRaffleTicketsExport;
use App\Imports\grandPrizeRaffleTicketsImport;
use App\Models\grand_prize_raffle_tickets;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class play88Controller extends Controller
{
    //
    public function index()
    {
        $raffle_tickets = raffle_tickets::all();
        // return view("play88", ["raffle_tickets" => $raffle_tickets]);
        return view("play88", compact("raffle_tickets"));
    }

    public function import(Request $request)
    {
        $item = Excel::Import(new raffleTicketsImport, request()->file('file'));
        return redirect()->back();
    }

    public function export(Request $request)
    {
        return Excel::download(new raffleTicketsExport, 'raffle_tickets.csv');
    }

    public function action(Request $request)
    {
        if ($request->has('submit')) {
            $username = $request->input('usr');
            $results = raffle_tickets::select('raffle_tickets')->where('username', $username)->exists();
            $raffle_tickets = raffle_tickets::select('raffle_tickets','updated_at')->where('username', $username)->get();
            $grand_prize_raffle_tickets = grand_prize_raffle_tickets::select('raffle_tickets')->where('username', $username)->get();
            if ($results) {
                return view("success", compact("raffle_tickets", "grand_prize_raffle_tickets"));
            }else {
                return view("register");
            }
        }
    }

    // Grand Prize
    public function indexGrandPrize()
    {
        $grand_prize_raffle_tickets = grand_prize_raffle_tickets::all();
        return view("play88GrandPrize", compact("grand_prize_raffle_tickets"));
    }

    public function importGrandPrize(Request $request)
    {
        $item = Excel::Import(new grandPrizeRaffleTicketsImport, request()->file('file'));
        return redirect()->back();
    }

    public function exportGrandPrize(Request $request)
    {
        return Excel::download(new grandPrizeRaffleTicketsExport, 'grand_prize_raffle_tickets.csv');
    }
}