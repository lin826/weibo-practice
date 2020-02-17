@extends('layouts.default')
@section('title', 'Set New Password')

@section('content')
<div class="offset-md-1 col-md-10">
  <div class="card">
    <div class="card-header">
        <h5>Set New Password</h5>
    </div>

    <div class="card-body">
      <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">E-mail Address</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

          <div class="col-md-6">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">New Password again</label>

          <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              Reset Password
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

————————————————
Original Author: Summer
Reference: https://learnku.com/courses/laravel-essential-training/6.x/password-reset/5490
