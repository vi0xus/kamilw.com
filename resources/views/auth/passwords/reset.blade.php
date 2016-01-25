@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Reset Password</h2>

        <div class="row">
            <div class="six columns">
                {!! Form::open(['url' => '/password/reset']) !!}
                    {!! csrf_field() !!}

                    <label for="email">E-Mail Address:
                        @if ($errors->has('email'))
                            <span class="error">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </label>
                    {!! Form::email('email', '', ['placeholder' => 'Your Email']) !!}

                    <label for="password">New Password:
                        @if ($errors->has('password'))
                            <span class="error">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </label>
                    {!! Form::password('password', '') !!}

                    <label for="password_confirmation">Confirm Password:
                        @if ($errors->has('password_confirmation'))
                            <span class="error">
                                {{ $errors->first('password_confirmation') }}
                            </span>
                        @endif
                    </label>
                    {!! Form::password('password_confirmation', '') !!}

                    <button type="submit">Reset Password</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
