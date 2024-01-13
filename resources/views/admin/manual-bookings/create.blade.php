@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{ route('admin.manual-bookings.store') }}">
            @csrf
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> Add New Booking
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Agent Name
                        </div>
                        <div class="col-12 pt-3">
                            <select id="agentSelect" required class="form-control select2-select" name="agent_id"  size="1" style="height:30px;opacity: 0;">
                                <option value=""> Select Agent </option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->id }}"> {{ $agent->company_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Email
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled id="companyEmailInput" type="text" name="company_email" required maxlength="190" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled id="companyPhoneInput" type="text" name="company_email" required maxlength="190" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Agent Currency
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled id="companyCurrency" type="text" name="agent_currency" required maxlength="190" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Check-In Date
                        </div>
                        <div class="col-12 pt-3">
                            <input type="date" min="{{ date('Y-m-d', strtotime('+1 day')) }}" name="check_in_date" value="{{old('check_in_date')}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Check-Out Date
                        </div>
                        <div class="col-12 pt-3">
                            <input type="date" min="{{ date('Y-m-d', strtotime('+2 day')) }}" name="check_out_date" value="{{old('check_out_date')}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-6">
                            Adults Number
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" min="1" name="adults_number" required maxlength="190" class="form-control" value="{{old('adults_number')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Children Ages
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="children_ages" required maxlength="190" class="form-control" value="{{old('children_ages')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Room Types
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="room_types" required maxlength="190" class="form-control" value="{{old('room_types')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Guest Names
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="guest_names" required maxlength="190" class="form-control" value="{{old('guest_names')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Nationality
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="nationality"  size="1" style="height:30px;opacity: 0;">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}"> {{ $country->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Hotel Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="hotel_name" required maxlength="190" class="form-control" value="{{old('hotel_name')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Room Meal
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="room_meal" required maxlength="190" class="form-control" value="{{old('room_meal')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Country
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="country"  size="1" style="height:30px;opacity: 0;">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}"> {{ $country->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="city" required maxlength="190" class="form-control" value="{{old('city')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Hotel Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="hotel_address" required maxlength="190" class="form-control" value="{{old('hotel_address')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Hotel Phone
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="hotel_phone" required maxlength="190" class="form-control" value="{{old('hotel_phone')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Booking Status
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" id="booking_status" name="booking_status"  size="1" style="height:30px;opacity: 0;">
                                <option value="">Select Booking Status</option>
                                <option value="complete">Complete</option>
                                <option value="confirm">Confirm</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Confirmation Number
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" name="confirmation_number" maxlength="190" class="form-control" value="{{old('confirmation_number')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Supplier Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="supplier_name" required maxlength="190" class="form-control" value="{{old('supplier_name')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Supplier Reference
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" min="1" name="supplier_reference" required maxlength="190" class="form-control" value="{{old('supplier_reference')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Supplier Currency
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="supplier_currency"  size="1" style="height:30px;opacity: 0;">
                                <option value="USD" selected>USD</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                                <option value="BOB">BOB</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-2">
                        <div class="col-12">
                            Amount
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" id="amount" value="0" min="1" name="amount" required maxlength="190" class="form-control" value="{{old('amount') ? old('amount') : 0 }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-2">
                        <div class="col-12">
                             ( % ) Markup
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" id="markup" name="markup" required maxlength="190" class="form-control" value="{{old('markup') ? old('markup') : 0 }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-2">
                        <div class="col-12">
                            Total Price
                       </div>
                        <div class="col-12 pt-3">
                            <input type="text" disabled id="total" class="form-control" name="total" >
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Cancellation Policy
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" id="cancellation_policy"  name="cancellation_policy"  size="1" style="height:30px;opacity: 0;">
                                <option value="">Select Cancellation Policy</option>
                                <option value="refundable">Refundable</option>
                                <option value="non_refundable">Non-Refundable</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Refund Date
                        </div>
                        <div class="col-12 pt-3">
                            <input id="refund_date" type="date" min="{{ date('Y-m-d', strtotime('+1 day')) }}" name="refund_date" value="{{old('refund_date')}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            Booking Notes
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="booking_notes" class="form-control" style="min-height:150px">{{old('booking_notes')}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 px-0 d-flex pt-3">
                        <div class="col-12">
                            Send Email To Confirm Booking Details
                        </div>
                        <div class="col-9 px-2" >
                            <div class="form-switch">
                             <input name="send_email" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{old('open_url_in')==1?"checked":""}} style="width: 50px;height:25px" value="1">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <button class="btn btn-success" id="submitEvaluation">Save</button>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to calculate total price and update the "Total Price" input
        function calculateTotalPrice() {
            var amount = parseFloat($('#amount').val()) || 0; // Get the value from "Amount" input, default to 0 if not a valid number
            var markup = parseFloat($('#markup').val()) || 0; // Get the value from "Markup" input, default to 0 if not a valid number

            var total = amount + (amount * (markup / 100)); // Calculate total price

            // Round to 2 decimal places if total is greater than zero
            total = Math.ceil(total);

            // Format the total to remove trailing .00
            var formattedTotal = total % 1 === 0 ? total : total.toFixed(2);

            // Update the "Total Price" input
            $('#total').val(formattedTotal);
        }

        // Attach an event listener to the "Amount" and "Markup" input fields
        $('#amount, #markup').on('input', function () {
            calculateTotalPrice();
        });

        // Initial calculation on page load
        calculateTotalPrice();
    });
</script>
<script>
    $(document).ready(function() {
        $('#agentSelect').change(function() {
            var agentId = $(this).val();
            console.log(agentId);
            var url = "{{ route('agents.getCompanyEmail', ':id') }}";
            url = url.replace(':id', agentId);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#companyEmailInput').val(response.companyEmail);
                    $('#companyPhoneInput').val(response.companyPhone);
                    $('#companyCurrency').val(response.companyCurrency);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#cancellation_policy').change(function() {
            var cancellation_policy = $(this).val();
            if(cancellation_policy == 'refundable'){
                $('#refund_date').removeAttr('disabled');
            }
            if(cancellation_policy == 'non_refundable'){
                $('#refund_date').attr('disabled','disabled');
            }
        });
    });
</script>
@endsection
