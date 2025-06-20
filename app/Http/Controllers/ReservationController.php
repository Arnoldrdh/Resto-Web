<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view('reservation');
    }

    public function create(Request $req)
    {
        $reservation = new Reservation;
        $reservation-> name = $req->name;
        $reservation-> datetime = $req->datetime;
        $reservation-> people = $req->people;
        $reservation-> user_id = $req->Auth::user()->id;
        $reservation->save();
        return redirect('/reservation');
    }
}
