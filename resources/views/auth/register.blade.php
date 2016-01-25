@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Join us</h2>

        <div class="row">
            <div class="six columns">
                <form role="form" method="post" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <label for="name">Name
                        @if ($errors->has('name'))
                        <span class="error">
                            {{ $errors->first('name') }}
                        </span>
                        @endif
                    </label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                    <label for="email">E-Mail Address
                        @if ($errors->has('email'))
                        <span class="error">
                            {{ $errors->first('email') }}
                        </span>
                        @endif
                    </label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                    <label for="password">Password
                        @if ($errors->has('password'))
                        <span class="error">
                            {{ $errors->first('password') }}
                        </span>
                        @endif
                    </label>
                    <input type="password" class="form-control" name="password">

                    <label for="password_confirmation">Confirm Password
                        @if ($errors->has('password_confirmation'))
                        <span class="error">
                            {{ $errors->first('password_confirmation') }}
                        </span>
                        @endif
                    </label>
                    <input type="password" class="form-control" name="password_confirmation">

                    <button type="submit" class="right">Sign up</button>

                    <a href="{{ url('/login') }}">Already have an account?</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
