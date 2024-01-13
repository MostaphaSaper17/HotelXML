<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use App\Models\Message;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Http\Controllers\Controller;

class BackendSupportTicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = SupportTicket::orderBy('created_at', 'desc')->get();
        return view('admin.support-tickets.index',compact('tickets'));
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
    public function show($id)
    {
        $ticket = SupportTicket::findOrFail($id);
        $messages = Message::where('ticket_id','=',$ticket->id)->get();
        $notifications = Notification::where('user_type','admin')
        ->where('isRead',0)
        ->where('url', 'LIKE', '%' . $id . '%')->get();
        if($notifications){
            foreach($notifications as $notification)
            {
                $notification->isRead = 1;
                $notification->save();
            }
        }
        return view('admin.support-tickets.show',compact('ticket','messages'));
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
