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
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
    <script src="https://kit.fontawesome.com/7bd77678ec.js" crossorigin="anonymous"></script>
    <title>UniSoft | Segurança Cibernética</title>
</head>

<body>

    <!--BOTÃO UP-->

    <div class="scroll-up-btn">
        <i class="fas fa-arrow-circle-up"></i>
    </div>

    <!--NAVBAR-->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="imagens/logotipo.png" alt="">
            <!--NAVBAR LOGOTIPO-->
        </a>


        <!--NAVBAR BOTÃO-->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!--NAVEGAÇÃO-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#empresa">QUEM SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#produtos1">PRODUTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">SERVIÇOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ciberseguranca">CIBERSEGURANÇA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">CONTATO</a>
                </li>
            </ul>
        </div>

        <!--BOTÃO LOGIN / CADASTRO-->

                @if(Auth::user())
                <div class="d-inline dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="mr-2"
                            src="data:image/png;base64,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" /><span
                            class="backluser">Olá,</span> <span class="bacluser">{{ Auth::user()->first_name }}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/edit-user"><i class="fa-solid fa-user-pen pr-2"></i>Editar Perfil</a>
                        <a class="dropdown-item" href={{ route('perfil') }}><i class="fa-solid fa-user pr-2"></i>Meus Dados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href={{ route('logout') }}><i class="fa-solid fa-arrow-up-right-from-square pr-2"></i>Sair</a>
                    </div>
                </div>
                @else 
            <ul class="nav justify-content-end">
               <li class="nav-item">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                    data-target="#ExemploModalCentralizado">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="25" viewBox="0 0 172 172"
                        style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M86,17.2c-19.00027,0 -34.4,15.39973 -34.4,34.4v5.73333c0,19.00027 15.39973,34.4 34.4,34.4c19.00027,0 34.4,-15.39973 34.4,-34.4v-5.73333c0,-19.00027 -15.39973,-34.4 -34.4,-34.4zM85.9888,108.93333c-22.96773,0 -52.43707,12.42324 -60.91667,23.44844c-5.24027,6.81693 -0.25182,16.68489 8.34245,16.68489h105.15964c8.59427,0 13.58271,-9.86796 8.34245,-16.68489c-8.4796,-11.01947 -37.96013,-23.44844 -60.92786,-23.44844z">
                                </path>
                            </g>
                        </g>
                    </svg> Login / Cadastro
                </button>
            </li>
            </ul>
                @endif 

    </nav>

    <!--MODAL LOGIN-->

    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        @if(session()->has('errorLogin'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>{{ session()->get('errorLogin') }}</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                    <form method="POST" action={{ route('login') }}>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu
                                email.</small>
                                {{-- @if ($errors->login->any()) --}}
                                @if($errors->login->has('email'))
                                    <div class="alert alert-danger alert-dismissible fade show">
                                            <span><small>{{ $errors->login->first('email') }}</small></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                    @endif
                                {{-- @endif --}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="font-weight-bold">Senha</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                                    @if($errors->login->has('password'))
                                        <br/>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <span><small>{{ $errors->login->first('password') }}</small></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </div>
                                    @endif
                        </div>
                        <div class="form-group form-check">
                            <a href="#contato"><small id="emailHelp" class="form-text text-right">Esqueceu sua
                                    senha?</small></a>
                        </div>
                        <div class="btnsub">
                                <button type="submit" class="btn btn-primary">ENTRAR</button></div>
                        </div>
                    </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastromodal"
                        class="close" data-dismiss="modal" aria-label="Fechar">
                        CADASTRA-SE
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL CADASTRO-->

    <div class="modal fade" id="cadastromodal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action={{ route('cadastro') }}>
                        <div class="form-group">
                            @csrf
                            <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Seu email" name="email" value="{{ old('email') }}">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu
                                email.</small>
                             @if($errors->cadastro->has('email'))
                                 <br/>
                                 <div class="alert alert-danger alert-dismissible fade show">
                                            <span><small>{{ $errors->cadastro->first('email') }}</small></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="font-weight-bold">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Senha">
                              @if($errors->cadastro->has('password'))
                                 <br/>
                                 <div class="alert alert-danger alert-dismissible fade show">
                                            <span><small>{{ $errors->cadastro->first('password') }}</small></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="font-weight-bold">Nome completo</label>
                            <input type="text" class="form-control" placeholder="Seu nome" name="nome_completo" value="{{ old('nome_completo')}}">
                            @if($errors->cadastro->has('nome_completo'))
                                 <br/>
                                 <div class="alert alert-danger alert-dismissible fade show">
                                            <span><small>{{ $errors->cadastro->first('nome_completo') }}</small></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="font-weight-bold">Empresa</label>
                            <input type="text" class="form-control" name="empresa" value="{{ old('empresa') }}"" placeholder="Sua empresa">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="font-weight-bold">Telefone</label>
                            <input type="number" class="form-control" name="telefone" value="{{ old('telefone') }}" placeholder="Telefone">
                        </div>
                        <div class="btnsub">
                        <button type="submit" class="btn btn-primary" class="close" value="Exibir Alert">
                            CADASTRA-SE
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--CAROUSEL BANNER-->

    <div id="carouselExampleSlidesOnly" class="carousel slide banner1" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="imagens/Banner/BannerInicial.png" alt="Primeiro Slide">
                <div class="carousel-caption d-block h-50 align-items-center justify-content-center">
                    <h1 class="titi">ALWAYS SAFE ALWAYS SOFT</h1>
                    <p class="pipi">A maior empresa especializada em cibersegurança do Brasil</p>
                    <a href="#empresa"><button type="button" class="btn btn-primary btn-lg">SAIBA MAIS</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--QUEM SOMOS-->

    <div id="empresa">
        <div class="container">
            <div class="row">
                <div class="col-7 mb-5 qms">
                    <h1 class="titulo">QUEM SOMOS</h1>
                    <div class="scrollcard">
                        <p>A Unisoft é uma agência de desenvolvimento de software crescente no Brasil fundada em janeiro
                            de 2016 atuando em todo o território nacional, foi criada a partir da necessidade de
                            segurança nas empresas com relação aos dados expostos na internet sem nenhum gerenciamento
                            ou amparo adequado, em virtude disso, a UniSoft surgiu usando a mais alta tecnologia de
                            proteção com profissionais especializados em segurança da informação, atualmente com demanda
                            de 300 colaboradores. A sede da agência é localizada na capital de São Paulo tendo
                            escritórios e filiais em outros estados, como Rio de Janeiro, Maranhão e Rio Grande do
                            Sul.<br><br>Temos um foco inovador com a segurança de dados, nosso forte está empenhado no
                            resguardo e proteção não somente de empresas, mas de pessoas autônomas desenvolvendo um
                            sistema único e ao nível de suas necessidades, assim tendo total certeza que nossos clientes
                            estarão praticando o uso adequado com os melhores preços podendo optar por pacotes e anos de
                            garantia, evitando ataques de Ransomware, Backdoor, Spoofing ou sequestros de dados que são
                            crescentes no mundo independente do cuidado que tomamos hoje.</p>
                    </div>
                </div>
                <div class="col-5 teste mt-5 qmss">
                    <img class="img-fluid" src="imagens/QuemSomos.png" alt="">
                </div>
            </div>
        </div>
    </div>



    <!--ESSENCIA-->

    <div id="essencia">
        <div class="container">
            <h1 class="titulo-essencia">NOSSA ESSÊNCIA</h1>
            <p>Nós da Unisoft, temos como objetivo, prover para os nossos clientes que procuram softwares de proteção,
                uma solução confiável e de qualidade, para sempre garantir que tenham o conforte de estar protegidos em
                qualquer ambiente online, assim desenvolvendo antivírus e proteções de dados.<br><br>Embora a Internet
                tenha se tornado um lugar mais seguro ao passar dos anos, pois, as pessoas sabem mais sobre hábitos de
                navegação seguros e os navegadores estão sempre tentando ficar à frente dos programadores maliciosos,
                ainda não há desculpa para navegar na web sem um programa antivírus. O software antivírus é uma das
                linhas de defesa contra os muitos programas prejudiciais que podem prejudicar o seu computador e
                segurança.</p>
            <div class="card-deck">
                <div class="card text-white">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90"
                        viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M168.6675,3.3325l-3.655,0.1075c-1.04812,0.01344 -25.6925,0.5375 -49.665,12.47c-8.66719,4.32688 -16.32656,9.87656 -22.79,16.34c-19.6725,19.6725 -58.25156,68.65219 -59.8775,70.735l-0.43,0.43l-0.215,0.645c-0.55094,1.80063 -1.29,8.80156 12.9,23.005c10.8575,10.8575 17.58969,13.115 21.285,13.115c0.83313,0 1.38406,-0.1075 1.72,-0.215l0.645,-0.215l0.5375,-0.43c2.09625,-1.65281 51.51938,-40.76937 70.6275,-59.8775c6.43656,-6.45 11.91906,-14.12281 16.2325,-22.79c11.87875,-23.93219 12.55063,-48.61687 12.5775,-49.665zM116.96,41.28c7.60563,0 13.76,6.15438 13.76,13.76c0,7.60563 -6.15437,13.76 -13.76,13.76c-7.60562,0 -13.76,-6.15437 -13.76,-13.76c0,-7.60562 6.15438,-13.76 13.76,-13.76zM30.96,68.8c-1.02125,0 -2.02906,0.40313 -2.6875,1.1825l-17.2,20.64c-0.7525,0.91375 -0.90031,2.20375 -0.5375,3.3325c0.36281,1.12875 1.20938,1.97531 2.365,2.2575l13.545,3.44l0.43,-0.43l0.3225,-0.5375c0.83313,-1.06156 11.34125,-14.41844 24.08,-29.885zM27.52,115.5625l-2.9025,4.8375c-1.94844,3.44 1.26313,9.32563 9.46,17.5225c6.69188,6.69188 11.69063,9.9975 15.265,9.9975c1.075,0 1.77375,-0.25531 2.2575,-0.5375l4.8375,-2.9025c-4.945,-2.43219 -10.34687,-6.58437 -16.34,-12.5775c-6.43656,-6.45 -10.34687,-11.825 -12.5775,-16.34zM103.2,120.615c-15.42625,12.72531 -28.81,23.34094 -29.885,24.1875l-0.43,0.3225l-0.5375,0.43l3.44,13.545c0.28219,1.15563 1.12875,2.00219 2.2575,2.365c0.34938,0.1075 0.71219,0.215 1.075,0.215c0.79281,0 1.51844,-0.22844 2.15,-0.7525l20.64,-17.2c0.77938,-0.65844 1.29,-1.66625 1.29,-2.6875zM22.0375,131.4725c-5.61687,4.31344 -10.69625,4.86438 -15.265,9.3525c-2.28437,2.24406 -4.09844,5.42875 -5.16,9.7825c-1.06156,4.35375 -1.505,9.97063 -1.505,17.845v3.44h3.44c15.8025,0 23.52906,-2.49937 28.165,-7.2025c4.63594,-4.70312 5.40188,-9.94375 8.9225,-14.7275l-5.59,-4.085c-4.46125,6.07375 -5.45562,11.11281 -8.2775,13.975c-2.48594,2.52625 -8.02219,4.38063 -19.4575,4.8375c0.17469,-4.99875 0.41656,-9.79594 1.075,-12.47c0.86,-3.48031 1.90813,-5.16 3.225,-6.45c2.62031,-2.58 7.75344,-3.73562 14.5125,-8.9225z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h6 class="card-title">MISSÃO</h6>
                        <div class="scrollcard">
                            <p class="card-text">A UniSoft é uma empresa socialmente responsável, aqui a nossa missão é
                                ajudar pessoas autônomas e empresas a manter sua integridade e segurança na internet,
                                além disso, proteger usuários contra todo tipo de ameaça digital e ataques cibernéticos
                                de dados através de serviços de segurança e capacitação constante, assim auxiliando
                                empresas a manter estabilidade e proteção podendo agir de forma confiante em seus
                                segmentos sem sofrer danos ou grandes perdas.</p>
                        </div>
                    </div>
                </div>

                <div class="card text-white">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90"
                        viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M86,28.66667c-57.33333,0 -78.83333,57.33333 -78.83333,57.33333c0,0 20.26364,53.61439 73.6123,57.01139c-1.247,-4.43617 -1.94564,-9.12373 -1.94564,-14.01139c0,-2.67317 0.25688,-5.27321 0.64388,-7.82455c-16.66967,-3.0745 -29.31055,-17.61712 -29.31055,-35.17545c0,-19.79433 16.039,-35.83333 35.83333,-35.83333c17.55833,0 32.10095,12.64088 35.17545,29.31055c2.55133,-0.387 5.15138,-0.64388 7.82455,-0.64388c12.97167,0 24.60361,4.72317 33.42578,12.52767c1.62684,-3.31817 2.40756,-5.361 2.40756,-5.361c0,0 -21.5,-57.33333 -78.83333,-57.33333zM86,64.5c-11.868,0 -21.5,9.632 -21.5,21.5c0,11.0725 8.4121,20.09388 19.17643,21.26205c4.88767,-10.39167 13.19395,-18.69795 23.58561,-23.58561c-1.16817,-10.76433 -10.18955,-19.17643 -21.26205,-19.17643zM129,93.16667c-20.06667,0 -35.83333,15.76667 -35.83333,35.83333c0,20.06667 15.76667,35.83333 35.83333,35.83333c7.138,0 14.27611,-2.13511 20.00228,-5.69694l10.764,10.764c1.3975,1.3975 3.23239,2.09961 5.06706,2.09961c1.83467,0 3.66956,-0.70211 5.06706,-2.09961c2.80217,-2.80217 2.80217,-7.33194 0,-10.13411l-10.764,-10.764c3.56183,-5.72617 5.69694,-12.86428 5.69694,-20.00228c0,-20.06667 -15.76667,-35.83333 -35.83333,-35.83333zM129,107.5c12.18333,0 21.5,9.31667 21.5,21.5c0,12.18333 -9.31667,21.5 -21.5,21.5c-12.18333,0 -21.5,-9.31667 -21.5,-21.5c0,-12.18333 9.31667,-21.5 21.5,-21.5z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h6 class="card-title">VISÃO</h6>
                        <div class="scrollcard">
                            <p class="card-text">A visão da UniSoft é ser uma agência nacionalmente conhecida e
                                considerada em segurança e proteção contra ataques cibernéticos e sequestro de dados
                                dando todo suporte necessário para empresas de grandes à pequeno porte, ou usuários com
                                grande necessidade de nossos serviços, tendo como objetivo para 5 anos se estender
                                mundialmente se tornando referência por nossa tecnologia, serviços, funcionários e
                                melhor preço para que assim atenda todas as necessidades trazendo soluções inovadoras e
                                constantes</p>
                        </div>
                    </div>
                </div>

                <div class="card text-white">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90"
                        viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M126.07734,28.4987c-0.42672,0.00872 -0.85114,0.06506 -1.26536,0.16797h-38.52083h-0.57109h-38.97995c-0.28503,-0.04782 -0.57326,-0.07402 -0.86224,-0.07839c-1.98041,-0.01091 -3.82625,1.00091 -4.88229,2.6763l-33.40338,38.97995c-1.28457,1.13863 -1.99144,2.79288 -1.92638,4.50821c0.06506,1.71533 0.8952,3.31129 2.26232,4.34934l73.88385,73.88386c0.01849,0.02254 0.03716,0.04493 0.05599,0.06718l0.07839,0.06719c0.26984,0.27154 0.5662,0.51538 0.88464,0.72786c0.0149,0.00753 0.02983,0.015 0.04479,0.0224c0.13805,0.09196 0.28002,0.17789 0.42552,0.25755c0.02977,0.01145 0.05963,0.02265 0.08958,0.0336c0.659,0.34024 1.37774,0.54939 2.1164,0.61589c0.19359,0.01733 0.38794,0.0248 0.58229,0.02239c0.07472,-0.00227 0.14939,-0.00601 0.22396,-0.0112c0.09722,-0.00499 0.1943,-0.01246 0.29114,-0.02239c0.01866,0.00009 0.03732,0.00009 0.05599,0c0.03366,-0.00716 0.06725,-0.01463 0.10078,-0.0224c0.15404,-0.0199 0.3072,-0.04605 0.45912,-0.07839c0.15075,-0.0313 0.30018,-0.06865 0.44792,-0.11198c0.03744,-0.01082 0.07477,-0.02201 0.11198,-0.03359c0.04123,-0.01446 0.08229,-0.02939 0.12317,-0.04479c0.31764,-0.1109 0.6249,-0.24954 0.91823,-0.41432c0.00374,-0.00373 0.00747,-0.00746 0.0112,-0.0112c0.12992,-0.0734 0.25693,-0.15185 0.38073,-0.23516c0.03008,-0.0221 0.05994,-0.0445 0.08958,-0.06719c0.26749,-0.18728 0.51848,-0.39707 0.75026,-0.62708l0.04479,-0.03359c0.02644,-0.02959 0.05257,-0.05945 0.07839,-0.08958l73.90625,-73.90625c1.36166,-1.03995 2.18691,-2.63434 2.24976,-4.34655c0.06285,-1.71221 -0.64328,-3.36281 -1.92502,-4.4998l-33.15703,-38.6776c-1.0066,-1.91774 -3.00788,-3.10465 -5.17344,-3.06823zM53.45885,40.13333h21.38802l-15.27396,21.38802zM97.15312,40.13333h21.38802l-6.11406,21.38802zM86,44.27656l17.51354,24.52344h-35.02709zM43.27995,46.2138l6.45,22.5862h-25.8zM128.72005,46.2138l19.35,22.5862h-25.8zM25.30729,80.26667h28.08438l17.55833,45.64271zM65.68698,80.26667h40.62604l-20.31302,52.82058zM118.60833,80.26667h28.08438l-45.64271,45.64271z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h6 class="card-title">VALORES</h6>
                        <div class="scrollcard">
                            <p class="card-text">Inovação<br>Integridade<br>Responsabilidade
                                Social<br>Diversidade<br>Segurança<br>Ética<br>Transparência<br>Desafios<br>Comprometimento<br>Respeito
                                e Sustentabilidade</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--PARCEIROS E CLIENTES-->

    <div id="parceiros">
        <div class="container espaço">
            <h1 class="titulo-parceiros">PARCEIROS E CLIENTES</h1>
            <p class="text-parceiros">No processo de nossa trajetória, aproximadamente 20 grandes e renomadas empresas
                necessitadas de preservação utilizam nossos softwares e pacotes de segurança, entre elas empresas da
                área de contabilidade, tecnologia, saúde, comercial e financeiro. Nossos futuros projetos estão em
                desenvolvimento para prezar a segurança e proteção do mundo empresarial aumentando nossa equipe e
                filiais trazendo futuras possíveis soluções.</p>
            <div class="lala">
                <h3>Parceiros</h3>
                <div class="imagem-parceiro">
                    <abbr title="Deloitte"><a href="https://www2.deloitte.com/br/pt.html" target="blank"><img
                                src="imagens/ClientesParceiros/deloitte.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Absolute"><a href="https://www.absolute.com" target="blank"><img
                                src="imagens/ClientesParceiros/absolute.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Idwall"><a href="https://idwall.co" target="blank"><img
                                src="imagens/ClientesParceiros/idwall.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="TOVS"><a href="https://www.totvs.com" target="blank"><img
                                src="imagens/ClientesParceiros/TOTVSSA.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                </div>
                <h3>Clientes</h3>
                <div class="imagem-clientes">
                    <abbr title="JP Morgan"><a href="https://www.jpmorgan.com/us/en/home" target="blank"><img
                                src="imagens/ClientesParceiros/jpmorgan.png" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Souzamaas"><a href="https://souzamaas.com.br" target="blank"><img
                                src="imagens/ClientesParceiros/souzamaas.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="NotreDame"><a href="https://www.gndi.com.br" target="blank"><img
                                src="imagens/ClientesParceiros/notredame.png" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Rockcontent"><a href="https://rockcontent.com/br/" target="blank"><img
                                src="imagens/ClientesParceiros/rockcontent.jpeg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                </div>
            </div>
        </div>
    </div>

    <!--TRABALHE CONOSCO-->

    <div id="trabalhe">
        <div class="container">
            <div class="row align-items-center linha">
                <div class="col-8">
                    <div class="text-trabalhe">FAÇA PARTE DO NOSSO COLETIVO DE
                        PROTAGONISTAS<br><span>#TimeUniSoft</span></div>
                </div>
                <div class="col">
                    <a href="https://forms.gle/ZK4Cx8Qqi5qiiyfU7" target="blank"><button type="button"
                            class="btn btn-secondary btn-lg trabalhebtn">TRABALHE CONOSCO</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--PRODUTOS-->

    <div id="produtos1">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagens/Banner/BannerServicos.png" alt="Primeiro Slide">
                    <div class="carousel-caption d-block h-75">
                        <h1>UNISOFT SOLUÇÕES <br> DE SEGURANÇA</h1>
                        <p>Obtenha proteção adaptativa contra ameaças <br> avançadas direcionadas aos seus negócios</p>
                        <a href="#produtoscard"><button type="button"
                                class="btn btn-primary btn-lg">CONHECER</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!--CARD PRODUTOS-->

        <div id="produtoscard">
            <div class="card-deck">
                @foreach($produtos1 as $produto)
                    <div class="card mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                            height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,226v-226h226v226z" fill="none"></path>
                                <g fill="#1c3ccd">
                                    <path
                                        d="{{$produto->icon_path}}">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->title}}</h5>
                            <p class="card-text mb-3">{{$produto->description}}</p>
                        </div>
                        <div class="card-footer">
                            <a class="producard" href="#" type="button" data-toggle="modal" data-target="{{"#produto".$produto->id}}">Ler Mais
                                <i class="fas fa-angle-right"></i></a>
                        </div>
                </div>
                @endforeach
            </div>
            <div class="card-deck">
                @foreach($produtos2 as $produto)
                    <div class="card mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                            height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,226v-226h226v226z" fill="none"></path>
                                <g fill="#1c3ccd">
                                    <path
                                        d="{{$produto->icon_path}}">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->title}}</h5>
                            <p class="card-text mb-3">{{$produto->description}}</p>
                        </div>
                        <div class="card-footer">
                            <a class="producard" href="#" type="button" data-toggle="modal" data-target="{{"#produto".$produto->id}}">Ler Mais
                                <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

    <!--MODAL PRODUTOS-->

    <div id="modalprod">
        @foreach($allProducts as $produto)
        <div class="modal fade" id="{{"produto".$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">{{$produto->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                           {{$produto->description_long}}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary btnsub">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!--SERVIÇOS-->

    <div id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="imagens/Servicos/servicos.png" alt="">
                </div>
                <div class="col-6 pp">
                    <h1>SERVIÇOS</h1>
                    <p>A UniSoft fornece suporte técnico para produtos e uma variedade de serviços de suporte projetados
                        para garantir que nossas soluções sejam instaladas rapidamente, configuradas facilmente e operem
                        de forma confiável em sua rede. O modelo de suporte follow-the-sun da TAC garante que podemos
                        resolver seus problemas a qualquer hora do dia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col imgserv">
                    <img class="img-fluid" src="imagens/Servicos/ServicosGerenciados.jpg" alt="">
                    <h2>SERVIÇOS GERENCIADOS</h2>
                    <p>Tenha tudo que sua empresa precisa próximo de vocÊ quando for necessário, mantenha-se longe de
                        problemas e ataques cibereticos com a melhor equipe do Brasil e softwares altamente potentes</p>
                </div>
                <div class="col imgserv">
                    <img class="img-fluid" src="imagens/Servicos/ServicosProfissionais.jpg" alt="">
                    <h2>SERVIÇOS PROFISSIONAIS</h2>
                    <p>Serviço e suporte disponíveis 24 horas por dia, 7 dias por semana para todo tipo de problemas
                        inclusos no pacote, tenha treinamnto e uma equipe pronta para agir em situações de riscos</p>
                </div>
            </div>
            <div class="row tipserv mt-5">
                @foreach($servicos as $servico)
                <div class="col mb-5">
                    <a href="#" type="button" data-toggle="modal" data-target="{{"#servico".$servico->id}}"><img class="img-fluid mb-1"
                            src="{{$servico->icon_path}}" alt=""></a>
                    <h4 class="servsubtt">{{$servico->title}}</h4>
                    <a href="#" type="button" data-toggle="modal" data-target="{{"#servico".$servico->id}}"><button type="button"
                            class="btn btn-outline-primary">Saiba mais</button></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--MODAL SERVIÇOS-->

    <div class="modalservcos">
        @foreach($servicos as $servico)
            <div class="modal fade" id="{{"servico".$servico->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalCentralizado">{{$servico->title_modal}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!! html_entity_decode($servico->description) !!}
                        </div>
                        <div class="modal-footer">
                            <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20serviço,%20por%20favor!"><button type="button" class="btn btn-primary btnsub">CONTRATAR</button></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!--CIBERSEGURANÇA-->

    <div id="ciberseguranca">
        <div class="bannerlgpd">
            <img class="img-fluid" src="imagens/Banner/BannerLgpd.png" alt="">
            <div class="container">
                <h1 class="mb-4 mt-5">A SUA EMPRESA ESTÁ EM CONFORMIDADE COM A LGPD?</h1>
                <p>Descubra se a sua empresa está dentro dos padrões de segurança exigidos pela Lei Geral De Proteção De
                    Dados.</p>
            </div>
        </div>
        <div class="container">
            <div class="introducao">
                <h2 class="mb-3">MAS AFINAL, O QUE É A <span>LEI DE PROTEÇÃO DE DADOS</span> E COMO ELA ME AFETA?</h2>
                <div class="media">
                    <img class="align-self-center mr-3 img-fluid" src="imagens/LgpdIlustracao.png"
                        alt="Imagem de exemplo genérica">
                    <div class="media-body">
                        <p class="mt-5">A Lei Geral de Proteção de Dados (LGPD) – Lei nº 13.709, sancionada no Brasil em
                            Agosto de 2018, tem previsão para entrar em vigor em 14 de Agosto de 2020 e afetará a
                            maneira como as empresas capturam, manipulam e armazenam os dados de seus clientes,
                            funcionários diretos e terceirizados.</p>
                    </div>
                </div>
            </div>
            <div class="row cardlgpd">
                <div class="col">
                    <h4 class="mb-4 titulolgpd1">DADO<br>PESSOAL</h4>
                    <p>Um dado pessoal pode ser definido como qualquer informação sobre uma pessoa que, se em conjunto
                        ou isolada, tornem possível sua identificação.</p>
                </div>
                <div class="col">
                    <h4 class="mb-4 titulolgpd">DADO PESSOAL SENSÍVEL</h4>
                    <p>Está relacionado à origem étnica ou racial, crenças religiosas, filiação sindical, direcionamento
                        político e orientação sexual.</p>
                </div>
                <div class="col">
                    <h4 class="mb-4 titulolgpd">DADO PESSOAL ANONIMIZADO</h4>
                    <p>Dado relacionado ao titular que não possa ser identificado, considerando a utilização de meios
                        técnicos razoáveis e disponíveis na ocasião de seu tratamento.</p>
                </div>
            </div>
        </div>
        <div id="backlgpd">
            <div class="container">
                <div class="fimlgpd">
                    <h1 class="mb-4">GARANTA A PRIVACIDADE DOS DADOS DA SUA EMPRESA</h1>
                    <p class="mb-5">A Unisoft auxilia sua empresa a se adequar à lei e adotar as melhores práticas no
                        controle de informações. Trabalhamos com consultores e parceiros especializados e altamente
                        capacitados para orientar todos os processos para sua organização estar de acordo com a LGPD.
                    </p>
                    <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary btn-lg mb-5">ENTRAR EM CONTATO <i
                                class="fas fa-angle-right fa-lg"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    <!--CONTATO-->

    <div id="contato">
        <div class="container">
            <div class="cabeca">
                <h1>CONTATO</h1>
                <h3>Fale Conosco</h3>
                <p>Para falar com um de nossos representantes sobre informações de produtos, demonstrações de produtos
                    ou para obter respostas para suas dúvidas, preencha o formulário abaixo e entraremos em contato em
                    até 1 dia útil.</p>
            </div>

            <form class="needs-validation" novalidate method="post">
                <div class="form-row">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Primeiro Nome"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe seu Nome.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom02" class="col-sm-2 col-form-label">Sobrenome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe seu Sobrenome.
                        </div>
                    </div>
                    <br><br><br>
                    <label for="validationCustom03" class="col-sm-2 col-form-label">País</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom03" placeholder="País" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um País.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom04" class="col-sm-2 col-form-label">Razão Social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom04" placeholder="Razão Social"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe uma Razão Social.
                        </div>
                    </div>
                    <br><br><br>
                    <label for="validationCustom05" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="validationCustom05" placeholder="Seu Email"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um e-mail valido.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom06" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="validationCustom06"
                            placeholder="Telefone para contato" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um número para contato.
                        </div>
                    </div>
                    <br><br><br>
                    <label for="validationCustom07" class="col-sm-2 col-form-label">Interesse</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom07"
                            placeholder="Produto ou Serviço de Interesse" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um serviço ou produto para agilizar nosso contato.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Comentários</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01">
                    </div>
                </div>
                <div class="form-group mt-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label">
                            Eu gostaria de solicitar uma demonstração
                        </label>
                    </div>
                    <div class="form-group mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Autorizo explicitamente a coleta e utilização dos meus dados pessoais inseridos no
                                formulário de registro acima, pela AO UNISOFT, para me contatar e fornecer informações
                                sobre os produtos da UNISOFT e serviços, incluindo ofertas promocionais personalizadas e
                                atualizações como white papers, webcasts, vídeos, eventos e outros materiais de
                                marketing e ofertas relacionadas, de acordo com a Política de Privacidade da UNISOFT.
                            </label>
                            <div class="invalid-feedback">
                                Você deve concordar, antes de continuar.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary formm" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!--FOOTER-->

    <footer class="footer">
        <div class="container">
            <div class="row infpp mx-auto">

                <!--INFORMAÇÕES DA EMPRESA-->

                <div class="col-md-auto imgh">
                    <a href="#"><img src="imagens/emblema.png" alt="..." class="img-fluid"></a>
                </div>
                <div class="col-md-auto opop">
                    <p class="mb-4 p1">SÃO PAULO</p>
                    <p class="endd enddd">Av. Professor Luiz Ignácio Anhaia Mello, 1363 <br> Vila Prudente - SP</p>
                </div>
                <div class="col-md-auto opop">
                    <p class="mb-4 p1">RIO DE JANEIRO</p>
                    <p class="endd enddd">Av. Rio Branco, 257 – 2º Andar <br> Centro – RJ</p>
                </div>
                <div class="col-md-auto opop1">
                    <p class="mb-4 p1">SANTA CATARINA</p>
                    <p class="endd">Avenida Hironildo Conceição dos Santos, 135 <br> Porto Belo - SC</p>
                </div>
            </div>

            <div class="row mx-auto">

                <div class="footer-col col-md-3">
                    <h4>EMPRESA</h4>
                    <ul>
                        <li><a href="#empresa">Sobre Nós</a></li>
                        <li><a href="#essencia">Essência</a></li>
                        <li><a href="https://forms.gle/ZK4Cx8Qqi5qiiyfU7" target="_blank">Trabalhe Conosco</a></li>
                        <li><a href="" type="button" data-toggle="modal" data-target="#ExemploModalCentralizado">Portal
                                do Usuário</a></li>
                    </ul>
                </div>

                <!--MENU DO SITE-->

                <div class="footer-col col-md-3">
                    <h4>SERVIÇOS</h4>
                    <ul>
                        <li><a href="#produtos1">Produtos</a></li>
                        <li><a href="#servicos">Serviços De Segurança</a></li>
                        <li><a href="#ciberseguranca">LGPD</a></li>
                        <li><a href="#backlgpd">Orçamentos</a></li>
                    </ul>
                </div>

                <!--SUPORTE-->

                <div class="footer-col col-md-3">
                    <h4>SUPORTE</h4>
                    <ul>
                        <li><a href="/politica" target="_blank">Política de Privacidade</a></li>
                        <li><a href="/termos" target="_blank">Termos e Condições</a></li>
                        <li><a href="#contato">Suporte Técnico</a></li>
                    </ul>
                </div>

                <!--REDES SOCIAIS-->

                <div class="footer-col col-md-3">
                    <h4>REDES SOCIAIS</h4>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/school/uninove/"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/Ryan-STT/Unisoft"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
    </footer>

</body>
    @if ($errors->cadastro->any())
        <script>
            $( document ).ready(function() {
                $('#cadastromodal').modal('show');
            });
        </script>
    @endif

    @if($errors->login->any() || session()->has('errorLogin'))
        <script>
            $( document ).ready(function() {
                $('#ExemploModalCentralizado').modal('show')
            });
        </script>
    @endif
</html>