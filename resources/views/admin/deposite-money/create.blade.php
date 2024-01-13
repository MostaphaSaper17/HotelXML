@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{ route('admin.deposite-money.store') }}">
            @csrf
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> Deposite Money
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
                            <input disabled id="companyEmailInput" type="text" name="company_email" maxlength="190" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled id="companyPhoneInput" type="text" name="company_email" maxlength="190" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Agent Currency
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled id="companyCurrency" type="text" name="agent_currency" maxlength="190" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Current Balance
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled id="currentBalance" type="text" name="currentBalance" maxlength="190" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Balance
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" name="balance" required maxlength="190" class="form-control" value="{{old('balance')}}">
                        </div>
                    </div>
                    <div class=" p-2">
                        <div class="col-12 p-2">
                            <div class="col-12">
                                Notes
                            </div>
                            <div class="col-12 pt-3">
                                <textarea name="notes" class="form-control" style="min-height:150px">{{old('balance')}}</textarea>
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
                    $('#currentBalance').val(response.currentBalance);
                }
            });
        });
    });
</script>
@endsection
