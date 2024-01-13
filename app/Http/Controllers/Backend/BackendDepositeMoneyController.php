<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendDepositeMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents = Agent::all();
        return view('admin.deposite-money.create',compact('agents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction = new Transaction;

        // $reference = '';
        // $tran = Transaction::latest()->first('reference');
        // if(!$tran){
        //     $reference = "HXM10000000";
        // }else{
        //     $part2 = substr($tran['reference'], 3);
        //     $reference = ("HXM" . ($part2 + 1));
        // }

        $agent = Agent::findOrFail($request->agent_id);
        $company_name = $agent->company_name;
        $company_email = $agent->management_email;
        $company_phone = $agent->management_phone;
        $agent_currency = $agent->currency;
        $agent_balance = $agent->balance;

        $rules = [
            'agent_id' => ['required', 'string', 'max:255'],
            'balance' => ['required', 'numeric'],
            'notes' => ['nullable','string', 'max:255'],
        ];

        $validatedData = $request->validate($rules);

        $type = 'Credit';
        if($request['balance'] < 0){
            $type = 'Debit';
        }

        $transaction->create([
            'reference' => 'manual',
            'company_name' => $company_name,
            'currency' => $agent_currency,
            'balance' => $request['balance'],
            'notes' => $request['notes'],
            'type' => $type,
        ]);
        $agent->update([
            'balance' => $agent_balance + $request['balance'],
        ]);
        toastr()->success('Deposite Added Successfully','Success');
        return redirect()->route('admin.transactions.index');
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
