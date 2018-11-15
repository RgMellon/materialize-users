@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-panel" style="margin-top:4rem;">
    <span class="card-title" style="padding-bottom:2rem;display:block;font-size:1.5rem;">Cadastrar-se</span>
        <div class="row">
            <div class="col s12 m12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="first_name">Nome</label>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                            <label for="email">E-mail</label>
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

                        <div class="input-field col s12">
                            <input id="password-confirm" type="password" name="password_confirmation" required>
                            <label for="password-confirm">Senha</label>
                        </div>

                        <div class="col s12">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
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
