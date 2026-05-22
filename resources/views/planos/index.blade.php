@extends('layout.app')
@section('title', 'Planos - StayFit')
@section('content')

<div class="container mt-4 ">

   <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="fa-solid fa-money-check"></i> Planos
            </h3>
            <small class="text-muted">Gerenciamento de planos</small>
        </div>

        <div class="d-flex gap-2">
            <a class="btn btn-success btn-sm" href="">
                <i class="fa-solid fa-money-check"></i> Cadastrar Plano
            </a>
        </div>
    </div>

    <table class="table caption-top">
        <caption class="text-center py-3 text-secondary fs-6 fw-light">
            <i class="bi bi-list-check"></i> Quantidade de registros: <strong>0</strong>
        </caption>
        <thead>
            <tr class="text-center table-secondary">
                <th>Nome do Plano</th>
                <th>Valor</th>
                <th>Duração</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <button type="button" 
                            class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-x-circle"></i> Inativar
                    </button>
                </td>
            </tr>
        </tbody>
    </table>



</div>
@endsection