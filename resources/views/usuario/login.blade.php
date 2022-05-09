@extends('layout.base')

@section('titulo','Login')

@section('scripts')
    @include('scripts.suporte-broswer')
@endsection

@section('conteudo')
    <div class="wrapper container-fluid d-flex justify-content-center align-items-center">
    <form class="form-signin">
        <div class="mb-3">
            <label for="email" class="fw-bold form-label">E-Mail:</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="password" class="fw-bold form-label">Senha:</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-success">Entrar</button>
    </form>
    </div>
    @include('layout.modal')
@endsection
