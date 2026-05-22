@extends('layout.app')
@section('title', 'Alunos - StayFit')

@section('content')
<div class="container mt-4">


    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="fa-solid fa-user-graduate"></i> Alunos
            </h3>
            <small class="text-muted">Gerenciamento de matrículas e status</small>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('alunos.cadastrar') }}" class="btn btn-primary btn-sm"><i class="bi bi-person-add"></i> Cadastrar Aluno</a>
        </div>
    </div>



    <div class="row mb-4">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="input-group input-group-sm shadow-sm">
                <span class="input-group-text">
                    <i class="bi bi-search text-muted"></i>
                </span>
                <input type="text" class="form-control" placeholder="Digite o nome ou CPF do aluno...">
                <button class="btn btn-primary" type="button" id="button-search">
                    <i class="bi bi-filter"></i> Pesquisar
                </button>
            </div>
        </div>
    </div>



    <div class="mb-3">
        <select name="" id="" class="form-select form-select-sm w-auto">
            <option value="">Filtrar por Status</option>
            <option value="">Todos</option>
            <option value="">Ativos</option>
            <option value="">Inativos</option>
        </select>
    </div>


    <table class="table table-striped mt-3 caption-top">

        <caption class="text-center py-3 text-secondary fs-6 fw-light">
            <i class="bi bi-list-check"></i> Quantidade de registros: 1</strong>
        </caption>
        <thead>
            <tr class="text-center table-secondary">
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Plano</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr class="text-center">
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->data_nascimento }}</td>
                    <td>{{ $aluno->plano }}</td>
                    <td><span class="badge bg-success">Ativo</span></td>
                    <td>
                        <a href="{{ route('alunos.editar') }}?id={{ $aluno->id }}" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-pencil"></i> Editar
                        </a>

                        <button type="button" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-x-circle"></i> Inativar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection