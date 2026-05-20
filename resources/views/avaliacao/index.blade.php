@extends('layout.app')


<div class="container mt-4 ">

    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">

        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="bi bi-clipboard-data"></i> Avaliação
            </h3>
            <small class="text-muted">Gerenciamento de avaliações dos alunos</small>
        </div>

        <a class="btn btn-outline-secondary btn-sm" href="/">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    
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


    <table class="table table-striped mt-3 caption-top">

        <caption class="text-center py-3 text-secondary fs-6 fw-light">
            <i class="bi bi-list-check"></i> Quantidade de registros: <strong> 0 </strong>
        </caption>

        <thead>
            <tr class="text-center table-secondary">
                <th>Aluno</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td>Felipe</td>
                <td>123.456.789-00</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i> Fazer Avaliação
                    </a>
                    <button type="button"
                        class="btn btn-sm btn-outline-secondary"
                        data-bs-toggle="modal"
                        data-bs-target="#confirmarInativar1">
                        <i class="bi bi-x-circle"></i> Inativar Plano
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>