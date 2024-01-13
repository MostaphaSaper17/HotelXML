@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.supportTicketReply',$ticket)}}">
            @csrf
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> Ticket Show
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12"></div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Agent Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="agent" disabled maxlength="190" class="form-control" value="{{$ticket->agent_id}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Email
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="agent" disabled maxlength="190" class="form-control" value="{{$ticket->company_email}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Subject
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="subject" disabled maxlength="190" class="form-control" value="{{$ticket->subject}}">
                        </div>
                    </div>

                    <div class="col-6 p-2">
                        <div class="col-6">
                            Status
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control" name="status">
                                <option @if($ticket->status=="Open") selected @endif value="Open">Open</option>
                                <option @if($ticket->status=="Closed") selected @endif value="Closed">Closed</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 p-2">
                        <div class="col-12">
                            Messages
                        </div>
                        <div class="col-12 pt-3">
                            @foreach ($messages as $message)
                                <input class="form-control" value="{{ $message->sender == 'مسئوول' ? 'Admin' : $message->sender }}: {{ $message->message }}" disabled style="min-height:30px; background-color:{{ $message->sender == 'مسؤول' ? '#D1D1D1' : 'ACACAC'}} ; direction: {{ $message->sender == 'مسؤول' ? 'ltr' : 'rtl'}} ">
                                <span class="form-control" disabled style="min-height:30px; direction: {{ $message->sender == 'مسؤول' ? 'ltr' : 'rtl'}} ">{{ $message->created_at->format('d/m/Y H:i') }}</span>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                    @if($ticket->status == 'Open')
                    <div class="col-12 col-lg-12 p-2">
                        <div class="col-12">
                            Reply
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="message_reply" class="form-control" style="min-height:150px"></textarea>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @if($ticket->status == 'Open')
                <div class="col-12 p-3">
                    <button class="btn btn-success" id="submitEvaluation">Send</button>
                </div>
            @endif
        {{-- </form> --}}
    </div>
</div>
@endsection
