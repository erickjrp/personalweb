@if(Session::has('success_message'))
<div class="alert alert-verde alert-dismissible text-center" role="alert">
	<button type="button" class="close close-green-alert" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>{!! Session::get('success_message') !!}</strong>
</div>
@endif