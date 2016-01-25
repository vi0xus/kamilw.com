@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Contact</h2>

		<div class="six columns">
			<form class="full">
				<input type="text" placeholder="kamil_w@rocketmail.com" disabled readonly>
				<input type="text" placeholder="Your email">
				<textarea>
					Type your message.
				</textarea>
				<button class="button submit">Send</button>
			</form>
		</div>
    </div>
</div>
@endsection
