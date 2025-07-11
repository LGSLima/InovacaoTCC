<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Definindo o conjunto de caracteres UTF-8 e a meta tag de visualização responsiva para dispositivos móveis -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- Título da página que aparece na aba do navegador -->
        <title>Unity+ | Plataforma de Diagnóstico Socioeconômico Comunitário.</title>

        <!-- Link para os ícones do Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Meta tags para SEO -->
        <meta name="description" content="Unity Plus é uma plataforma de diagnóstico socioeconômico comunitário que conecta você e sua comunidade com a Petrobras.">
        <meta name="robots" content="index, follow">

        <!-- Meta tags adicionais -->
        <meta name="author" content="Integra's Team">
        <meta name="copyright" content="Integra's Team">
        <meta name="keywords" content="Unity, Plataforma, Diagnóstico, Socioeconômico, Comunitário, Petrobras">
        <meta name="theme-color" content="#ffffff">
        <meta name="application-name" content="Unity Plus">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../image/favicon_io/mstile-150x150.png">
        <meta name="apple-mobile-web-app-title" content="Unity Plus">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- Ícones do site -->
        <link rel="apple-touch-icon" sizes="180x180" href="../image/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../image/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../image/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="../image/favicon_io/site.webmanifest">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" 
        crossorigin="anonymous">
        
        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg mx-lg-5 px-lg-5 mx-4 mb-5 pb-5 mb-lg-0 pb-lg-0">
                <div class="container-fluid my-3">
                    <!-- Logo do sistema -->
                    <a href="index.html" class="navbar-brand">
                        <img src="../image/unity_logo.png" alt="" srcset="" style="max-width: 20%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-navigation" aria-controls="menu-navigation" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="menu-navigation">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-lg-flex gap-lg-4" style="font-size: 1.1rem;">
                            <li class="nav-item">
                                <a href="../index.html" class="nav-link"><i class="bi bi-house-door-fill h4"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="relato.php" class="nav-link active" aria-current="page">Relato</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link disabled">Fórum</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link disabled" >Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link disabled">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link d-flex gap-2">
                                    <i class="bi bi-person-circle h4"></i>
                                    <span>Entrar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="d-flex flex-column align-items-center flex-grow-1">
            <!-- Seção de introdução e chamada para relato -->
            <article class="container my-4 pb-5 row align-items-center" style="min-height: 80vh;">
                <!-- Texto de incentivo ao relato -->
                <section class="col-lg-6 col-12 my-4">
                    <h1 class="fw-bold mb-3" style="color: #0097b2;">Relate para transformar</h1>
                    <h4 class="fw-semibold mb-3">Sua participação faz a diferença na construção de uma comunidade melhor.</h4>
                    <p class="mb-3">Compartilhe situações, problemas ou sugestões de forma simples e segura. Acompanhe o andamento do seu relato e contribua para soluções reais.</p>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-shield-lock-fill text-success me-2"></i>
                            <span class="fw-bold">Segurança Garantida:</span>
                        </div>
                        <ul class="small ps-4 mb-2" style="max-width: 90%;">
                            <li>Proteção de dados conforme LGPD</li>
                            <li>Criptografia ponta a ponta</li>
                            <li>Opção de anonimato</li>
                        </ul>
                    </div>
                    <div class="d-flex flex-wrap gap-3 align-items-center mb-4 small">
                        <span class="badge text-white px-3 py-2 d-flex align-items-center gap-1" style="background-color: #0097b2;">
                            <i class="bi bi-graph-up-arrow me-1"></i>
                            Relatos nas últimas 24h: <span class="fw-bold">132</span>
                        </span>
                        <span class="badge bg-success px-3 py-2 d-flex align-items-center gap-1">
                            <i class="bi bi-emoji-smile-fill me-1"></i>
                            Satisfação: <span class="fw-bold">92%</span>
                        </span>
                        <span class="badge bg-secondary px-3 py-2 d-flex align-items-center gap-1">
                            <i class="bi bi-people-fill me-1"></i>
                            Comunidade ativa
                        </span>
                    </div>
                </section>
                <!-- Imagem ilustrativa do relato -->
                <section class="col-lg-6 col-12 d-flex justify-content-center align-items-center mb-4">
                    <div style="position: relative; width: 100%; max-width: 400px; height: 420px;">
                        <div class="shadow rounded-4 img-shadow img-fluid"></div>
                        <img src="../image/relato.png" alt="Pessoas de uma comunidade tirando um retrato" class="rounded-4 shadow img-relato" style="position: relative; z-index: 2; width: 100%; height: auto; object-fit: cover;">
                    </div>
                </section>
            </article>

            <!-- Cards de etapas do relato (visível apenas em telas grandes) -->
            <div class="w-100 d-lg-flex mt-lg-5 pt-lg-5 d-none justify-content-center" style="position: relative; z-index: 2;">
                <div class="d-flex flex-row gap-4 justify-content-center w-100" style="margin-top: -70px; margin-bottom: -70px;">
                    <!-- Card: Prioridade -->
                    <div class="card" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body">
                            <h5 class="card-title">Prioridade</h5>
                            <p class="card-text small">Selecione qual a prioridade do seu relato.</p>
                        </div>
                    </div>
                    <!-- Card: Tipo -->
                    <div class="card" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body">
                            <h5 class="card-title">Tipo</h5>
                            <p class="card-text small">Selecione o tipo de relato você deseja realizar.</p>
                        </div>
                    </div>
                    <!-- Card: Relate -->
                    <div class="card" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body">
                            <h5 class="card-title">Relate</h5>
                            <p class="card-text small">Insira os dados necessários para completar o seu relato.</p>
                        </div>
                    </div>
                    <!-- Card: Pronto -->
                    <div class="card" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body">
                            <h5 class="card-title">Pronto</h5>
                            <p class="card-text small">Seu relato será analisado e você pode acompanhar o andamento pelo seu perfil.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards de etapas do relato (visível apenas em telas pequenas) -->
            <article class="container-fluid row justify-content-center py-5" style="background-color: #0097b2; min-height: 200px; position: relative;">
                <section class="container row justify-content-around g-3 gap-2 my-5 d-lg-none d-flex">
                    <!-- Card: Prioridade -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Prioridade</h5>
                            <p class="card-text">Selecione qual a prioridade do seu relato.</p>
                        </div>
                    </div>
                    <!-- Card: Tipo -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tipo</h5>
                            <p class="card-text">Selecione o tipo de relato você deseja realizar.</p>
                        </div>
                    </div>
                    <!-- Card: Relate -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Relate</h5>
                            <p class="card-text">Insira os dados necessários para completar o seu relato.</p>
                        </div>
                    </div>
                    <!-- Card: Pronto -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pronto</h5>
                            <p class="card-text">Seu relato será analisado em até 24h (Urgências em 1h).</p>
                        </div>
                    </div>
                </section>

                <!-- Dicas rápidas para o usuário -->
                <section class="mt-5 text-white row justify-content-center">
                    <h1 class="col-12 mt-4 mb-5 text-center fw-bold">Área de Relatos</h1>
                    <div class="col-lg-5 col-12 text-center d-flex justify-content-center align-items-center">
                        <h2 class="w-50 rounded p-2 ms-lg-auto">
                            Dicas Rápidas
                        </h2>
                    </div>
                    <hr class="d-lg-none" style="width: 75%;">
                    <div class="col-lg-1 d-lg-flex d-none justify-content-center align-items-center">
                        <div class="bg-light h-100 rounded" style="width: 0.3rem;"></div>
                    </div>
                    <div class="col-lg-5 col-12 d-flex justify-content-center mt-2 align-items-center">
                        <ul class="bg-light text-dark py-2 px-5 d-flex flex-column justify-content-center me-auto w-auto rounded">
                            <li>Urgências exigem localização precisa.</li>
                            <li>Relatos com mídias aumentam a precisão do relato.</li>
                            <li>Acompanhe seu relato na seção "Meus Relatos" no seu perfil.</li>
                        </ul>
                    </div>
                </section>
            </article>

            <!-- Seção de seleção de prioridade do relato -->
            <article class="container mt-4 row justify-content-center align-items-center">
                <section class="d-flex flex-column justify-content-center align-items-center mt-3">
                    <h4 class="mb-3">Selecione a prioridade do relato que deseja criar</h4>
                    <p>Se a atente à gravidade da situação para garantir que seu relato seja melhor interpretado.</p>
                </section>

                <!-- Cards de seleção de prioridade -->
                <section class="row d-flex justify-content-around g-3 mb-5 ">
                    <!-- Card: Urgência -->
                    <div class="card d-flex flex-column" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Urgência <i class="bi bi-exclamation-circle text-danger h6"></i></h5>
                            <p class="card-text flex-grow-1">
                                <p>Risco iminente à vida ou dano ambiental irreversível.</p>
                                <span class="small">Requer ação em até 24 horas.</span>
                            </p>
                            <hr>
                            <p class="small">(Ex: Vazamento químico ativo, desabamento, violência em andamento)</p>
                        </div>
                        <!-- Botão para abrir formulário de urgência -->
                        <button 
                            class="btn btn-danger w-100 mb-2" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#formUrg" 
                            aria-controls="formUrg" 
                            aria-expanded="false" 
                            aria-label="Toggle Forms">
                                Relatar
                        </button>
                    </div>
                    <!-- Card: Prioridade Alta -->
                    <div class="card d-flex flex-column" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Prioridade Alta <i class="bi bi-exclamation-circle text-warning h6"></i></h5>
                            <p class="card-text flex-grow-1">
                                <p>Problema com impacto significativo na comunidade.</p>
                                <span class="small">Requer ação de 48 à 72 horas.</span>
                            </p>
                            <hr>
                            <p class="small">(Ex: Falha no abastecimento de água, focos de doença, árvore prestes a cair)</p>
                        </div>
                        <!-- Botão para abrir formulário de prioridade alta -->
                        <button 
                            class="btn btn-warning w-100 mb-2"
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#formAlta" 
                            aria-controls="formAlta" 
                            aria-expanded="false" 
                            aria-label="Toggle Forms">
                                Relatar
                        </button>
                    </div>
                    <!-- Card: Prioridade Média -->
                    <div class="card d-flex flex-column" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Prioridade Média <i class="bi bi-exclamation-circle text-primary h6"></i></h5>
                            <p class="card-text flex-grow-1">
                                <p>Situação que causa desconforto ou risco potencial.</p>
                                <span class="small">Requer ação de 1 à 2 semanas.</span>
                            </p>
                            <hr>
                            <p class="small">(Ex: Buraco na via pública, lixo acumulado, poste com fiação exposta)</p>
                        </div>
                        <!-- Botão para abrir formulário de prioridade média -->
                        <button class="btn btn-primary w-100 mb-2"
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#formMedia" 
                            aria-controls="formMedia" 
                            aria-expanded="false" 
                            aria-label="Toggle Forms">
                                Relatar
                        </button>
                    </div>
                    <!-- Card: Prioridade Baixa -->
                    <div class="card d-flex flex-column" style="min-width: 220px; max-width: 260px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Prioridade Baixa <i class="bi bi-exclamation-circle text-success h6"></i></h5>
                            <p class="card-text flex-grow-1">
                                <p>Melhoria ou problema crônico sem risco imediato.</p>
                                <span class="small">Requer ação em até 30 dias.</span>
                            </p>
                            <hr>
                            <p class="small">(Ex: Calçada irregular, sinalização desgastada, poda de árvores preventiva)</p>
                        </div>
                        <!-- Botão para abrir formulário de prioridade baixa -->
                        <button class="btn btn-success w-100 mb-2"
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#formBaixa" 
                            aria-controls="formBaixa" 
                            aria-expanded="false" 
                            aria-label="Toggle Forms">
                                Relatar
                        </button>
                    </div>
                </section>
            </article>

            <!-- FORMULÁRIO DE URGÊNCIA -->
            <div class="container px-5">
                <div class="collapse row align-items-center justify-content-center" id="formUrg">
                    <form class="p-3 bg-light shadow rounded-4 mb-3" style="width: 80%;">
                    <!-- Cabeçalho -->
                    <div class="alert alert-danger mb-4">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <strong>URGÊNCIA MÁXIMA:</strong> Resposta em até 1hr - Acionamento de protocolos emergenciais
                    </div>
                    
                    <!-- Identificação Básica -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-3">
                            <label class="form-label" for="cpf-urg">CPF</label>
                            <input type="text" id="cpf-urg" class="form-control" placeholder="000.000.000-00" required>
                        </div>
                        <div class="col-md-3">
                            <label for="comun-urg" class="form-label">Comunidade</label>
                            <input type="text" id="comun-urg" class="form-control" placeholder="Petrovale" required>
                        </div>
                        <div class="col-md-3">
                            <label for="data-urg" class="form-label">Data</label>
                            <input type="date" id="data-urg" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="hora-urg" class="form-label">Horário</label>
                            <input type="time" id="hora-urg" class="form-control" required>
                        </div>
                    </div>
                    
                    <!-- Contato -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="tel1-urg">Telefone Principal</label>
                            <input type="text" id="tel1-urg" class="form-control" placeholder="(00) 0 0000-0000" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="tel2-urg">Telefone Alternativo</label>
                            <input type="text" id="tel2-urg" class="form-control" placeholder="(00) 0 0000-0000" required>
                        </div>
                    </div>
                    
                    <!-- Localização -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-12">
                            <label for="gps-urg" class="form-label">
                                <i class="bi bi-geo-alt-fill text-danger h5"></i> Localização Exata (GPS)
                            </label>
                            <div class="input-group">
                                <button type="button" id="btn-gps-urg" class="btn btn-danger">
                                <i class="bi bi-geo h5"></i> Capturar Localização Atual
                                </button>
                                <input type="text" id="coords-urg" class="form-control" placeholder="Coordenadas GPS" required>
                            </div>
                            <small class="form-text">Localização obrigatória para emergências</small>
                        </div>
                    </div>
                    
                    <!-- Descrição do Problema -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-12">
                            <label for="tipo-urg" class="form-label">Tipo de Emergência</label>
                            <select class="form-select" id="tipo-urg" required>
                                <option value="" selected disabled>Selecione...</option>
                                
                                <optgroup label="- Risco à Vida Humana">
                                    <option value="vitimas_soterradas">Vítimas Soterradas</option>
                                    <option value="intoxicacao_aguda">Intoxicação Aguda Coletiva</option>
                                    <option value="acidente_multiplas_vitimas">Acidente com Múltiplas Vítimas</option>
                                    <option value="violencia_massiva">Episódio de Violência Coletiva</option>
                                </optgroup>

                                <optgroup label="- Desastre Ambiental">
                                    <option value="vazamento_quimico">Vazamento Químico em Curso</option>
                                    <option value="contaminacao_agua">Contaminação de Fonte Hídrica</option>
                                    <option value="incendio_florestal">Incêndio Florestal Expansivo</option>
                                    <option value="rompimento_barragem">Rompimento de Barragem</option>
                                </optgroup>

                                <optgroup label="- Colapso Estrutural">
                                    <option value="desabamento_iminente">Desabamento Iminente</option>
                                    <option value="explosao_estrutural">Risco de Explosão Estrutural</option>
                                    <option value="deslizamento_ativo">Deslizamento em Andamento</option>
                                    <option value="queda_ponte">Colapso de Ponte/Viaduto</option>
                                </optgroup>

                                <optgroup label="- Emergência Sanitária">
                                    <option value="surto_doenca">Surto de Doença Contagiosa</option>
                                    <option value="contaminacao_alimentar">Contaminação Alimentar Coletiva</option>
                                    <option value="falha_sanitaria">Falha em Sistema de Saneamento</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="desc-urg" class="form-label">Descrição da Emergência</label>
                            <textarea id="desc-urg" class="form-control" rows="3" 
                            placeholder="Descreva brevemente a situação de emergência..." required></textarea>
                        </div>
                    </div>
                    
                    <!-- Evidências -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-4">
                            <label for="foto-urg" class="form-label">
                                <i class="bi bi-camera-fill text-danger h5"></i> Imagens <span class="form-text">(máx. 50mb)</span>
                            </label>
                            <input type="file" id="foto-urg" class="form-control" accept="image/*" required multiple>
                        </div>
                        <div class="col-md-4">
                            <label for="midia-urg" class="form-label">
                                <i class="bi bi-camera-reels-fill text-danger h5"></i> Vídeos <span class="form-text">(máx. 50mb)</span>
                            </label>
                            <input type="file" id="midia-urg" class="form-control" accept="video/*" required multiple>
                        </div>
                        <div class="col-md-4">
                            <label for="midia-urg" class="form-label">
                                <i class="bi bi-mic-fill text-danger h5"></i> Áudios <span class="form-text">(máx. 50mb)</span>
                            </label>
                            <input type="file" id="midia-urg" class="form-control" accept="audio/*" required multiple>
                        </div>
                    </div>
                    
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-6">
                            <label for="risco-urg" class="form-label">Risco Imediato</label>
                            <select class="form-select" id="risco-urg" required>
                                <option value="" disabled selected>Selecione...</option>
                                <option value="vidas">Vidas humanas em risco</option>
                                <option value="desastre">Desastre ambiental iminente</option>
                                <option value="infra">Colapso de infraestrutura crítica</option>
                                <option value="violencia">Violência coletiva em andamento</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="vitimas-urg" class="form-label">Pessoas em Risco Imediato</label>
                            <input type="number" id="vitimas-urg" class="form-control" min="0" value="0" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="acoes-urg" class="form-label">Ações Imediatas Necessárias</label>
                            <textarea id="acoes-urg" class="form-control" 
                            placeholder="Descreva as ações de emergência necessárias..." required></textarea>
                        </div>
                    </div>
                    
                    <!-- Termo de Responsabilidade -->
                    <div class="gap-2 mb-3 border-start border-3 border-danger ps-2 py-2">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="termo-urg" required>
                        <label class="form-check-label" for="termo-urg">
                            Declaro sob pena de lei que esta é uma emergência real e compreendo que 
                            falsos relatos acarretam responsabilização legal conforme 
                            <a href="#" class="text-danger">Art. 340 do CP</a>.
                        </label>
                        </div>
                    </div>
                    
                    <!-- Botões -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-danger" type="submit">
                        <i class="bi bi-send-fill h6"></i> Acionar Emergência
                        </button>
                        <button class="btn btn-outline-secondary" type="reset">Limpar</button>
                    </div>
                    </form>
                </div>


                <!-- FORMULÁRIO DE PRIORIDADE ALTA -->
                <div class="collapse row align-items-center justify-content-center" id="formAlta">
                    <form class="p-3 bg-light shadow rounded-4 mb-3" style="width: 80%;">
                        <!-- Cabeçalho -->
                        <div class="alert alert-warning mb-4">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <strong>PRIORIDADE ALTA:</strong> Problema grave que exige ação em até 72 horas
                        </div>
                    
                    <!-- Identificação Básica -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-3">
                            <label class="form-label" for="cpf-alta">CPF</label>
                            <input type="text" id="cpf-alta" class="form-control" placeholder="000.000.000-00" required>
                        </div>
                        <div class="col-md-3">
                            <label for="comun-alta" class="form-label">Comunidade</label>
                            <input type="text" id="comun-alta" class="form-control" placeholder="Petrovale" required>
                        </div>
                        <div class="col-md-3">
                            <label for="data-alta" class="form-label">Data</label>
                            <input type="date" id="data-alta" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="hora-alta" class="form-label">Horário</label>
                            <input type="time" id="hora-alta" class="form-control" required>
                        </div>
                    </div>
                    
                    <!-- Contato -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="tel-alta">Telefone</label>
                            <input type="text" id="tel-alta" class="form-control" placeholder="(00) 0 0000-0000" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email-alta">E-mail</label>
                            <input type="email" id="email-alta" class="form-control" placeholder="seu@email.com">
                        </div>
                    </div>
                    
                    <!-- Localização -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-12">
                            <label for="gps-alt" class="form-label">
                                <i class="bi bi-geo-alt-fill text-warning h5"></i> Localização Exata (GPS)
                            </label>
                            <div class="input-group">
                                <button type="button" id="btn-gps-alt" class="btn btn-warning">
                                    <i class="bi bi-geo h5"></i> Capturar Localização Atual
                                </button>
                                <input type="text" id="coords-alt" class="form-control" placeholder="Coordenadas GPS" required>
                            </div>
                            <small class="form-text">Localização obrigatória para emergências</small>
                        </div>
                    </div>
                    
                    <!-- Descrição do Problema -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-12">
                            <label for="tipo-alta" class="form-label">Tipo de Problema</label>
                            <select class="form-select" id="tipo-alta" required>
                                <option value="" selected disabled>Selecione...</option>
                                    <optgroup label="- Infraestrutura Crítica">
                                        <option value="falha_agua">Falha no Abastecimento de Água</option>
                                        <option value="falha_energia">Interrupção Prolongada de Energia</option>
                                        <option value="risco_estrutural">Risco Estrutural em Edificação</option>
                                        <option value="colapso_transporte">Colapso no Transporte Público</option>
                                    </optgroup>

                                    <optgroup label="- Saúde Pública">
                                        <option value="surto_doenca">Surto de Doença Contagiosa</option>
                                        <option value="contaminacao_agua">Contaminação de Reservatório</option>
                                        <option value="falta_medicamentos">Desabastecimento de Medicamentos Essenciais</option>
                                        <option value="superlotacao_hospital">Superlotação Hospitalar</option>
                                    </optgroup>

                                    <optgroup label="- Segurança Comunitária">
                                        <option value="area_risco">Área com Alto Índice Criminal</option>
                                        <option value="violencia_escolar">Violência Escolar Grave</option>
                                        <option value="ameaca_coletiva">Ameaça Coletiva Identificada</option>
                                        <option value="trafico_aberto">Tráfico de Drogas Aberto</option>
                                    </optgroup>

                                    <optgroup label="- Impacto Ambiental">
                                        <option value="contaminacao_solo">Contaminação do Solo</option>
                                        <option value="desmatamento">Desmatamento Ilegal Ativo</option>
                                        <option value="poluicao_atmosferica">Poluição Atmosférica Grave</option>
                                        <option value="vazamento_controlado">Vazamento Químico Contido</option>
                                    </optgroup>

                                    <optgroup label="- Vulnerabilidade Social">
                                        <option value="crise_alimentar">Crise Alimentar Coletiva</option>
                                        <option value="desabrigados">Famílias Desabrigadas</option>
                                        <option value="exploracao_trabalho">Exploração Trabalhista Coletiva</option>
                                        <option value="evasao_escolar">Evasão Escolar Massiva</option>
                                    </optgroup>
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="desc-alta" class="form-label">Descrição Detalhada</label>
                            <textarea id="desc-alta" class="form-control" rows="3" 
                            placeholder="Descreva o problema, causas e contexto..." required></textarea>
                        </div>
                    </div>
                    
                    <!-- Evidências -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-4">
                            <label for="foto1-alta" class="form-label">
                                <i class="bi bi-camera-fill text-warning h5"></i> Imagens <span class="form-text">(máx. 50mb)</span>
                            </label>
                            <input type="file" id="foto1-alta" class="form-control" accept="image/*" required multiple>
                        </div>
                        <div class="col-md-4">
                            <label for="foto2-alta" class="form-label">
                                <i class="bi bi-camera-fill text-warning h5"></i> Videos <span class="form-text">(máx. 50mb)</span>
                            </label>
                            <input type="file" id="foto2-alta" class="form-control" accept="video/*" required multiple>
                        </div>
                        <div class="col-md-4">
                            <label for="doc-alta" class="form-label">
                                <i class="bi bi-mic-fill text-warning h5"></i> Áudios <span class="form-text">(máx. 50mb)</span>
                            </label>
                            <input type="file" id="doc-alta" class="form-control" accept="audio/*">
                        </div>
                    </div>
                    
                    <!-- Impacto (Prioridade Alta) -->
                    <div class="gap-2 mb-3 row">
                        <div class="col-md-4">
                            <label for="risco-alta" class="form-label">Risco Principal</label>
                            <select class="form-select" id="risco-alta" required>
                                <option value="" disabled selected>Selecione...</option>
                                <option value="saude">Saúde pública</option>
                                <option value="ambiente">Desastre ambiental</option>
                                <option value="violencia">Violência estrutural</option>
                                <option value="infra">Risco de infraestrutura</option>
                                <option value="social">Vulnerabilidade social</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="exposicao-alta" class="form-label">Tempo de Exposição</label>
                            <div class="input-group">
                                <input type="number" id="tempo-alta" class="form-control" min="1" value="1" required>
                                <select class="form-select" id="unidade-tempo" required>
                                <option value="horas">Horas</option>
                                <option value="dias">Dias</option>
                                <option value="semanas">Semanas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="afetados-alta" class="form-label">Pessoas Afetadas</label>
                            <input type="number" id="afetados-alta" class="form-control" min="0" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="danos-alta" class="form-label">Danos e Perdas</label>
                            <textarea id="danos-alta" class="form-control" 
                            placeholder="Descreva os danos materiais e humanos..."></textarea>
                        </div>
                    </div>
                    
                    <!-- Contexto Adicional -->
                    <div class="gap-2 mb-3">
                        <label for="frequencia-alta" class="form-label">Frequência do Problema</label>
                        <select class="form-select" id="frequencia-alta">
                            <option value="" selected disabled>Selecione...</option>
                            <option value="primeira">Primeira ocorrência</option>
                            <option value="ocasional">Ocasional</option>
                            <option value="frequente">Frequente</option>
                            <option value="constante">Constante</option>
                        </select>
                    </div>
                    
                    <div class="gap-2 mb-3">
                        <label for="solucao-alta" class="form-label">Sugestões de Solução</label>
                        <textarea id="solucao-alta" class="form-control" 
                        placeholder="O que você sugere como solução?"></textarea>
                    </div>
                    
                    <!-- Termo de Responsabilidade -->
                    <div class="gap-2 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termo-alta" required>
                            <label class="form-check-label" for="termo-alta">
                                Declaro que as informações são verídicas e estou ciente que relatos falsos podem 
                                acarretar restrições ao uso da plataforma.
                            </label>
                        </div>
                    </div>
                    
                    <!-- Botões -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-warning" type="submit">
                            <i class="bi bi-send-fill h6"></i> Enviar Relato
                        </button>
                        <button class="btn btn-outline-secondary" type="reset">Limpar</button>
                    </div>
                    </form>
                </div>

                <!-- FORMULÁRIO DE PRIORIDADE MÉDIA -->
                <div class="collapse row align-items-center justify-content-center" id="formMedia">
                    <form class="p-3 bg-light shadow rounded-4 mb-3" style="width: 80%;">
                        <!-- Cabeçalho -->
                        <div class="alert alert-primary mb-4">
                            <i class="bi bi-info-circle-fill"></i>
                            <strong>PRIORIDADE MÉDIA:</strong> Situação com risco potencial - Resposta em até 1 semana
                        </div>
                        
                        <!-- Identificação Básica -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-3">
                                <label class="form-label" for="cpf-media">CPF</label>
                                <input type="text" id="cpf-media" class="form-control" placeholder="000.000.000-00" required>
                            </div>
                            <div class="col-md-3">
                                <label for="comun-media" class="form-label">Comunidade</label>
                                <input type="text" id="comun-media" class="form-control" placeholder="Petrovale" required>
                            </div>
                            <div class="col-md-3">
                                <label for="data-media" class="form-label">Data</label>
                                <input type="date" id="data-media" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="hora-media" class="form-label">Horário</label>
                                <input type="time" id="hora-media" class="form-control" required>
                            </div>
                        </div>
                        
                        <!-- Contato -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-6">
                                <label class="form-label" for="tel-media">Telefone</label>
                                <input type="text" id="tel-media" class="form-control" placeholder="(00) 0 0000-0000" required>
                            </div>
                        </div>
                        
                        <!-- Localização -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-12">
                                <label for="gps-med" class="form-label">
                                    <i class="bi bi-geo-alt-fill text-primary h5"></i> Localização Exata (GPS)
                                </label>
                                <div class="input-group">
                                    <button type="button" id="btn-gps-med" class="btn btn-primary">
                                    <i class="bi bi-geo h5"></i> Capturar Localização Atual
                                    </button>
                                    <input type="text" id="coords-med" class="form-control" placeholder="Coordenadas GPS" required>
                                </div>
                                <small class="form-text">Localização obrigatória para emergências</small>
                            </div>
                        </div>
                        
                        <!-- Descrição do Problema -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-12">
                                <label for="tipo-media" class="form-label">Tipo de Problema</label>
                                <select class="form-select" id="tipo-media" required>
                                    <option value="" selected disabled>Selecione...</option>
                                    
                                    <!-- Problemas de Infraestrutura -->
                                    <optgroup label="- Problemas de Infraestrutura">
                                        <option value="buraco_via">Buraco na Via Pública</option>
                                        <option value="iluminacao">Falta de Iluminação Pública</option>
                                        <option value="sinalizacao">Sinalização Danificada</option>
                                        <option value="calçada_irregular">Calçada Irregular</option>
                                    </optgroup>
                                    
                                    <!-- Questões Sanitárias -->
                                    <optgroup label="- Questões Sanitárias">
                                        <option value="lixo_acumulado">Lixo Acumulado</option>
                                        <option value="esgoto">Vazamento de Esgoto</option>
                                        <option value="agua">Problemas no Abastecimento de Água</option>
                                    </optgroup>
                                    
                                    <!-- Riscos Potenciais -->
                                    <optgroup label="- Riscos Potenciais">
                                        <option value="arvore_risco">Árvore com Risco de Queda</option>
                                        <option value="fiacao">Fiação Elétrica Exposta</option>
                                        <option value="inundacao">Área com Risco de Inundação</option>
                                    </optgroup>
                                    
                                    <!-- Problemas Sociais -->
                                    <optgroup label="- Problemas Sociais">
                                        <option value="barulho">Poluição Sonora Excessiva</option>
                                        <option value="animais">Animais Soltos na Via</option>
                                        <option value="seguranca">Falta de Segurança Pública</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="desc-media" class="form-label">Descrição Detalhada (mín. 500 caracteres)</label>
                                <textarea id="desc-media" class="form-control" rows="4" minlength="500"
                                placeholder="Descreva detalhadamente o problema, histórico e contexto..." required></textarea>
                            </div>
                        </div>
                        
                        <!-- Evidências -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-6">
                                <label for="foto-media" class="form-label">
                                    <i class="bi bi-camera-fill text-primary h5"></i> Foto <span class="form-text">(máx. 50mb)</span>
                                </label>
                                <input type="file" id="foto-media" class="form-control" accept="image/*" required multiple>
                            </div>
                            <div class="col-md-6">
                                <label for="midia-media" class="form-label">
                                    <i class="bi bi-camera-reels-fill text-primary h5"></i> Vídeo ou Áudio <span class="form-text">(máx. 50mb)</span>
                                </label>
                                <input type="file" id="midia-media" class="form-control" accept="video/*,audio/*" required multiple>
                            </div>
                        </div>
                        
                        <!-- Impacto (Prioridade Média) -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-4">
                                <label for="frequencia-media" class="form-label">Frequência</label>
                                <select class="form-select" id="frequencia-media" required>
                                    <option value="" disabled selected>Selecione...</option>
                                    <option value="diario">Diário</option>
                                    <option value="semanal">Semanal</option>
                                    <option value="mensal">Mensal</option>
                                    <option value="ocasional">Ocasional</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="afetados-media" class="form-label">Pessoas Afetadas</label>
                                <input type="number" id="afetados-media" class="form-control" min="0" required>
                            </div>
                            <div class="col-md-4">
                                <label for="impacto-media" class="form-label">Impacto Percebido</label>
                                <select class="form-select" id="impacto-media" required>
                                    <option value="" disabled selected>Selecione...</option>
                                    <option value="leve">Leve</option>
                                    <option value="moderado">Moderado</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Termo de Responsabilidade -->
                        <div class="gap-2 mb-3">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termo-media" required>
                            <label class="form-check-label" for="termo-media">
                                Declaro que as informações são verdadeiras e estou ciente da importância 
                                de relatos precisos para melhorar nossa comunidade.
                            </label>
                            </div>
                        </div>
                        
                        <!-- Botões -->
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary" type="submit">
                            <i class="bi bi-send-fill h6"></i> Enviar Relato
                            </button>
                            <button class="btn btn-outline-secondary" type="reset">Limpar</button>
                        </div>
                    </form>
                </div>

                <!-- FORMULÁRIO DE PRIORIDADE BAIXA -->
                <div class="collapse row align-items-center justify-content-center" id="formBaixa">
                    <form class="p-3 bg-light shadow rounded-4 mb-3" style="width: 80%;">
                        <!-- Cabeçalho -->
                        <div class="alert alert-success mb-4">
                            <i class="bi bi-check-circle-fill"></i>
                            <strong>PRIORIDADE BAIXA:</strong> Melhoria ou problema crônico - Resposta em até 20 dias
                        </div>
                        
                        <!-- Identificação Básica -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-3">
                                <label class="form-label" for="cpf-baixa">CPF</label>
                                <input type="text" id="cpf-baixa" class="form-control" placeholder="000.000.000-00" required>
                            </div>
                            <div class="col-md-3">
                                <label for="comun-baixa" class="form-label">Comunidade</label>
                                <input type="text" id="comun-baixa" class="form-control" placeholder="Petrovale" required>
                            </div>
                            <div class="col-md-3">
                                <label for="data-baixa" class="form-label">Data</label>
                                <input type="date" id="data-baixa" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="hora-baixa" class="form-label">Horário</label>
                                <input type="time" id="hora-baixa" class="form-control" required>
                            </div>
                        </div>
                        
                        <!-- Contato -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-6">
                                <label class="form-label" for="tel-baixa">Telefone</label>
                                <input type="text" id="tel-baixa" class="form-control" placeholder="(00) 0 0000-0000" required>
                            </div>
                        </div>
                        
                        <!-- Localização -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-12">
                                <label for="gps-bai" class="form-label">
                                    <i class="bi bi-geo-alt-fill text-success h5"></i> Localização Exata (GPS)
                                </label>
                                <div class="input-group">
                                    <button type="button" id="btn-gps-bai" class="btn btn-success">
                                        <i class="bi bi-geo h5"></i> Capturar Localização Atual
                                    </button>
                                    <input type="text" id="coords-bai" class="form-control" placeholder="Coordenadas GPS" required>
                                </div>
                                <small class="form-text">Localização obrigatória para emergências</small>
                            </div>
                        </div>
                        
                        <!-- Descrição do Problema -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-12">
                                <label for="tipo-baixa" class="form-label">Tipo de Problema</label>
                                <select class="form-select" id="tipo-baixa" required>
                                    <option value="" selected disabled>Selecione...</option>
                                    
                                    <!-- Melhorias Comunitárias -->
                                    <optgroup label="- Melhorias Comunitárias">
                                        <option value="calcada">Calçada Irregular</option>
                                        <option value="poda">Poda de Árvores</option>
                                        <option value="pintura">Pintura de Faixas</option>
                                        <option value="limpeza">Limpeza de Via Pública</option>
                                    </optgroup>
                                    
                                    <!-- Manutenção Preventiva -->
                                    <optgroup label="- Manutenção Preventiva">
                                        <option value="jardinagem">Manutenção de Jardins</option>
                                        <option value="reparo">Reparo de Mobiliário Urbano</option>
                                        <option value="conservacao">Conservação de Praças</option>
                                    </optgroup>
                                    
                                    <!-- Sugestões -->
                                    <optgroup label="- Sugestões">
                                        <option value="sinalizacao">Nova Sinalização</option>
                                        <option value="lixeira">Instalação de Lixeiras</option>
                                        <option value="campo">Criação de Área de Lazer</option>
                                        <option value="bancos">Colocação de Bancos</option>
                                    </optgroup>
                                    
                                    <!-- Problemas Crônicos -->
                                    <optgroup label="- Problemas Crônicos">
                                        <option value="erodica">Via Pública Erodida</option>
                                        <option value="drenagem">Problemas de Drenagem</option>
                                        <option value="assoreamento">Assoreamento de Córregos</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="desc-baixa" class="form-label">Descrição</label>
                                <textarea id="desc-baixa" class="form-control" rows="3" 
                                placeholder="Descreva o problema ou sugestão..." required></textarea>
                            </div>
                        </div>
                        
                        <!-- Evidências -->
                        <div class="gap-2 mb-3 row">
                            <div class="col-md-12">
                            <label for="anexo-baixa" class="form-label">
                                <i class="bi bi-paperclip text-success h5"></i> Anexo <small class="form-text">(Opcional, máx. 50mb)</small>
                            </label>
                                <input type="file" id="anexo-baixa" class="form-control" accept="image/*,video/*,audio/*" multiple>
                            </div>
                        </div>
                        
                        <!-- Impacto (Prioridade Baixa) -->
                        <div class="gap-2 mb-3">
                            <div class="col-md-6">
                                <label for="recorrencia-baixa" class="form-label">É um problema recorrente?</label>
                                <select class="form-select" id="recorrencia-baixa">
                                    <option value="" selected disabled>Selecione...</option>
                                    <option value="sim">Sim</option>
                                    <option value="nao">Não</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="impacto-baixa" class="form-label">Impacto Percebido</label>
                                <select class="form-select" id="impacto-baixa">
                                    <option value="" selected disabled>Selecione...</option>
                                    <option value="leve">Leve</option>
                                    <option value="moderado">Moderado</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Termo de Responsabilidade -->
                        <div class="gap-2 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="termo-baixa" required>
                                <label class="form-check-label" for="termo-baixa">
                                    Confirmo que estas informações representam uma necessidade real da comunidade.
                                </label>
                            </div>
                        </div>
                        
                        <!-- Botões -->
                        <div class="d-flex gap-2">
                            <button class="btn btn-success" type="submit">
                            <i class="bi bi-send-fill h6"></i> Enviar Relato
                            </button>
                            <button class="btn btn-outline-secondary" type="reset">Limpar</button>
                        </div>
                    </form>
                </div>
            </div>

            <aside class="container-fluid bg-prefooter text-white py-5 mt-5">
                <div class="container py-5">
                    <div class="row">
                        <!-- Logo e descrição -->
                        <div class="col-md-3 mb-4">
                            <h4 class="fw-bold">
                                Unity+
                            </h4>
                            <p>Plataforma de Diagnóstico Socioeconômico Comunitário</p>
                            <p class="small">Uma solução Integra para transformação social</p>
                        </div>

                        <!-- Contato -->
                        <div class="col-md-3 mb-4">
                            <h5 class="fw-bold">Contato</h5>
                            <p><i class="bi bi-geo-alt me-2"></i> Av. das Comunidades, 1234 - Centro</p>
                            <p><i class="bi bi-telephone me-2"></i> (00) 4002-8922</p>
                            <p><i class="bi bi-envelope me-2"></i> suporte@unityplus.platform</p>
                            <p><i class="bi bi-clock me-2"></i> Seg-Sex: 8h-18h</p>
                        </div>

                        <!-- Links rápidos -->
                        <div class="col-md-3 mb-4">
                            <h5 class="fw-bold">Acesso Rápido</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="relato.html" class="text-white text-decoration-none">
                                        <i class="bi bi-megaphone me-2"></i> Fazer um relato
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="forum.html" class="text-white text-decoration-none">
                                        <i class="bi bi-people me-2"></i> Fórum comunitário
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="feedback.html" class="text-white text-decoration-none">
                                        <i class="bi bi-chat-left-text me-2"></i> Feedbacks
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="duvidas.html" class="text-white text-decoration-none">
                                        <i class="bi bi-question-circle me-2"></i> Perguntas frequentes
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter e redes sociais -->
                        <div class="col-md-3">
                            <h5 class="fw-bold">Fique Conectado</h5>
                            <p class="small">Receba atualizações sobre projetos comunitários</p>
                            
                            <form class="d-flex mb-3">
                                <input type="email" class="form-control me-2" placeholder="Seu melhor email" required>
                                <button type="submit" class="btn btn-light">
                                    <i class="bi bi-send h5"></i>
                                </button>
                            </form>
                            
                            <div class="mt-4">
                                <h6 class="fw-bold mb-3">Siga-nos</h6>
                                <div class="d-flex gap-3">
                                    <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" class="text-white fs-5"><i class="bi bi-youtube"></i></a>
                                </div>
                            </div>
                            
                            <div class="mt-4 pt-2 border-top">
                                <p class="small mb-0">
                                    <i class="bi bi-shield-lock me-1"></i> Dados protegidos pela LGPD
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Rodapé inferior -->
                    <div class="row mt-5 pt-4 border-top">
                        <div class="col-md-6">
                            <p class="small mb-0">
                                &copy; 2025 Integra Tecnologia. Todos os direitos reservados.<br>
                                CNPJ: 00.000.000/0001-00
                            </p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <p class="small mb-0">
                                Desenvolvido com <i class="bi bi-heart-fill text-danger h5"></i> para comunidades<br>
                                <a href="politica.html" class="text-white text-decoration-none me-3">Política de Privacidade</a>
                                <a href="termos.html" class="text-white text-decoration-none">Termos de Uso</a>
                            </p>
                        </div>
                    </div>
                </div>
            </aside>
        </main>

        <footer class="container-fluid text-white bg-footer py-2">
                <div class="text-center">
                    <span>© 2025 Integra</span>
                </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
        crossorigin="anonymous"></script>
    </body>
</html>