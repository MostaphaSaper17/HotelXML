@extends('layouts.agent')
@section('content')

<div class="clearfix"></div>
<!--Profile Admin Area Start-->
<div class="container-fluid profile-admin-area" id="st-content-wrapper">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon"><i class="fas fa-fw fa-envelope-open"></i></div>
                            <div class="mr-5"><h5>Messages</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab6" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
	        </div>
		    <!-- /cards -->
            <div class="st-tabs">


        <div class="tab-content">

            <div id="tab6" class="tab-pane fade">
            <div class="card mb-3">
                <div class="card-header">Messages</div>
                <div class="card-body">
                    <div class="st-tabs">
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item tab-all active"><a class="active" href="#tab8" data-toggle="tab"><i class="fas fa-fw fa-inbox"></i>Open Tickets</a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab9" data-toggle="tab"><i class="fas fa-fw fa-close"></i>Closed Tickets</a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab10" data-toggle="tab"><i class="fas fa-fw fa-check"></i>Add New Tickets</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                    <div id="tab8" class="tab-pane fade in active">
                <!-- data table -->
                <div class="table-responsive">
                    <table class="table table-room-type table-bordered" id="openticket-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Ticket</th>
                  <th>Subject</th>
                  <th>Created</th>
                  <th>Status</th>
                  <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($closed_tickets as $ticket)
                    <tr>
                    <td class="max-space"># {{ $ticket->id }}&nbsp;<span class="bg-primary label"></span></td>
                    <td class="min-space">{{ $ticket->subject }}</td>
                    <td class="min-space">{{ $ticket->created_at }}</td>
                    <td class="min-space"><span class="bg-danger label">{{ $ticket->status }}</span></td>
                    <td class="min-space">
                        <a href="{{route('admin.support-tickets.show',$ticket)}}">
                            <span class="btn  btn-outline-primary btn-sm font-1 mx-1">
                                <span class="fas fa-search "></span> Show
                            </span>
                        </a>
                    </td>
                    </tr>
                @endforeach


              </tbody>
                    </table>
                </div>
                <!-- /data table -->
                </div>
                <div id="tab9" class="tab-pane fade">
                    <!-- data table -->
                <div class="table-responsive">
                    <table class="table table-room-type table-bordered" id="closeticket-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Ticket</th>
                    <th>Subject</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                  @foreach ($open_tickets as $ticket)
                      <tr>
                      <td class="max-space"># {{ $ticket->id }}&nbsp;<span class="bg-primary label"></span></td>
                      <td class="min-space">{{ $ticket->subject }}</td>
                      <td class="min-space">{{ $ticket->created_at }}</td>
                      <td class="min-space"><span class="bg-danger label">{{ $ticket->status }}</span></td>
                      <td class="min-space">
                          <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="Reply"><i class="material-icons">reply</i></a>
                          <form method="POST" action="{{route('admin.support-tickets.destroy',$ticket)}}" class="d-inline-block">@csrf @method("DELETE")
                            <button class="btn  btn-outline-danger btn-sm font-1 mx-1" onclick="var result = confirm('Do You Want to Delete This Ticket ?');if(result){}else{event.preventDefault()}">
                                <span class="fas fa-trash "></span> Delete
                            </button>
                        </form>
                      </tr>
                  @endforeach

              </tbody>
                    </table>
                </div>
                <!-- /data table -->
                </div>
                    <div id="tab10" class="tab-pane fade">
                        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{ route('agent.support-ticket') }}">
                            @csrf
                            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">

                            <div class="col-md-6 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Category</label>
                                        <select name="category" id="category" class="inputg" required>
                                            <option value="" selected>Select Category</option>
                                            <option value="Special Request">Special Request</option>
                                            <option value="Amendment">Amendment</option>
                                            <option value="Clients in Hotel Support">Clients in Hotel Support</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Subject</label>
                                        <input type="text" id="subject" name="subject" value="{{ old('message') }}" class="inputg" placeholder="Place Subject" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Message</label>
                                        <textarea name="message" id="" rows="5" required="" class="inputg" placeholder="Type Message" autocomplete="off" style="min-height: 180px; border: 2px dashed rgba(0, 0, 0, 0.1); padding-left: 15px; padding-right: 15px;">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-3">
                                <button class="btn btn-success" id="submitEvaluation">Send</button>
                            </div>
                        </form>
                    </div>


                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
@endsection
