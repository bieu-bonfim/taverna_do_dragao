<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    public function create()
    {
        return view('taverna.reservation.reservation');
    }

    public function store(Request $request)
    {
        // max 12 reservas no dia
        // verifica a data maxima
        // quantidade de cadeiras maxima
        // return view('taverna.reservation.reservation');

        // $request->validated();

        $reservation = new Reservation();
        $reservation->name = $request->input('name');
        $reservation->email = $request->input('email');
        $reservation->reservationDate = $request->input('reservationDate');
        $reservation->phone = $request->input('phone');
        $reservation->chairQuantity = $request->input('chairQuantity');

        if ($reservation->save()) {
            return view(("taverna.reservation.reservation"))->with('message', "A reserva foi cadastrada com sucesso. Verifique seu e-mail");
        }
        return to_route('taverna.reservation.reservation');

    }

}
