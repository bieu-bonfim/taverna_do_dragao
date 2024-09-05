<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Mail\ReservationPlaced;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function create()
    {
        return view('taverna.reservation.reservation');
    }

    public function store(ReservationRequest $request)
    {
        $request->validated();

        $reservation = new Reservation();
        $reservation->name = $request->input('name');
        $reservation->email = $request->input('email');
        $reservation->reservationDate = $request->input('reservationDate');
        $reservation->phone = $request->input('phone');
        $reservation->chairQuantity = $request->input('chairQuantity');

        $email = new ReservationPlaced($reservation->name);
        Mail::to($reservation->email)->send($email);

        if ($reservation->save()) {
            return view(("taverna.reservation.reservation"))->with('message', "A reserva foi cadastrada com sucesso. Verifique seu e-mail");
        }
        return to_route('taverna.reservation.reservation');
    }

    public function indexReservation(){
        $reservations = Reservation::query()->orderBy('reservationDate')->get();
        return view('dashboard.reservation.index')->with(compact('reservations'));
    }

    public function editReservation(Request $request){
        $reservation = Reservation::findOrFail($request->id);
        return view('dashboard.reservation.edit')->with(compact('reservation'));
    }

    public function updateReservation(Request $request){

        $reservation = Reservation::findOrFail($request->id);

        $reservation->name = $request->input('name');
        $reservation->email = $request->input('email');
        $reservation->reservationDate = $request->input('reservationDate');
        $reservation->phone = $request->input('phone');
        $reservation->chairQuantity = $request->input('chairQuantity');

        $reservation->save();

        if ($reservation->save()) {
            return to_route('dashboard.reservation.index')->with('message', "O produto foi editado com sucesso");;
        }
        return to_route("dashboard.index")->with('message', "Ocoreu um erro");;;
    }
    public function deleteReservation(Request $request)
    {
        Reservation::destroy($request->id);
        session()->flash('message', "Reserva  deletada com sucesso!");
        return to_route('dashboard.reservation.index');
    }

}
