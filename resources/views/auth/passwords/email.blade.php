@extends('layout.base')

@section('conteudo')
<div class="wrapper container-fluid d-flex justify-content-center align-items-center">
    <form method="POST" action="{{ route('password.reset') }}">
        {{ csrf_field() }}
        <h1>Redefinir Senha</h1>
    </form>
</div>
@endsection
