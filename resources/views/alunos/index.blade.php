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

    <div class="mb-3">
        <select id="filtro-status" class="form-select form-select-sm w-auto">
            <option value="">Filtrar por Status</option>
            <option value="">Todos</option>
            <option value="Ativos">Ativos</option>
            <option value="Inativos">Inativos</option>
        </select>
    </div>

    <div class="mt-4">
        <table id="alunos-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Nome</th>
                    <th class="text-center">CPF</th>
                    <th class="text-center">Data de Nascimento</th>
                    <th class="text-center">Plano</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                <tr class="text-center">
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td><?= date('d/m/Y', strtotime($aluno->datanasc)) ?></td>
                    <td>{{ $aluno->plano->nome ?? 'N/A' }}</td>
                @if($aluno->status_id === 1)
                    <td><span class="badge bg-success">Ativo</span></td>
                @else
                    <td><span class="badge bg-secondary">Inativo</span></td>
                @endif
                    <td>
                        <a href="{{ route('alunos.editar', $aluno->id) }}" class="btn btn-sm btn-outline-primary">
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
        $('#alunos-table').DataTable({
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