<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\ManualBooking;
use App\Http\Controllers\Controller;

class BackendBookingStatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::where('is_active',1)->get();
        $complete=ManualBooking::where('booking_status','complete')->count();
        $cancelled=ManualBooking::where('booking_status','cancelled')->count();
        $confirm=ManualBooking::where('booking_status','confirm')->count();
        return view('admin.booking-statistics.index',compact(
            'agents',
            'complete','cancelled',
            'confirm',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
