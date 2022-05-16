@extends('layout.base')

@section('titulo','Login')

@section('scripts')
    @include('scripts.suporte-broswer')
@endsection

@section('conteudo')
    <div class="wrapper container-fluid d-flex justify-content-center align-items-center">
        <form class="form-signin text-center" action={{route('login')}} method="POST">

            {{ csrf_field() }}

            <div class="form-login-heading">
                <img src="./img/newLogo.png" class="img-fluid">
            </div>

            <input type="email" class="form-control" name="email" placeholder="E-Mail">

            <input type="password" class="form-control" name="password" placeholder="Senha">

            <button type="submit" class="form-control btn btn-success">Entrar</button>
    

            <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                
            
        </form>
    </div>
    @include('layout.modal')
@endsection
