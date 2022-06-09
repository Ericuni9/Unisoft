<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css">
    <script src="javascript/script.js"></script>
    <script src="https://kit.fontawesome.com/7bd77678ec.js" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>

<body>
    <!--BOTÃO UP-->
    <div class="scroll-up-btn">
        <i class="fas fa-arrow-circle-up"></i>
    </div>

    <!--CABEÇALHO-->
    <nav class="d-flex navbar navbar-expand-lg navbar-dark justify-content-center">
        <a class="navbar-brand d-inline" href={{ route('index') }}>
            <img src="imagens/logotipo.png" alt="">
            <!--NAVBAR LOGOTIPO-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
            <!--BOTÃO DROPDOWN-->
            <div class="d-inline dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="mr-2"
                        src="data:image/png;base64,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" /><span
                        class="backluser">Olá,</span> <span class="bacluser">{{ $user->first_name }}</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/edit-user"><i class="fa-solid fa-user-pen pr-2"></i>Editar Perfil</a>
                    <a class="dropdown-item" href={{ route('perfil') }}><i class="fa-solid fa-user pr-2"></i>Meus Dados</a>
                    {{-- <a class="dropdown-item" href="#"><i class="fa-solid fa-bag-shopping pr-2"></i>Serviços</a> --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href={{ route('logout') }}><i
                            class="fa-solid fa-arrow-up-right-from-square pr-2"></i>Sair</a>
                </div>
            </div>
        </div>
    </nav>

    <!--INFORMAÇÕES DO CLIENTE-->
    <div class="informacoes">
        <div class="container">
            <h1 class="titulo">Editar Dados</h1>
            <hr>
            <!--CARD DE INFORMAÇÕES (HEADER)-->
            <div class="card dadclient">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs text-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="backend-tab" data-toggle="tab" href="#Dados" role="tab"
                                aria-controls="Dados" aria-selected="true"><i class="fa-solid fa-user pr-1"></i>
                                <p>Meus Dados</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--CARD DE INFORMAÇÕES (CONTEUDO MEUS DADOS)-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Dados" role="tabpanel" aria-labelledby="Dados-tab">
                        <form method='POST' action={{ route('update-user') }}>
                            @csrf
                            <div class="container">
                                <div class="profilediv">
                                    <img src="imagens/Perfil/UserProfile.png" alt="..."
                                        class="img-thumbnail img-fluid profile1">
                                </div>

                                <div class="form-group pt-3">
                                    <input type='hidden' name="id" value={{ $user->id }}>
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name='email'
                                        aria-describedby="emailHelp" placeholder="Seu email" value="{{ old('email', $user->email) }}">
                                   @error('email')
                                        <br/>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <span><small>{{ $message }}</small></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="hrdados">
                            <div class="container">
                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Nome completo</label>
                                            <input type="text" name='nome_completo' class="form-control" id="exampleInputNome" value="{{ old('nome_completo', $user->nome_completo) }}">
                                            @error('nome_completo')
                                                <br/>
                                                <div class="alert alert-danger alert-dismissible fade show">
                                                    <span><small>{{ $message }}</small></span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label class="ml-3" for="exampleInputEmail1">Empresa</label>
                                            <input type="text" name='empresa' class="form-control" id="exampleInputSNome" value="{{ old('empresa', $user->empresa) }}">
                                        </div>
                                        <div class="col">
                                            <label class="ml-3" for="exampleInputEmail1">Telefone</label>
                                            <input type="text" name='telefone' class="form-control" id="exampleInputSNome" value="{{ old('telefone', $user->telefone) }}">
                                        </div>
                                    </div>
                                </div>
                            <div class='row mb-2'>
                                    <div class="col">
                                        <div class='btn-sub'>
                                            <button type="submit" class="btn btn-primary">Salvar Dados</button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
    <!--CARD DE SUGESTÕES-->
    <div class="sugestoes">
        <div class="container">
            <div class="card-deck">
                <a href={{ route('index') }} target="_blank" class="point">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><i class="fa-solid fa-circle-info"></i></h2>
                            <p class="card-text">Sobre a UniSoft</p>
                        </div>
                    </div>
                </a>
                <a href="https://wa.me/+5511974551685?text=Olá!%20Meu%20nome%20é%20...%20da%20empresa%20...%20e%20gostaria%20de%20ajuda,%20por%20favor!" target="_blank" class="point">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><i class="fa-solid fa-headphones-simple"></i></h2>
                            <p class="card-text">Central do Cliente</p>
                        </div>
                    </div>
                </a>
                <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!" target="_blank" class="point">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><i class="fa-solid fa-cart-shopping"></i></h2>
                            <p class="card-text">Contrate um Serviço</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>