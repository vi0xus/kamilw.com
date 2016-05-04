@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Forgot Password?</h2>

        <p>Please enter your email address, either the one you used to create your account, or if you are using social media to login, please enter the email associated to that social media account.</p>
        <p>We will send you a verification email to allow you to reset your password.</p>

        <div class="row">
            <div class="six columns">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['url' => '/password/email']) !!}
                {!! csrf_field() !!}

                <label for="email">E-Mail Address
                    @if ($errors->has('email'))
                        <span class="error">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </label>
                {!! Form::email('email', '', ['placeholder' => 'Your email']) !!}

                <button type="submit" class="default">Continue</button>
            </form>
        </div>
    </div>
</div>
@endsection
