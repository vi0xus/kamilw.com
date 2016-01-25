@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Contact</h2>

		<div class="six columns">
			<form class="full" method="post" action="{{ route('contact.index') }}">
				{!! csrf_field() !!}

				<label for="to">To: </label>
				<input type="email" name="to" placeholder="kamil_w@rocketmail.com" disabled readonly>

				<label for="from">From*: </label>
				<input type="email" name="from" placeholder="Your email" required>

				<label for="subject">Subject: </label>
				<input type="text" name="subject" placeholder="Hi Kamil!">

				<label for="body">Message*: </label>
				<textarea name="body" placeholder="Type your message." required></textarea>

				<small>Fields marked with an asterisk(*) are required.</small>
				<br>
				<br>
				<button class="right button">Send Message <i class="fa fa-envelope-o"></i></button>
			</form>
		</div>
    </div>
</div>
@endsection
