
@extends('layout.app')
@section('title', 'Exercícios - StayFit')
@section('content')
<div class="container mt-4 ">

    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">

        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="fa-solid fa-dumbbell"></i> Exercícios
            </h3>
            <small class="text-muted">Cadastro de Exercício</small>
        </div>
    </div>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Exercício</label>
            <input type="text" class="form-control form-control-sm" id="nome" placeholder="Digite o nome do exercício">
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Exercício</label>
            <select id="tipo" class="form-select form-select-sm">
                <option value="">Selecione um tipo</option>
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

        <div class="mb-3">
            <label for="descricao" class="form-label">Dificuldade</label>
            <select id="descricao" class="form-select form-select-sm">
                <option value="">Selecione a dificuldade</option>
                <option value="">Fácil</option>
                <option value="">Médio</option>
                <option value="">Difícil</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ilustracao" class="form-label">Link Exercício</label>
            <input type="text" class="form-control form-control-sm" id="ilustracao" placeholder="Digite o link do exercício">
        </div>
        <br>
        <button type="submit" class="btn btn-success btn-sm">
            <i class="fa-solid fa-plus"></i> Cadastrar Exercício
        </button>
        <a href="{{ route('exercicios.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-x"></i> Cancelar
        </a>

    </form>

</div>
@endsection