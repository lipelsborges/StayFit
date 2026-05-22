@extends('layout.app')
@section('title', 'Funcionários - StayFit')
@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="bi bi-people-fill me-2"></i> Funcionários
            </h3>
            <small class="text-muted">Gerenciamento de funcionários e cargos</small>
        </div>
        <a class="btn btn-outline-secondary btn-sm" href="/">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>
@endsection