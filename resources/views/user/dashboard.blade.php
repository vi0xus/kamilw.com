@extends('layouts.app')

@section('content')
<div class="page">
	<div class="container content">
		<h2 class="page-title">Hello {{ Auth()->user()->name }}</h2>

		<div class="row">
			<div class="six columns">
				<p>Coming Soon</p>
			</div>
		</div>
	</div>
</div>
@endsection
