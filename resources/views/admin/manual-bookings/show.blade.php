@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Show Booking : {{ $manual_booking->booking_reference_id }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                 <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Agent Name
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->company_name }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                     <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Email
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->company_email }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->company_phone }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Agent Currency
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->agent_currency }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Check-In Date
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->check_in_date }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Check-Out Date
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->check_out_date }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-6">
                            Adults Number
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->adults_number }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Children Ages
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->children_ages }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Room Types
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->room_types }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Guest Names
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->guest_names }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Nationality
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->nationality }}" id="companyCurrency" type="text" class="form-control">

                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Hotel Name
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->hotel_name }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Room Meal
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->room_meal }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Country
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->country }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->city }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Hotel Address
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->hotel_address }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Hotel Phone
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->hotel_phone }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Booking Status
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->booking_status }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Confirmation Number
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->confirmation_number ?? '' }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Supplier Name
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->supplier_name }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Supplier Reference
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->supplier_reference }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Supplier Currency
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->supplier_currency }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Amount
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->amount }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                             ( % ) Markup
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->markup }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Cancellation Policy
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->cancellation_policy }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Refund Date
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled value="{{ $manual_booking->refund_date ?? '' }}" id="companyCurrency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            Booking Notes
                        </div>
                        <div class="col-12 pt-3">
                            <textarea disabled class="form-control" style="min-height:150px">{{$manual_booking->booking_notes}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 px-0 d-flex pt-3">
                        <div class="col-12">
                            Send Email To Confirm Booking Details
                        </div>
                        <div class="col-9 px-2" >
                            <div class="form-switch">
                                <input class="form-check-input" disabled type="checkbox" {{$manual_booking->send_email==1?"checked":""}} style="width: 50px;height:25px" value="1">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
