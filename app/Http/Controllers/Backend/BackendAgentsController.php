<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BackendAgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::orderBy('created_at', 'desc')->get();
        return view('admin.agents.index',compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.agents.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'person_name' => ['required', 'string', 'max:255'],
            'person_phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'person_email' => ['required', 'string', 'email', 'max:255', 'unique:agents'],
            'password' => ['required', 'string', 'min:8'],
            'management_name' => ['required', 'string', 'max:255'],
            'management_email' => ['required', 'string', 'email', 'max:255'],
            'management_phone' =>['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'user_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'company_reg_no' => ['required', 'numeric'],
            'nature_of_business' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'city' => ['required', 'string', 'max:255'],
            'currency' => ['required'],
            'pincode' => ['required', 'numeric'],
            'website'=> ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],

        ];

        $validatedData = $request->validate($rules);
        // dd($request);
        Agent::create([
            'person_name' => $request['person_name'],
            'person_phone' => $request['person_phone'],
            'person_email' => $request['person_email'],
            'management_name' => $request['management_name'],
            'management_email' => $request['management_email'],
            'management_phone' => $request['management_phone'],
            'user_name' => $request['user_name'],
            'company_name' => $request['company_name'],
            'company_reg_no' => $request['company_reg_no'],
            'nature_of_business' => $request['nature_of_business'],
            'address' => $request['address'],
            'country' => $request['country'],
            'city' => $request['city'],
            'currency' => $request['currency'],
            'pincode' => $request['pincode'],
            'website' => $request['website'],
            'is_active' => $request['is_active'] == 1 ? : 0,
            'password' => Hash::make($request['password']),
        ]);
        toastr()->success('B2B User Added Successfully','Success');
        return redirect()->route('admin.agents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        return view('admin.agents.show',compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        $countries = Country::all();
        return view('admin.agents.edit',compact('countries','agent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        $rules = [
            'person_name' => ['required', 'string', 'max:255'],
            'person_phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'person_email' => ['required', 'string', 'email', 'max:255', Rule::unique('agents')->ignore($agent->person_email, 'person_email')],
            'management_name' => ['required', 'string', 'max:255'],
            'management_email' => ['required', 'string', 'email', 'max:255'],
            'management_phone' =>['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'user_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'company_reg_no' => ['required', 'numeric'],
            'nature_of_business' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'city' => ['required', 'string', 'max:255'],
            'currency' => ['required'],
            'pincode' => ['required', 'numeric'],
            'website'=> ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],

        ];

        $validatedData = $request->validate($rules);

        $agent->update([
            'person_name' => $request['person_name'],
            'person_phone' => $request['person_phone'],
            'person_email' => $request['person_email'],
            'management_name' => $request['management_name'],
            'management_email' => $request['management_email'],
            'management_phone' => $request['management_phone'],
            'user_name' => $request['user_name'],
            'company_name' => $request['company_name'],
            'company_reg_no' => $request['company_reg_no'],
            'nature_of_business' => $request['nature_of_business'],
            'address' => $request['address'],
            'country' => $request['country'],
            'city' => $request['city'],
            'currency' => $request['currency'],
            'pincode' => $request['pincode'],
            'website' => $request['website'],
            'is_active' => $request['is_active'] == 1 ? : 0,
        ]);
        toastr()->success('B2B User Updated Successfully','Success');
        return redirect()->route('admin.agents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        toastr()->success('B2B User Deleted Successfully','Success');
        return redirect()->route('admin.agents.index');
    }
}
