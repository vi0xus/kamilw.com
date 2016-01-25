@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Sign in</h2>

        <div class="row">
            <div class="six columns">
                <form role="form" method="post" action="{{ url('/login') }}" data-login-form>
                    {!! csrf_field() !!}

                    <label for="email">E-Mail Address
                        @if ($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}">

                    <label for="password">Password
                        @if ($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                        @endif
                     </label>
                    <input type="password" name="password">

                    <label><input type="checkbox" name="remember"> Remember Me</label>

                    <button type="submit" class="right">
                        <i class="fa fa-btn fa-sign-in"></i> Log me in
                    </button>

                    <a href="{{ url('/register') }}">Dont have an account?</a><br>
                    <a href="{{ url('/password/reset') }}">Forgot Your Password?</a><br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
