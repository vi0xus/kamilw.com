@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Tell Me About Your Project</h2>

		<div class="six columns">
			<form class="full" method="post" action="{{ route('contact.index') }}">
				{!! csrf_field() !!}

				<label for="name">Your Name*:</label>
				<input type="text" name="name" placeholder="Your name">

				<label for="phone">Your Phone #*:</label>
				<input type="text" name="phone" placeholder="555 555 5555">

				<label for="from">Your Email*: </label>
				<input type="email" name="from" placeholder="Your email" required>

				<label for="to">To: </label>
				<input type="email" name="to" placeholder="kamil_w@rocketmail.com" disabled readonly>

				<label for="subject">Subject: </label>
				<input type="text" name="subject" placeholder="Hi Kamil!">

				<label for="body">Project Description*: </label>
				<textarea name="body" placeholder="Type your message." required></textarea>

				<small>Fields marked with an asterisk(*) are required.</small>
				<br>
				<br>
				<button type="submit" class="button">Send Message <i class="fa fa-envelope-o"></i></button>
			</form>
		</div>
    </div>
</div>
@endsection
