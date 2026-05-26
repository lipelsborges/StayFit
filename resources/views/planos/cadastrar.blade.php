@extends('layout.app')
@section('title', 'Cadastrar Plano - StayFit')
@section('content')

<div class="container mt-4 ">

   <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="fa-solid fa-money-check"></i> Planos
            </h3>
            <small class="text-muted">Cadastro de novos planos</small>
        </div>
   </div>

    <form method="post" action="">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Plano</label>
            <input type="text" class="form-control form-control-sm" name="nome" placeholder="Digite o nome do plano">
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" class="form-control form-control-sm" name="valor" placeholder="Digite o valor do plano" step="0.01">
        </div>

        <button type="submit" class="btn btn-success btn-sm">
            <i class="fa-solid fa-money-check"></i> Cadastrar Plano
        </button>
        <a href="{{ route('planos.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-x"></i> Cancelar
        </a>
    </form>

</div>
@endsection