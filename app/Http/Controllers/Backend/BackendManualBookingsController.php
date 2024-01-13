<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Agent;
use App\Models\Country;
use App\Models\Transaction;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\ManualBooking;
use App\Http\Controllers\Controller;

class BackendManualBookingsController extends Controller
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
        $countries = Country::all();
        $agents = Agent::where('is_active',1)->get();
        return view('admin.manual-bookings.create',compact('countries','agents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $cancellation_policy = $request['cancellation_policy'] ?? 'non_refundable';

        $room_types = explode("-", $request['room_types']);
        $children_ages = explode("-", $request['children_ages']);
        if($request['children_ages'] == 0){
            $children_number = 0;
        }else{
            $children_number = collect($children_ages)->count();
        }
        $guest_names = explode("-", $request['guest_names']);

        $ManualBooking = new ManualBooking;
        $booking_reference_id = '';
        $mb = ManualBooking::latest()->first('booking_reference_id');
        if(!$mb){
            $booking_reference_id = "HXM1000";
        }else{
            $part2 = substr($mb['booking_reference_id'], 3);
            $booking_reference_id = ("HXM" . ($part2 + 1));
        }

        $agent = Agent::findOrFail($request->agent_id);
        $company_name = $agent->company_name;
        $company_email = $agent->management_email;
        $company_phone = $agent->management_phone;
        $agent_currency = $agent->currency;

        $total_price = ceil($request['amount'] + $request['amount']*$request['markup']/100);
        $agent_price = ceil($request['amount'] + $request['amount']*$request['markup']/100);

        if($agent_price > $agent->balance && $request['booking_status']=='complete'){
            toastr()->success('Agent Balance is Not Enough to Make a Complete Booking','Error');
            return redirect()->back();
        }

        $rules = [
            'agent_id' => ['required', 'string', 'max:255'],
            'check_in_date' => ['required', 'date', 'after_or_equal:tomorrow'],
            'check_out_date' => ['required', 'date', 'after:check_in_date'],
            'room_types'=>['required', 'string', 'max:255'],
            'guest_names'=>['required', 'string', 'max:255'],
            'adults_number' => ['required', 'numeric','max:255'],
            'children_ages'=>['required','string'],
            'nationality' => ['required'],
            'hotel_name' => ['required', 'string', 'max:255'],
            'room_meal' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'city' => ['required', 'string', 'max:255'],
            'hotel_address' => ['required', 'string', 'max:255'],
            'hotel_phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'booking_status' => ['required'],
            'confirmation_number' => ['nullable','numeric'],
            'supplier_name' => ['required', 'string', 'max:255'],
            'supplier_reference' => ['required', 'numeric'],
            'supplier_currency' => ['required'],
            'amount' => ['required', 'numeric'],
            'markup' => ['required', 'numeric','between:0,100'],
            'refund_date' => ['nullable', 'date','required_if:cancellation_policy,refundable', function ($attribute, $value, $fail) use ($request) {

                $refundDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request['refund_date']);
                $endDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request['check_in_date']);
                $startDate = \Carbon\Carbon::createFromFormat('Y-m-d',  Carbon::today()->format('Y-m-d'));

                if (!$refundDate->between($startDate, $endDate)) {
                    $fail("The Refund Date must be a date between Today and Check In Date.");
                }
            },
        ],
            'booking_notes' => ['nullable','string', 'max:255'],
        ];

        $validatedData = $request->validate($rules);

        $ManualBooking->create([
            'booking_reference_id' => $booking_reference_id,
            'company_name' => $company_name,
            'company_phone' => $company_phone,
            'company_email' => $company_email,
            'agent_currency' => $agent_currency,
            'check_in_date' => $request['check_in_date'],
            'check_out_date' => $request['check_out_date'],
            'room_numbers' => collect($room_types)->count(),
            'adults_number' => $request['adults_number'],
            'children_number' => $children_number,
            'room_types' => $request['room_types'],
            'children_ages' => $request['children_ages'],
            'nationality' => $request['nationality'],
            'guest_names' => $request['guest_names'],
            'hotel_name' => $request['hotel_name'],
            'room_meal' => $request['room_meal'],
            'country' => $request['country'],
            'city' => $request['city'],
            'hotel_address' => $request['hotel_address'],
            'hotel_phone' => $request['hotel_phone'],
            'booking_status' => $request['booking_status'],
            'confirmation_number' => $request['confirmation_number'],
            'supplier_name' => $request['supplier_name'],
            'supplier_reference' => $request['supplier_reference'],
            'supplier_currency' => $request['supplier_currency'],
            'amount' => $request['amount'],
            'markup' => $request['markup'],
            'total_price' => $total_price,
            'agent_price' => $agent_price,
            'cancellation_policy' => $cancellation_policy,
            'booking_notes' => $request['booking_notes'],
            'refund_date' => $request['refund_date'] ? $request['refund_date'] : null,
            'send_email' => $request['send_email'] == 1 ? : 0,
        ]);

        if($request['booking_status']=='complete'){
            $agent->balance = $agent->balance - $agent_price;
            $agent->save();
        }

        if($request['booking_status'] == 'complete'){
            Transaction::create([
                'reference' => $booking_reference_id,
                'company_name' => $company_name,
                'currency' => $agent_currency,
                'balance' => $agent_price,
                'notes' => '',
                'type' => 'Debit',
            ]);
        }
        toastr()->success('Booking booked Successfully','Success');
        return redirect()->route('admin.booking-reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ManualBooking $manual_booking)
    {
        $notifications = Notification::where('user_type','admin')
        ->where('url', 'LIKE', '%' . $manual_booking->id . '%')->get();
        if($notifications){
            foreach($notifications as $notification){
                $notification->isRead = 1;
                $notification->save();
            }
        }
        return view('admin.manual-bookings.show',compact('manual_booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ManualBooking $manual_booking)
    {
        $countries = Country::all();
        $agents = Agent::all();
        return view('admin.manual-bookings.edit',compact('manual_booking','countries','agents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManualBooking $manual_booking)
    {
        $cancellation_policy = $request['cancellation_policy'] ?? 'non_refundable';

        $agent = Agent::findOrFail($request->agent_id);
        $company_name = $agent->company_name;
        $company_email = $agent->management_email;
        $company_phone = $agent->management_phone;
        $agent_currency = $agent->currency;

        $room_types = explode("-", $request['room_types']);
        $children_ages = explode("-", $request['children_ages']);
        if($request['children_ages'] == 0){
            $children_number = 0;
        }else{
            $children_number = collect($children_ages)->count();
        }
        $guest_names = explode("-", $request['guest_names']);

        $total_price = ceil($request['amount'] + $request['amount']*$request['markup']/100);
        if($request['send_email'] === '1'){
            $agent_price = ceil($request['amount'] + $request['amount']*$request['markup']/100);
            $manual_booking->update([
                'agent_price' => $agent_price,
            ]);
        }
        if($total_price > $agent->balance && $request['booking_status']=='complete'){
            toastr()->success('Agent Balance is Not Enough to Make a Complete Booking','Error');
            return redirect()->back();
        }


        $rules = [
            'agent_id' => ['required', 'string', 'max:255'],
            'check_in_date' => ['required', 'date', 'after_or_equal:tomorrow'],
            'check_out_date' => ['required', 'date', 'after:check_in_date'],
            'room_types'=>['required', 'string', 'max:255'],
            'guest_names'=>['required', 'string', 'max:255'],
            'adults_number' => ['required', 'numeric','max:255'],
            'children_ages'=>['required','string'],
            'nationality' => ['required'],
            'hotel_name' => ['required', 'string', 'max:255'],
            'room_meal' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'city' => ['required', 'string', 'max:255'],
            'hotel_address' => ['required', 'string', 'max:255'],
            'hotel_phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'booking_status' => ['required'],
            'confirmation_number' => ['nullable','numeric'],
            'supplier_name' => ['required', 'string', 'max:255'],
            'supplier_reference' => ['required', 'numeric'],
            'supplier_currency' => ['required'],
            'amount' => ['required', 'numeric'],
            'markup' => ['required', 'numeric','between:0,100'],
            'refund_date' => ['nullable', 'date','required_if:cancellation_policy,refundable', function ($attribute, $value, $fail) use ($request) {

                $refundDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request['refund_date']);
                $endDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request['check_in_date']);
                $startDate = \Carbon\Carbon::createFromFormat('Y-m-d',  Carbon::today()->format('Y-m-d'));

                if (!$refundDate->between($startDate, $endDate)) {
                    $fail("The Refund Date must be a date between Today and Check In Date.");
                }
            },
        ],
            'booking_notes' => ['nullable','string', 'max:255'],
        ];

        $validatedData = $request->validate($rules);

        if($request['booking_status']=='complete' && $manual_booking['booking_status'] !== 'complete'){
            $agent->balance = $agent->balance - $total_price;
            $agent->save();
                Transaction::create([
                'reference' => $manual_booking->booking_reference_id,
                'company_name' => $company_name,
                'currency' => $agent_currency,
                'balance' => $total_price,
                'notes' => '',
                'type' => 'Debit',
            ]);
        }

        if($request['booking_status']!=='complete' && $manual_booking['booking_status'] === 'complete'){
            $agent->balance = $agent->balance + $manual_booking['total_price'];
            $agent->save();

            $transaction = Transaction::where('reference',$manual_booking->booking_reference_id);
            $transaction->delete();
        }

        $manual_booking->update([
            'company_name' => $company_name,
            'company_phone' => $company_phone,
            'company_email' => $company_email,
            'agent_currency' => $agent_currency,
            'check_in_date' => $request['check_in_date'],
            'check_out_date' => $request['check_out_date'],
            'room_numbers' => collect($room_types)->count(),
            'adults_number' => $request['adults_number'],
            'children_number' => $children_number,
            'room_types' => $request['room_types'],
            'children_ages' => $request['children_ages'],
            'nationality' => $request['nationality'],
            'guest_names' => $request['guest_names'],
            'hotel_name' => $request['hotel_name'],
            'room_meal' => $request['room_meal'],
            'country' => $request['country'],
            'city' => $request['city'],
            'hotel_address' => $request['hotel_address'],
            'hotel_phone' => $request['hotel_phone'],
            'booking_status' => $request['booking_status'],
            'confirmation_number' => $request['confirmation_number'],
            'supplier_name' => $request['supplier_name'],
            'supplier_reference' => $request['supplier_reference'],
            'supplier_currency' => $request['supplier_currency'],
            'amount' => $request['amount'],
            'markup' => $request['markup'],
            'total_price' => $total_price,
            'cancellation_policy' => $cancellation_policy,
            'booking_notes' => $request['booking_notes'],
            'refund_date' => $request['refund_date'] ? $request['refund_date'] : null ,
            'send_email' => $request['send_email'] == 1 ? : 0,
        ]);

        toastr()->success('Booking Updated Successfully','Success');
        return redirect()->route('admin.booking-reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManualBooking $manual_booking)
    {
        $manual_booking->delete();
        toastr()->success('Booking Deleted Successfully','Success');
        return redirect()->route('admin.booking-reports.index');
    }
}
