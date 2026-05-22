@extends('layout.app')
@section('title', 'Exercícios - StayFit')
@section('content')

<div class="container mt-4 ">

    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">

        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="fa-solid fa-dumbbell"></i> Exercícios
            </h3>
            <small class="text-muted">Gerenciamento de exercícios e treinos</small>
        </div>

        <div class="d-flex gap-2">
            <a class="btn btn-success btn-sm" href="{{ route('exercicios.cadastrar') }}">
                <i class="fa-solid fa-plus"></i> Cadastrar Exercício
            </a>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="input-group input-group-sm shadow-sm">
                <span class="input-group-text">
                    <i class="bi bi-search text-muted"></i>
                </span>
                <input type="text" class="form-control" placeholder="Digite o nome ou tipo do exercício...">
                <button class="btn btn-primary" type="button" id="button-search">
                    <i class="bi bi-filter"></i> Pesquisar
                </button>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <select name="" id="" class="form-select form-select-sm w-auto">
            <option value="">Filtrar por Musculatura</option>
            <option value="">Peito</option>
            <option value="">Costas</option>
            <option value="">Bíceps</option>
            <option value="">Tríceps</option>
            <option value="">Ombro</option>
            <option value="">Trapezio</option>
            <option value="">Pernas</option>
            <option value="">Abdômen</option>
            <option value="">Glúteos</option>
        </select>
    </div>

    <table class="table table-striped mt-3 caption-top">

        <caption class="text-center py-3 text-secondary fs-6 fw-light">
            <i class="bi bi-list-check"></i> Quantidade de registros: <strong> 0 </strong>
        </caption>

        <thead>
            <tr class="text-center table-secondary">
                <th>Nome</th>
                <th>Tipo</th>
                <th>Dificuldade</th>
                <th>Link</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td>Supino Reto</td>
                <td>Peito</td>
                <td>Intermediário</td>
                <td><a href="https://www.youtube.com/watch?v=example" target="_blank">Ver Exercício</a></td>
                <td class="text-center">
                    <a href="{{ route('exercicios.editar') }}?id=1" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i> Editar
                    </a>
                    <button type="button"
                        class="btn btn-sm btn-outline-secondary"
                        data-bs-toggle="modal"
                        data-bs-target="#confirmarInativar1">
                        <i class="bi bi-x-circle"></i> Inativar
                    </button>
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection