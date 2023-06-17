<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\reservation;

class BookingController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validatedBooking = $request->validate([
            'user_name' => 'required|string',
            'email' => 'required|email',
            'phone_no' => 'numeric',
            'check_in' => 'date|before:checkout',
            'check_out' => 'date|after:checkin',
            'adult' => 'numeric',
            'children' => 'numeric',
            'room' => 'numeric',
            'night' => 'numeric',
            'amenities' => 'json'
        ]);

        try {
            //code...
            $reservation = new reservation;
            $reservation->user_name = $request->user_name;
            $reservation->farm = $request->farm;
            $reservation->phone_no = $request->phone_no;
            $reservation->check_in = $request->check_in;
            $reservation->check_out = $request->check_out;
            $reservation->adult = $request->adult;
            $reservation->children = $request->children;
            $reservation->adult = $request->adult;
            $reservation->room = $request->room;
            $reservation->night = $request->night;
            $reservation->amenities = $request->amenities;
            $reservation->save();

            return redirect('/')->with("success", "Booking Success");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/')->with("failed", "Reservation failed");
        }
    }
}
