@extends('layout.base')

@section('titulo','Login')

@section('scripts')
    @include('scripts.suporte-broswer')
@endsection

@section('conteudo')
    <div class="wrapper container-fluid d-flex justify-content-center align-items-center">
    <form class="form-signin" action={{route('login')}} method="POST">
        {{csrf_field()}}
        <div class="row align-items-center g-3">
            <div class="form-group col-md-auto col-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="fw-bold form-label">E-Mail:</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group col-md-auto col-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="fw-bold form-label">Senha:</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="col-md-auto col-12">
                <button type="submit" class="btn btn-success">Entrar</button>
            </div>
        </div>
        
    </form>
    </div>
    @include('layout.modal')
@endsection
