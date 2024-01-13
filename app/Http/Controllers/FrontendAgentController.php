<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Agent;
use App\Models\Offer;
use App\Models\Country;
use App\Models\Message;
use App\Models\Employee;
use App\Models\GusetName;
use App\Models\Transaction;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\ManualBooking;
use App\Models\SupportTicket;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendAgentController extends Controller
{
    public function agent()
    {
        $agent = Auth::guard('agent')->user();
        $countries = Country::all();
        $agent_bookings = ManualBooking::where('company_name',$agent->company_name)->get();
        $complete_bookings_number = $agent_bookings->where('booking_status','complete')->count();
        $cancelled_bookings_number = $agent_bookings->where('booking_status','cancelled')->count();
        $unpaid_bookings_number = $agent_bookings->where('booking_status','confirm')->count();
        $total_paid = $agent_bookings->where('booking_status','complete')->sum('total_price');
        $total_unpaid = $agent_bookings->where('booking_status','confirm')->sum('total_price');
        $offers = Offer::latest()->take(5)->get();
        // dd($unpaid_bookings_number);
        return view('website.agent.home',compact(
            'countries',
            'agent','agent_bookings',
            'total_paid','total_unpaid',
            'complete_bookings_number',
            'cancelled_bookings_number',
            'unpaid_bookings_number','offers'
        ));
    }

    public function employee()
    {
        $employee = Auth::guard('employee')->user();
        $offers = Offer::latest()->take(5)->get();
        // dd($unpaid_bookings_number);
        return view('website.agent.home',compact(
            'employee',
            'offers'
        ));
    }

    public function booking_list()
    {
        $agent = Auth::guard('agent')->user();
        $agent_bookings = ManualBooking::where('company_name',$agent->company_name)->orderBy('created_at', 'desc')->get();

        // dd($agent_bookings->guest_names());
        return view('website.agent.booking-list',compact('agent_bookings','agent'));
    }

    public function profile()
    {
        if(Auth::guard('employee')->user())
        {
            $employee = Auth::guard('employee')->user();
            $closed_tickets = SupportTicket::where('status','Closed')->get();
            $open_tickets = SupportTicket::where('status','Open')->get();
            return view('website.agent.profile-employee',compact(
                'open_tickets',
                'closed_tickets',
                'employee',
            ));
        }

        $currentMonthNumber = Carbon::now()->month;
        $month = '';
        if($currentMonthNumber == 1){
            $month = 'January';
        }
        elseif($currentMonthNumber == 2){
            $month = 'Febraury';
        }
        elseif($currentMonthNumber == 3){
            $month = 'March';
        }
        elseif($currentMonthNumber == 4){
            $month = 'April';
        }
        elseif($currentMonthNumber == 5){
            $month = 'May';
        }
        elseif($currentMonthNumber == 6){
            $month = 'June';
        }
        elseif($currentMonthNumber == 7){
            $month = 'July';
        }
        elseif($currentMonthNumber == 8){
            $month = 'August';
        }
        elseif($currentMonthNumber == 9){
            $month = 'September';
        }
        elseif($currentMonthNumber == 10){
            $month = 'October';
        }
        elseif($currentMonthNumber == 11){
            $month = 'November';
        }
        else{
            $month = 'December';
        }

        $agent = Auth::guard('agent')->user();
        $employees = Employee::where('agent_id',$agent->id)->orderBy('created_at', 'desc')->get();
        $transactions = Transaction::where('company_name',$agent->company_name)->orderBy('created_at', 'desc')->get();
        $countries = Country::all();
        $closed_tickets = SupportTicket::where('status','Closed')->orderBy('id', 'desc')->get();
        $open_tickets = SupportTicket::where('status','Open')->orderBy('id', 'desc')->get();
        $currency = $agent->currency;
        $monthReport = ManualBooking::
            where('company_name',$agent->company_name)
            ->where('booking_status','complete')
            ->whereMonth('created_at', $currentMonthNumber)
            ->sum('total_price');
            $Debit = Transaction::where('type','Debit')
                ->where('company_name',$agent->company_name)
                ->sum('balance');
            $Credit = Transaction::where('type','Credit')
                ->where('company_name',$agent->company_name)
                ->sum('balance');
            return view('website.agent.profile',compact(
                'Credit','Debit',
                'currentMonthNumber',
                'currency',
                'monthReport',
                'month',
                'agent',
                'countries',
                'transactions',
                'open_tickets',
                'closed_tickets',
                'employees',
            ));
        }



        public function profile_update(Agent $agent, Request $request)
        {
            $rules = [
                'person_name' => ['required', 'string', 'max:255'],
                'person_phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
                'person_email' => ['required', 'string', 'email', 'max:255', Rule::unique('agents')->ignore($agent->person_email, 'person_email')],
                'management_name' => ['required', 'string', 'max:255'],
                'management_email' => ['required', 'string', 'email', 'max:255'],
                'management_phone' =>['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
                'address' => ['required', 'string', 'max:255'],
                'country' => ['required'],
                'city' => ['required', 'string', 'max:255'],
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
            'address' => $request['address'],
            'country' => $request['country'],
            'city' => $request['city'],
            'pincode' => $request['pincode'],
            'website' => $request['website'],
        ]);
        toastr()->success('Profile Updated Successfully','Success');
        return redirect()->route('agent.profile');
    }

    public function change_password(Agent $agent, Request $request)
    {
        if(!Hash::check($request->current_password, $agent->password)){
            toastr()->success('Current Password is not CORRECT','Error');
            return redirect()->route('agent.profile');
        }

        if(strlen($request->new_password) < 8){
            toastr()->success('Password Must Be 8 digits at least','Error');
            return redirect()->route('agent.profile');
        }

        if($request->confirm_new_password !== $request->new_password){
            toastr()->success('Password Confirmation is not CORRECT','Error');
            return redirect()->route('agent.profile');
        }

        $agent->password = Hash::make($request->new_password);
        $agent->save();

        toastr()->success('Password Changed Succefully','Success');
        return redirect()->route('agent.profile');
    }

    public function hotels()
    {
        return view('website.agent.hotels');
    }

    public function hotel_details()
    {
        return view('website.agent.hotel-details');
    }

    public function booking_info()
    {
        return view('website.agent.booking-info');
    }

    public function supportTicketReply(Request $request,$id)
    {
        $rules = [
            'status' => ['required'],
            'message_reply' => ['required', 'string', 'max:512'],
        ];

        $validatedData = $request->validate($rules);

        $ticket = SupportTicket::findOrFail($id);
        $ticket->update([
            'status' => $request['status'],
        ]);

        Message::create([
            'ticket_id' => $ticket->id,
            'sender' => Auth::guard()->user()->name,
            'message' => $request['message_reply'],
        ]);

        $title = 'Closed';
        if($ticket->status == 'Open'){
            $title = 'Open';
        }

        Notification::create([
            'type' => 'Message',
            'user_type' => $ticket->agent_id,
            'title' => $title,
            'url' => $ticket->ticket_code,
        ]);

        $tickets = SupportTicket::all();
        return view('admin.support-tickets.index',compact('tickets'));
    }

    public function supportTicketAgentReply(Request $request,$id)
    {
        $ticket = SupportTicket::where('id',$id)->first();
        if($ticket){

            if($request->message == null){
                return response()->json(['error' => 'Field  Message is Required. ']);
            }

            Message::create([
                'ticket_id' => $ticket->id,
                'sender' => Auth::guard('agent')->user()->company_name,
                'message' => $request['message'],
            ]);

            Notification::create([
                'type' => 'Message',
                'user_type' => 'admin',
                'title' => 'A new message has sent by '.Auth::guard('agent')->user()->company_name,
                'url' => 'support-tickets/'.$ticket->id,
            ]);
            return response()->json(['success' => true]);
        }
        else{
            if($request->category === null){
                return response()->json(['error' => 'Field Category is Required ']);
            }

            if($request->message == null){
                return response()->json(['error' => 'Field Message is Required ']);
            }

            $ticket_code = 1000;
            $latestTicket = SupportTicket::latest('created_at')->first();
            if($latestTicket){
                $ticket_code = $latestTicket->ticket_code +=1;
            }
            $ticket = SupportTicket::create([
                'agent_id' => Auth::guard('agent')->user()->company_name,
                'company_email' => Auth::guard('agent')->user()->management_email,
                'ticket_code' => $ticket_code,
                'admin_id' => null,
                'category' => $request['category'],
                'subject' => $request['subject'],
                'status' => 'Open',
            ]);

            Notification::create([
                'type' => 'Support Ticket',
                'user_type' => 'admin',
                'title' => 'A new support ticket has open by '.Auth::guard('agent')->user()->company_name,
                'url' => 'support-tickets/'.$ticket->id,
            ]);

            $message = Message::create([
                'ticket_id' => $ticket->id,
                'sender' => Auth::guard('agent')->user()->company_name,
                'message' => $request['message'],
            ]);

            Notification::create([
                'type' => 'Message',
                'user_type' => 'admin',
                'title' => 'A new message has sent by '.Auth::guard('agent')->user()->company_name,
                'url' => 'support-tickets/'.$ticket->id,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function support_ticket(Request $request)
    {
        $rules = [
            'category' => ['required'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:512'],
        ];

        $validatedData = $request->validate($rules);
        $ticket_code = 1000;
        $latestTicket = SupportTicket::latest('created_at')->first();
        if($latestTicket){
            $ticket_code = $latestTicket->ticket_code +=1;
        }

        $ticket = SupportTicket::create([
            'agent_id' => Auth::guard('agent')->user()->company_name,
            'company_email' => Auth::guard('agent')->user()->management_email,
            'admin_id' => null,
            'ticket_code' => $ticket_code,
            'category' => $request['category'],
            'subject' => $request['subject'],
            'status' => 'Open',
        ]);

        Notification::create([
            'type' => 'Support Ticket',
            'user_type' => 'admin',
            'title' => 'A new support ticket has opened by '.Auth::guard('agent')->user()->company_name,
            'url' => 'support-tickets/'.$ticket->id,
        ]);

        Message::create([
            'ticket_id' => $ticket->id,
            'sender' => Auth::guard('agent')->user()->company_name,
            'message' => $request['message'],
        ]);

        Notification::create([
            'type' => 'Message',
            'user_type' => 'admin',
            'title' => 'A new message has sent by '.Auth::guard('agent')->user()->company_name,
            'url' => 'support-tickets/'.$ticket->id,
        ]);

        toastr()->success('Ticket Sent Successfully','Success');
        return redirect()->route('agent.profile');
    }

    public function register_employee(Request $request)
    {
        $rules = [
            'user_name' => ['required', 'string', 'max:255','unique:employees'],
            'password' => ['required', 'string', 'min:8'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'mobile' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'country' => ['required'],
            'city' => ['required', 'string', 'max:255'],
        ];

        $validatedData = $request->validate($rules);
        // dd($request);
        Employee::create([
            'agent_id' => Auth::guard('agent')->user()->id,
            'user_name' => $request['user_name'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'designation' => $request['designation'],
            'address' => $request['address'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'mobile' => $request['mobile'],
            'country' => $request['country'],
            'city' => $request['city'],
            'status' => $request['status'] == 1 ? : 0,
            'book' => $request['book'] == 1 ? : 0,
            'pay' => $request['pay'] == 1 ? : 0,
            'cancel' => $request['status'] == 1 ? : 0,
            'password' => Hash::make($request['password']),
        ]);
        toastr()->success('Employee Added Successfully','Success');
        return redirect()->route('agent.profile');
    }
}
