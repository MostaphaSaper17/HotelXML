@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-articles"></span> Sales Report
				</div>
				<div class="col-12 col-lg-4 p-0">
				</div>
			</div>
			<div class="col-12 divider" style="min-height: 2px;"></div>
		</div>

        <div class="col-12 p-3 row d-flex justify-content-center" >
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2" >
                <div class="col-12 px-0 py-1 d-flex main-box-wedit" style=" border: solid; border-color: rgb(124, 124, 124) ; color: rgb(0, 0, 0); background-color: rgb(202, 202, 202)">
                    <div style="width: 120cm; height: 120px;" class="px-2 py-2">
                        (&pound;)<h5 style="float: left" >Sterling Pound  </h5>
                            <br><hr>
                            <div class="d-flex justify-content-center"><h2 id="GBP" style="color: rgb(0, 0, 0)">{{ $GBP_SUM }}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2" >
                <div class="col-12 px-0 py-1 d-flex main-box-wedit" style=" border: solid; border-color: rgb(124, 124, 124) ; color: rgb(0, 0, 0); background-color: rgb(202, 202, 202)">
                    <div style="width: 120cm; height: 120px;" class="px-2 py-2">
                        (&euro;)<h5 style="float: left" >Euro  </h5>
                            <br><hr>
                            <div class="d-flex justify-content-center"><h2 id="EUR" style="color: rgb(0, 0, 0)">{{ $EUR_SUM }}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2" >
                <div class="col-12 px-0 py-1 d-flex main-box-wedit" style=" border: solid; border-color: rgb(124, 124, 124) ; color: rgb(0, 0, 0); background-color: rgb(202, 202, 202)">
                    <div style="width: 120cm; height: 120px;" class="px-2 py-2">
                        (&#36;)<h5 style="float: left" >US Dollar  </h5>
                            <br><hr>
                            <div class="d-flex justify-content-center"><h2 id="USD" style="color: rgb(0, 0, 0)">{{ $USD_SUM }}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2" >
                <div class="col-12 px-0 py-1 d-flex main-box-wedit" style=" border: solid; border-color: rgb(124, 124, 124) ; color: rgb(0, 0, 0); background-color: rgb(202, 202, 202)">
                    <div style="width: 120cm; height: 120px;" class="px-2 py-2">
                        (BOB)<h5 style="float: left" >  Bolivian Bolivano </h5>
                            <br><hr>
                            <div class="d-flex justify-content-center"><h2 id="BOB" style="color: rgb(0, 0, 0)">{{ $BOB_SUM }}</h2></div>
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
                    Currency Filter
                </div>
                <div class="col-12 pt-3">
                    <select id="currency" class="form-control select2-select" name="agent_id"  size="1" style="height:30px;opacity: 0;">
                        <option value=""> Select Currency </option>
                        <option value="GBP"> Sterling Pound </option>
                        <option value="USD"> US Dollar </option>
                        <option value="EUR"> Euro </option>
                        <option value="BOB"> Bolivian Bolivano </option>
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
                <div id="PrintDiv" class="col-12 p-0" >
                    <div id="talweesa_right" hidden style="float: right">
                        <p >random text could be replaced</p>
                        <p >random text could be replaced</p>
                        <p >random text could be replaced</p>
                    </div>
                    <div id="talweesa_left" hidden style="float: left">
                        <p >random text could be replaced</p>
                        <p >random text could be replaced</p>
                        <p >random text could be replaced</p>
                    </div>
                    <table class="table table-bordered  table-hover">
                        <tbody id="SalesFilter">

                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    <button id="print" hidden class="btn btn-outline-primary" style="width:120px; color:black; margin:1%">
                        Print <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                    </button>
                </div>
            </div>
		</div>

	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#agent').change(function() {
                var companyName = $(this).val();
                console.log(companyName);
                $.ajax({
                    url: '/getCompanyCurrency/'+companyName,
                    type: 'GET',
                    success: function(response) {
                        $('#currency').val(response.companyCurrency).trigger('change');
                        $('#currency').prop('disabled', true);
                    },
                    error: function(error){
                        $('#currency').val('').trigger('change');
                        $('#currency').prop('disabled', false);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#filter').on('click', function () {
                companyName = $('#agent').val();
                currency= $('#currency').val();
                date_from= $('#date_from').val();
                date_to= $('#date_to').val();
                if(companyName){
                    formData = {
                        date_from: date_from,
                        date_to: date_to,
                        companyName: companyName,
                    };
                    $.ajax({
                        type: 'GET',
                        url: '/salesReportCompanyNameFilter/',
                        data: formData,
                        success: function (data) {
                            $('#error').empty();
                            var tbody = $('#SalesFilter');
                            tbody.empty();
                            var sum = 0;
                            var bookings = data.books;
                            if(!data.message){
                                $('#print').attr('hidden',false);
                                tbody.append(`
                                    <tr>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Booking Reference ID</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Company Name</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Total Price</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Date</th>
                                    </tr>
                                `);
                                bookings.forEach(function(booking) {
                                    var originalDate = booking.created_at;
                                    var formattedDate = new Date(originalDate).toLocaleDateString('en-GB');
                                    var row = `
                                    <tr>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.booking_reference_id}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.company_name}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" > ${booking.total_price} `+' '+` ${currency}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${formattedDate}</td>
                                    </tr>
                                `;
                                    sum += parseFloat(booking.total_price);
                                    tbody.append(row);
                                });
                                tbody.append(`
                                    <tr>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" colspan="4">Sum Of Complete Booking:  ${sum} `+' '+` ${currency}  </td>
                                    </tr>
                                `);
                            }else{
                                $('#error').text(data.message)
                            }
                        },
                        error: function (error) {
                            console.error('Ajax request failed: ', error);
                        }
                    });
                }
                else if(currency){
                    formData = {
                        date_from: date_from,
                        date_to: date_to,
                        currency: currency,
                    };
                    $.ajax({
                        type: 'GET',
                        url: '/salesReportCurrencyFilter/',
                        data: formData,
                        success: function (data) {
                            $('#error').empty();
                            var tbody = $('#SalesFilter');
                            tbody.empty();
                            var bookings = data.books;
                            var sum = 0;
                            if(!data.message){
                                $('#print').attr('hidden',false);
                                tbody.append(`
                                    <tr>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Booking Reference ID</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Company Name</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Total Price</th>
                                        <th style="direction: ltr; text-align: center; vertical-align: middle; background-color:#AAA " >Date</th>
                                    </tr>
                                `);
                                bookings.forEach(function(booking) {
                                    var originalDate = booking.created_at;
                                    var formattedDate = new Date(originalDate).toLocaleDateString('en-GB');
                                    var row = `
                                    <tr>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.booking_reference_id}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${booking.company_name}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" > ${booking.total_price} `+' '+` ${currency}</td>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" >${formattedDate}</td>
                                    </tr>
                                `;
                                    sum += parseFloat(booking.total_price);
                                    tbody.append(row);
                                });
                                tbody.append(`
                                    <tr>
                                        <td style="direction: ltr; text-align: center; vertical-align: middle;" colspan="4">Sum Of Complete Booking:  ${sum} `+' '+` ${currency}  </td>
                                    </tr>
                                `);
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
                        currency: currency,
                    };
                    $.ajax({
                        type: 'GET',
                        url: '/salesReportBoxesFilter/',
                        data: formData,
                        success: function (data) {
                            $('#error').empty();
                            $('#SalesFilter').empty();
                            if(data.EmptyArray){
                                console.log('here');
                                $('#EUR').text(0);
                                $('#USD').text(0);
                                $('#GBP').text(0);
                                $('#BOB').text(0);
                            }
                            else if(!data.message){
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
            $('#print').on('click',function(){
                console.log('hi');
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
        document.getElementById('print').addEventListener('click', function() {
            $('#talweesa_right').attr('hidden',false);
            $('#talweesa_left').attr('hidden',false);
            var printContent = document.getElementById('PrintDiv');
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent.innerHTML;

            window.print();

            document.body.innerHTML = originalContent;
            location.reload();
        });
    </script>

@endsection
