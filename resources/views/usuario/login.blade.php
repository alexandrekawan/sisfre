@extends('layout.base')

@section('titulo','Login')

@section('scripts')
    @include('scripts.suporte-broswer')
@endsection

@section('conteudo')
        <div class="wrapper container-fluid">
            <form action={{route('login')}} method="POST" class="form-signin">

                <h2 class="form-login-heading"> <img src="./img/newLogo.png"> </h2>
                <hr class="colorgraph"><br>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-mail: </label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login" type="email" class="form-control" name="email" placeholder='Ex:admin@gmail.com' autofocus>
                    </div>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Senha: </label>

                    <div class="input-group ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif
                </div>
                {{csrf_field()}}
                <button id="entrar" style="background: #00a859; color: white; width: 150px; margin: auto" type="submit" class="btn btn-lg btn-block "> Entrar </button>
                <a class="btn btn-link" style="color: #373435" href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            </form>
        </div>
    @include('layout.modal')
@endsection
