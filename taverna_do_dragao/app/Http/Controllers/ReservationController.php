<?php

namespace App\Http\Controllers;

class ReservationController extends Controller
{
    public function create()
    {
        return view('taverna.reservation.reservation');
    }

}
