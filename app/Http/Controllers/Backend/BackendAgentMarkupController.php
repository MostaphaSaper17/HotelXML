<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendAgentMarkupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $markups = Agent::select('id','company_name', 'management_email', 'management_phone','markup')->orderBy('created_at', 'desc')->get();
        return view('admin.agents-markup.index',compact('markups'));
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
    public function edit($id)
    {
        $markup = Agent::select('id','company_name', 'management_email', 'management_phone','markup')
        ->where('id',$id)->first();
        return view('admin.agents-markup.edit',compact('markup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $rules = [
            'markup' => ['required', 'numeric', 'between:-100,100'],
        ];
        $validatedData = $request->validate($rules);

        $agent = Agent::where('id',$id)->first();
        $agent->update([
            'markup' => $request['markup'],
        ]);
        toastr()->success('Markup Updated Successfully','Success');
        return redirect()->route('admin.agents-markup.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
