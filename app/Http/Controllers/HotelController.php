<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'room_type' => 'required|string',
            'payment_method' => 'required|string',
        ]);

       

        return back()->with('success', 'Reservation made successfully!');
    }
    
    public function booking(){
        return view('admin.booking');
    }
}

