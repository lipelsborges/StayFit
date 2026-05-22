@extends('layout.app')
@section('title', 'Usuários - StayFit')
@section('content')
<div class="container mt-4">

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

    <div class="mt-4">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Status</th>
                    <th>Criado em</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['cargo'] }}</td>
                    <td>
                        @if($user['status'] === 'Ativo')
                            <span class="badge bg-success">Ativo</span>
                        @else
                            <span class="badge bg-secondary">Inativo</span>
                        @endif
                    </td>
                    <td>{{ $user['created_at'] }}</td>
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
        $('#users-table').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json'
            },
            pageLength: 5,
            lengthMenu: [5, 10, 12]
        });
    });
</script>

@endsection