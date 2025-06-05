<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuários Aleatórios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4 text-center">Lista de Usuários</h1>

        <div class="row justify-content-center mb-4">
            <div class="col-md-6 col-lg-4">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar por nome ou email...">
            </div>
        </div>

        <div id="userCards" class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($users as $user)
                <div class="col user-card">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $user['picture']['large'] }}" class="card-img-top" alt="Foto do usuário">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user['name']['first'] }} {{ $user['name']['last'] }}</h5>
                            <p class="card-text">
                                <strong>Email:</strong> {{ $user['email'] }}<br>
                                <strong>Telefone:</strong> {{ $user['phone'] }}<br>
                                <strong>Localização:</strong> {{ $user['location']['city'] }}, {{ $user['location']['country'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="pagination" class="mt-4 d-flex justify-content-center flex-wrap gap-2"></div>


    </div>
    <script src="{{ asset('js/users.js') }}"></script>
</body>
</html>
