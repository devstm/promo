@extends('layouts.registration')

@section('form')
    <div class="kt-login__signup">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Forgotten Password ?</h3>
            <div class="kt-login__desc">Enter your email to reset your password:</div>
        </div>
        <form class="kt-form" method="POST" action="{{ route('admin.password.email') }}">
            @csrf
            <div class="input-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="kt-login__actions">

                <button id="kt_login_forgot_submit"  type="submit" class="btn btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
            </div>
        </form>
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endsection
