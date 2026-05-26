<!DOCTYPE html>
<html lang="PT-BR" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/icone.png') }}" type="image/png">
    <title>@yield('title', 'StayFit')</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body class="d-flex">



    {{-- ===== SIDEBAR ===== --}}
    <aside class="d-flex flex-column flex-shrink-0 bg-dark border-end sticky-top"
        style="width: 240px; height: 100vh; overflow-y: auto;">


        <div class=" pt-3 px-3  text-center">
            <img
                src="{{ asset('img/stayfit2.png') }}"
                alt="Logo StayFit"
                class="img-fluid"
                style="max-width: 145px; height: 90px;">
        </div>


        <nav class="nav flex-column p-3 gap-1">

            <a href="{{ route('index_page') }}"
                class="nav-link rounded px-3 py-2 d-flex align-items-center gap-2
                {{ request()->routeIs('index_page') ? 'bg-primary text-white' : 'text-secondary' }}">
                <i class="bi bi-house"></i> Início
            </a>

            <a href="{{ route('alunos.index') }}"
                class="nav-link rounded px-3 py-2 d-flex align-items-center gap-2
                {{ request()->routeIs('alunos.*') ? 'bg-primary text-white' : 'text-secondary' }}">
                <i class="bi bi-people"></i> Alunos
            </a>

            <a href="{{ route('avaliacao.index') }}"
                class="nav-link rounded px-3 py-2 d-flex align-items-center gap-2
                {{ request()->routeIs('avaliacao.*') ? 'bg-primary text-white' : 'text-secondary' }}">
                <i class="bi bi-clipboard-pulse"></i> Avaliação
            </a>

            <a href="{{ route('exercicios.index') }}"
                class="nav-link rounded px-3 py-2 d-flex align-items-center gap-2
                {{ request()->routeIs('exercicios.*') ? 'bg-primary text-white' : 'text-secondary' }}">
                <i class="bi bi-activity"></i> Exercícios
            </a>

            <a href="{{ route('planos.index') }}"
                class="nav-link rounded px-3 py-2 d-flex align-items-center gap-2
                {{ request()->routeIs('planos.*') ? 'bg-primary text-white' : 'text-secondary' }}">
                <i class="bi bi-card-list"></i> Planos
            </a>

            <a href="{{route('funcionarios.index')}}"
                class="nav-link rounded px-3 py-2 d-flex align-items-center gap-2
                {{ request()->routeIs('funcionarios.*') ? 'bg-primary text-white' : 'text-secondary' }}">
                <i class="bi bi-person-badge"></i> Funcionários
            </a>

            <a href=""
                class="nav-link rounded px-3 py-2 d-flex align-items-center gap-2
                {{ request()->routeIs('maquinas.*') ? 'bg-primary text-white' : 'text-secondary' }}">
                <i class="bi bi-gear"></i> Maquinas
            </a>

        </nav>
    </aside>

    {{-- ===== CONTEÚDO PRINCIPAL ===== --}}
    <div class="flex-grow-1 d-flex flex-column" style="min-height: 100vh;">

        <main class="flex-grow-1 p-4">
            @yield('content')

            @if(request()->routeIs('index_page'))
            <div class="text-center mt-5">
                <h1 class="display-4 text-secondary" id="titulo-dashboard">Bem-vindo ao <strong class="text-primary">Stay</strong><strong>Fit</strong></h1>
                <p class="lead text-muted"><strong>Gerencie seus alunos, avaliações, exercícios e planos de forma fácil e eficiente.</strong></p>
            </div>

            <div class="container mt-5">
                <div class="row g-4 justify-content-center">

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="bg-dark rounded-4 p-4 shadow h-100 d-flex justify-content-between align-items-center">

                            <div>
                                <small class="text-secondary d-block mb-2">
                                    Alunos<br>Ativos
                                </small>

                                <h1 class="fw-bold text-white mb-0">
                                    42
                                </h1>
                            </div>

                            <div class="bg-secondary bg-opacity-25 rounded-4 p-3">
                                <i class="bi bi-people-fill text-info fs-3"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="bg-dark rounded-4 p-4 shadow h-100 d-flex justify-content-between align-items-center">

                            <div>
                                <small class="text-secondary d-block mb-2">
                                    Alunos Inativos
                                </small>

                                <h1 class="fw-bold text-white mb-0">
                                    8
                                </h1>
                            </div>

                            <div class="bg-secondary bg-opacity-25 rounded-4 p-3">
                                <i class="bi bi-person-x-fill text-danger fs-3"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="bg-dark rounded-4 p-4 shadow h-100 d-flex justify-content-between align-items-center">

                            <div>
                                <small class="text-secondary d-block mb-2">
                                    Planos
                                </small>

                                <h1 class="fw-bold text-white mb-0">
                                    7
                                </h1>
                            </div>

                            <div class="bg-secondary bg-opacity-25 rounded-4 p-3">
                                <i class="bi bi-card-checklist text-warning fs-3"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="bg-dark rounded-4 p-4 shadow h-100 d-flex justify-content-between align-items-center">

                            <div>
                                <small class="text-secondary d-block mb-2">
                                    Avaliações Recentes
                                </small>

                                <h1 class="fw-bold text-white mb-0">
                                    15
                                </h1>
                            </div>

                            <div class="bg-secondary bg-opacity-25 rounded-4 p-3">
                                <i class="bi bi-bar-chart-fill text-success fs-3"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="bg-dark rounded-4 p-4 shadow h-100 d-flex justify-content-between align-items-center">

                            <div>
                                <small class="text-secondary d-block mb-2">
                                    Funcionários
                                </small>

                                <h1 class="fw-bold text-white mb-0">
                                    5
                                </h1>
                            </div>

                            <div class="bg-secondary bg-opacity-25 rounded-4 p-3">
                                <i class="bi bi-person-badge text-primary fs-3"></i>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="bg-dark rounded-4 p-4 shadow h-100 d-flex justify-content-between align-items-center">

                            <div>
                                <small class="text-secondary d-block mb-2">
                                    Exercícios Cadastrados
                                </small>

                                <h1 class="fw-bold text-white mb-0">
                                    30
                                </h1>
                            </div>

                            <div class="bg-secondary bg-opacity-25 rounded-4 p-3">
                                <i class="bi bi-bicycle text-info fs-3"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="bg-dark rounded-4 p-4 shadow h-100 d-flex justify-content-between align-items-center">

                            <div>
                                <small class="text-secondary d-block mb-2">
                                    Maquinas Cadastradas
                                </small>

                                <h1 class="fw-bold text-white mb-0">
                                    25
                                </h1>
                            </div>

                            <div class="bg-secondary bg-opacity-25 rounded-4 p-3">
                                <i class="bi bi-gear text-success fs-3"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @endif
        </main>

        <footer class="border-top px-4 py-3 text-muted small">
            @yield('rodape', '© ' . date('Y') . ' HERBERT RICHARDS')
        </footer>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>


<style>
    #titulo-dashboard {
        font-family: 'Oswald', sans-serif;
        font-size: 58px;
        font-weight:800;
        color: #9ca3af;
        letter-spacing: -3px;
    }
</style>