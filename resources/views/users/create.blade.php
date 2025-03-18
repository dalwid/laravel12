@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Cadastrar Usuário</h1>
            <a href="#" class="btn-primary">Listar</a>
        </div>

        <x-alert />

        <form action="{{ route('user.store') }}" method="POST" class="form-container">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" name="name" id="name" class="form-input" placeholder="Nome completo"
                    value="{{ old('name') }}" required><br><br>
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" class="form-input"
                    placeholder="Melhor e-mail do usuário" value="{{ old('email') }}" required><br><br>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Senha: </label>
                <input type="password" name="password" id="password" class="form-input"
                    placeholder="Senha com no mínimo 6 carcteres" value="{{ old('password') }}" required><br><br>
            </div>

            <button type="submit" class="btn-success">Cadastrar</button>
        </form>
    </div>
@endsection
