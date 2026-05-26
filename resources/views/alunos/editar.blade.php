@extends('layout.app')
@section('title', 'Editar Aluno - StayFit')
@section('content')


<div class="container mt-4 pt-4">
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Informações do Aluno</h5>
        </div>
        <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" name="nome" class="form-control form-control-sm" id="nome" placeholder="Digite o nome do aluno" value="{{ $aluno->nome }}">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control form-control-sm" id="cpf" placeholder="Digite o CPF do aluno" value="{{ $aluno->cpf }}">
                </div>
                <div class="mb-3">
                    <label for="nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" name="datanasc" class="form-control form-control-sm" id="nascimento" value="{{ $aluno->datanasc }}">
                </div>
                <div class="mb-3">
                    <label for="plano" class="form-label">Plano</label>
                    <select id="plano" name="plano_id" class="form-select form-select-sm">
                        <option value="">Selecione um plano</option>
                        @foreach($planos as $plano)
                            <option value="{{ $plano->id }}" {{ $aluno->plano_id == $plano->id ? 'selected' : '' }}>{{ $plano->nome }}</option> 
                        @endforeach
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="bi bi-check"></i> Salvar Alterações
                </button>
                <a href="{{ route('alunos.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-x"></i> Cancelar
                </a>
        </form>
    </div>
</div>
@endsection