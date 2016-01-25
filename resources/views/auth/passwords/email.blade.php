@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Reset Password</h2>

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

                <button type="submit">Send Password Reset Link</button>
            </form>
        </div>
    </div>
</div>
@endsection
