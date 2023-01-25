<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function bookings()
    {
        $bookings = Booking::all();

        return view('admin.booking', compact('bookings'));
    }
}
