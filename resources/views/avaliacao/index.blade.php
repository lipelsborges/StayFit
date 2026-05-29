@extends('layout.app')
@section('title', 'Avaliação - StayFit')
@section('content')

<div class="container mt-4 ">

    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">

        <div>
            <h3 class="fw-bold mb-0 text-secondary">
                <i class="bi bi-clipboard-data"></i> Avaliação
            </h3>
            <small class="text-muted">Gerenciamento de avaliações dos alunos</small>
        </div>

    </div>

    <div class="mt-4 pt-4">
        <table id="avaliacao-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Aluno</th>
                    <th class="text-center">CPF</th>
                    <th class="text-center">Ações</th>
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
</div>
<style>
    div.dataTables_wrapper div.dataTables_length,
    div.dataTables_wrapper div.dataTables_filter {
        margin-bottom: 12px !important;
        padding: 4px 0;
    }
</style>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#avaliacao-table').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json'
            },
            pageLength: 10,
            lengthMenu: [10, 15, 20]
        });
        $('#filtro-status').on('change', function() {
            table.column(4).search($(this).val()).draw();
        });
    });
</script>
@endsection