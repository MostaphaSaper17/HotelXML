@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0 ">
			<div class="col-12 p-0 row d-flex justify-content-center" style="font-size: 30px">
					Notifications
			</div>
			<div class="col-12 divider" style="min-height: 2px;"></div>
		</div>
		<div class="col-12 p-3">
			<div class="col-12 p-0" style="">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="direction: ltr; text-align: center; vertical-align: middle;min-width: 800px">title</th>
                            <th style="direction: ltr; text-align: center; vertical-align: middle;">time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notifications as $notification)
                            <tr style="cursor: pointer; background-color: {{ $notification->isRead == 0 ? 'rgb(118, 6, 6); color:white' :'white' }}">
                                <td id="clickableCell" data-notification-id="{{ $notification->id }}" data-notification-url="{{ $notification->url }}" style="direction: ltr; text-align: center; vertical-align: middle;" >{{ $notification->title }}
                                <td style="direction: ltr; text-align: center; vertical-align: middle;" >{{ $notification->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('click','#clickableCell',function() {
            var notificationURI = $(this).data('notification-url');
            var notificationId = $(this).data('notification-id');
            $.ajax({
                type: 'GET',
                url:'/markReadNotification/'+notificationId,
                success: function(data) {
                    window.location.href = notificationURI;
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
@endsection
