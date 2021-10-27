@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ lang('login_heading') }}</div>

                    <div class="card-body">
                        {!! form_open(route('auth.login')) !!}

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ lang('login_identity_label') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control {{ form_error('identity') ? 'is-invalid' : '' }}" name="identity" value="{{ old('identity') }}" required autocomplete="email" autofocus>

                                    @if(form_error('identity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{!! form_error('identity') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ lang('login_password_label') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control {{ form_error('password') ? 'is-invalid' : '' }}" name="password" required autocomplete="current-password">

                                    @if(form_error('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{!! form_error('password') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ lang('login_remember_label') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ lang('login_submit_btn') }}
                                    </button>

                                    
                                    <a class="btn btn-link" href="#">
                                        {{ lang('login_forgot_password') }}
                                    </a>
                                    
                                </div>
                            </div>
                        {!! form_close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
