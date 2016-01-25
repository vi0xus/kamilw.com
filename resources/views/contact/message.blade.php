@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Contact me</h2>

		<div class="row">
			<div class="six columns">
				{!! Form::open(['route' => 'contact.message']) !!}
					{!! csrf_field() !!}

					<label for="name">Your Name*:
						@if ($errors->has('name'))
						<span class="error">{{ $errors->first('name') }}</span>
						@endif
					</label>
					{!! Form::text('name', '', ['placeholder' => 'Your name']) !!}

					<label for="phone">Your Phone #*:
						@if ($errors->has('phone'))
						<span class="error">{{ $errors->first('phone') }}</span>
						@endif
					</label>
					{!! Form::text('phone', '', ['placeholder' => '555 555 5555']) !!}

					<label for="from">Your Email*:
						@if ($errors->has('email'))
						<span class="error">{{ $errors->first('email') }}</span>
						@endif
					</label>
					{!! Form::text('email', '', ['placeholder' => 'Your email']) !!}

					<label for="to">To:</label>
					<input type="email" name="to" placeholder="kamil_w@rocketmail.com" disabled readonly>

					<label for="subject">Subject:
						@if ($errors->has('subject'))
						<span class="error">{{ $errors->first('subject') }}</span>
						@endif
					</label>
					{!! Form::text('subject', '', ['placeholder' => 'Hi Kamil!']) !!}

					<label for="body">Message*:
						@if ($errors->has('body'))
						<span class="error">{{ $errors->first('body') }}</span>
						@endif
					</label>
					{!! Form::textarea('body', '', ['placeholder' => 'Type your message']) !!}

					<small>Fields marked with an asterisk(*) are required.</small>
					<br>
					<br>
					<button type="submit" class="right">Send Message</button>

					<a href="{{ route('contact.project') }}">Want to talk about a project idea?</a>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
