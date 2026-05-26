@extends('layout.app')
@section('title', 'Cadastrar Aluno - StayFit')
@section('content')


<div class="container mt-4 pt-4">
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Cadastrar Aluno</h5>
        </div>

        <form method="post" action="{{route('alunos.cadastrarAluno')}}">

            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control form-control-sm" name="nome" placeholder="Digite o nome do aluno">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control form-control-sm" name="cpf" placeholder="Digite o CPF do aluno">
                </div>

                <div class="mb-3">
                    <label for="nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control form-control-sm" name="datanasc">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control form-control-sm" name="telefone" placeholder="Digite o telefone do aluno">
                </div>

                <div class="mb-3">
                    <label for="plano_id" class="form-label">Plano</label>
                    <select name="plano_id" class="form-select form-select-sm">
                        <option value="">Selecione um plano</option>
                        @foreach($planos as $plano)
                        <option value="{{ $plano->id }}">{{ $plano->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <br>

                <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa-solid fa-user-plus"></i> Cadastrar Aluno
                </button>
                <a href="{{ route('alunos.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-x"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection