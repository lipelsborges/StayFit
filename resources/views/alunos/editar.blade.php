@extends('layout.app')

@section('title', 'Editar Aluno - StayFit')
@section('content')
<div class="container mt-4 ">

    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">

        <div>
            <h3 class="fw-bold mb   -0 text-secondary">
                <i class="bi bi-people-fill me-2"></i> Alunos
            </h3>
            <small class="text-muted">Edição de informações do aluno</small>
        </div>
    </div>

    <form action="">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control form-control-sm" id="nome" placeholder="Digite o nome do aluno" value="João Silva">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control form-control-sm" id="cpf" placeholder="Digite o CPF do aluno" value="123.456.789-00">
        </div>

        <div class="mb-3">
            <label for="nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control form-control-sm" id="nascimento" value="1990-01-01">
        </div>

        <div class="mb-3">
            <label for="plano" class="form-label">Plano</label>
            <select id="plano" class="form-select form-select-sm">
                <option value="">Selecione um plano</option>
                <option value="mensal" selected>Básico</option>
                <option value="semanal">Black</option>
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
@endsection