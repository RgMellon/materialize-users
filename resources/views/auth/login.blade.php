@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-panel" style="margin-top:4rem;">
        <div class="row">
            <div class="col s12 m12">
                <form class="col s12" method="POST" action="{{ route('login') }}">
                    @csrf
                
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="first_name">Nome</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" required>
                            <label for="password">Senha</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col s12">
                            <div class="col s12 m6" style="padding-left: 0;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
@endsection
