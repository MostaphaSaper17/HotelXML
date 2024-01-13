@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-articles"></span> Booking Statistics
				</div>
				<div class="col-12 col-lg-4 p-0">
				</div>
				<div class="col-12 col-lg-4 p-2 text-lg-end">
				</div>
			</div>
			<div class="col-12 divider" style="min-height: 2px;"></div>
		</div>

        <div class="col-12 p-3 row d-flex justify-content-center" >
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2" >
                <div class="col-12 px-0 py-1 d-flex main-box-wedit" style=" border: solid; border-color:green ; color: rgb(255, 255, 255); background-color: green;">
                    <div style="width: 120cm; height: 120px;" class="px-2 py-2">
                        <h5 style="float: left" >Complete Bookings  </h5>
                        <br><hr>
                        <div class="d-flex justify-content-center"><h2 id="complete" style="color: rgb(255, 255, 255)">{{ $complete }}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2" >
                <div class="col-12 px-0 py-1 d-flex main-box-wedit" style=" border: solid; border-color: rgb(255, 0, 0) ; color: rgb(255, 255, 255); background-color: red;">
                    <div style="width: 120cm; height: 120px;" class="px-2 py-2">
                        <h5 style="float: left" >Cancelled Bookings  </h5>
                            <br><hr>
                            <div class="d-flex justify-content-center"><h2 id="cancelled" style="color: rgb(255, 255, 255)">{{ $cancelled }}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2" >
                <div class="col-12 px-0 py-1 d-flex main-box-wedit" style=" border: solid; background-color: rgb(168, 168, 5); color: rgb(255, 255, 255); background-color: rgb(168, 168, 5);">
                    <div style="width: 120cm; height: 120px;" class="px-2 py-2">
                        <h5 style="float: left" > Confirm Bookings </h5>
                        <br><hr>
                        <div class="d-flex justify-content-center"><h2 id="confirm" style="color: rgb(255, 255, 255)">{{ $confirm }}</h2></div>
                    </div>
                </div>
            </div>
		</div>

        <div class="col-12 p-3 row" >
            <div class="col-12 col-lg-3 p-2">
                <div class="col-12">
                    Agent Filter
                </div>
                <div class="col-12 pt-3">
                    <select id="agent" class="form-control select2-select" name="agent_id"  size="1" style="height:30px;opacity: 0;">
                        <option value=""> Select Agent </option>
                        @foreach ($agents as $agent)
                            <option value="{{ $agent->company_name }}" >{{ $agent->company_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12 col-lg-3 p-2">
                <div class="col-12">
                    Date From
                </div>
                <div class="col-12 pt-3">
                    <input type="date" name="date_from" id="date_from" class="form-control">
                </div>
            </div>

            <div class="col-12 col-lg-3 p-2">
                <div class="col-12">
                    Date To
                </div>
                <div class="col-12 pt-3">
                    <input type="date" name="date_to" id="date_to" class="form-control">
                </div>
            </div>

            <div class="col-12 col-lg-3 p-2">
                <div class="col-12">
                    Status Filter
                </div>
                <div class="col-12 pt-3">
                    <select id="status" class="form-control select2-select" name="agent_id"  size="1" style="height:30px;opacity: 0;">
                        <option value=""> Select Status </option>
                        <option value="complete"> Complete </option>
                        <option value="cancelled"> Cancelled </option>
                        <option value="confirm"> Confirm </option>
                    </select>
                </div>
            </div>

            <div class="">
                <div class="col-12 col-lg-12 p-2 " >
                    <div class="col-12 d-flex justify-content-center">
                        <button id="filter" class="btn btn-outline-success" style="margin:1%">
                            <span class="fas fa-search "></span> Filter
                        </button>
                        <button id="reset" class="btn btn-outline-danger" style="margin:1%">
                            <span class="fa fa-times "></span> Reset
                        </button>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="col-12 col-lg-12 p-2 " >
                    <div class="col-12 d-flex justify-content-center">
                        <span id="error" class="text-danger" ></span>
                    </div>
                </div>
            </div>

            <div class="col-12 p-3" >
                <div class="col-12 p-0" >
                <table class="table table-bordered  table-hover">
                    <tbody id="SalesFilter">

                    </tbody>
                </table>
                </div>
            </div>

		</div>

	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filter').on('click', function () {
                companyName = $('#agent').val();
                status= $('#status').val();
                date_from= $('#date_from').val();
                date_to= $('#date_to').val();
                if(companyName && status == ""){
                    formData = {
                        date_from: date_from,
                        date_to: date_to,
                        companyName: companyName,
                    };
                    $.ajax({
                        type: 'GET',
                        url: '/bookingStatisticsCompanyNameFilter/',
                        data: formData,
                        success: function (data) {
                            var color = 'green';
                            $('#error').empty();
                            var tbody = $('#SalesFilter');
                            tbody.empty();
                            var sum = 0;
                            var bookings = data.books;
                            console.log(bookings);
                            if(!data.message){
                                tbody.append(`
                                    <tr>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Booking Reference ID</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Company Name</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Total Price</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Status</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Date</th>
                                    </tr>
                                `);
                                bookings.forEach(function(booking) {
                                    if(booking.booking_status == 'cancelled'){
                                        color = 'red';
                                    }else if(booking.booking_status == 'confirm'){
                                        color = 'rgb(168, 168, 5)';
                                    }else{
                                        color = 'green';
                                    }
                                    var originalDate = booking.created_at;
                                    var formattedDate = new Date(originalDate).toLocaleDateString('en-GB');
                                    var row = `
                                    <tr>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.booking_reference_id}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.company_name}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.total_price} `+' '+` ${booking.agent_currency}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle; color: ${color}"" >${booking.booking_status}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${formattedDate}</td>
                                    </tr>
                                `;
                                    tbody.append(row);
                                });
                            }else{
                                $('#error').text(data.message)
                            }
                        },
                        error: function (error) {
                            console.error('Ajax request failed: ', error);
                        }
                    });
                }
                else if(status && companyName == ""){
                    formData = {
                        date_from: date_from,
                        date_to: date_to,
                        status: status,
                    };
                    $.ajax({
                        type: 'GET',
                        url: '/bookingStatisticsStatusFilter/',
                        data: formData,
                        success: function (data) {
                            var color = 'green';
                            $('#error').empty();
                            var tbody = $('#SalesFilter');
                            tbody.empty();
                            var sum = 0;
                            var bookings = data.books;
                            console.log(bookings);
                            if(!data.message){
                                tbody.append(`
                                    <tr>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Booking Reference ID</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Company Name</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Total Price</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Status</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Date</th>
                                    </tr>
                                `);
                                bookings.forEach(function(booking) {
                                    if(booking.booking_status == 'cancelled'){
                                        color = 'red';
                                    }else if(booking.booking_status == 'confirm'){
                                        color = 'rgb(168, 168, 5)';
                                    }else{
                                        color = 'green';
                                    }
                                    var originalDate = booking.created_at;
                                    var formattedDate = new Date(originalDate).toLocaleDateString('en-GB');
                                    var row = `
                                    <tr>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.booking_reference_id}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.company_name}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.total_price} `+' '+` ${booking.agent_currency}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle; color: ${color}"" >${booking.booking_status}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${formattedDate}</td>
                                    </tr>
                                `;
                                    tbody.append(row);
                                });
                            }else{
                                $('#error').text(data.message)
                            }
                        },
                        error: function (error) {
                            console.error('Ajax request failed: ', error);
                        }
                    });
                }
                else{
                    formData = {
                        date_from: date_from,
                        date_to: date_to,
                    };
                    $.ajax({
                        type: 'GET',
                        url: '/bookingStatisticsBoxesFilter/',
                        data: formData,
                        success: function (data) {
                            $('#error').empty();
                            $('#SalesFilter').empty();
                            if(!data.message){
                                    $('#complete').text(data.complete);
                                    $('#cancelled').text(data.cancelled);
                                    $('#confirm').text(data.confirm);
                            }else{
                                $('#error').text(data.message)
                            }
                        },
                        error: function (error) {
                            console.error('Ajax request failed: ', error);
                        }
                    });
                }
            });
            $('#reset').on('click',function(){
                $('#agent').val('').trigger('change');
                $('#currency').val('').trigger('change');
                $('#currency').prop('disabled', false);
                $('#date_from').val('');
                $('#date_to').val('');
                $('#error').empty();
                $('#SalesFilter').empty();

                formData = {
                        date_from: '',
                        date_to: '',
                    };
                    $.ajax({
                        type: 'GET',
                        url: '/salesReportBoxesFilter/',
                        data: formData,
                        success: function (data) {
                            var responseData = data.sumByCurrency;
                                responseData.forEach(function(item) {
                                    if(item.agent_currency == 'EUR'){
                                        $('#EUR').text(item.total_sum);
                                    }else if(item.agent_currency == 'USD'){
                                        $('#USD').text(item.total_sum);
                                    }
                                    else if(item.agent_currency == 'GBP'){
                                        $('#GBP').text(item.total_sum);
                                    }
                                    else if(item.agent_currency == 'BOB'){
                                        $('#BOB').text(item.total_sum);
                                    }
                            });
                        },
                        error: function (error) {
                            console.error('Ajax request failed: ', error);
                        }
                    });
            });

        });
    </script>
@endsection
