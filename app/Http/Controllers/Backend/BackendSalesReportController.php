<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\ManualBooking;
use App\Http\Controllers\Controller;

class BackendSalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::where('is_active',1)->get();
        $EUR_SUM=ManualBooking::where('booking_status','complete')->where('agent_currency','EUR')->sum('total_price');
        $BOB_SUM=ManualBooking::where('booking_status','complete')->where('agent_currency','BOB')->sum('total_price');
        $GBP_SUM=ManualBooking::where('booking_status','complete')->where('agent_currency','GBP')->sum('total_price');
        $USD_SUM=ManualBooking::where('booking_status','complete')->where('agent_currency','USD')->sum('total_price');
        return view('admin.sales-report.index',compact(
            'agents',
            'EUR_SUM','BOB_SUM',
            'GBP_SUM','USD_SUM',
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
