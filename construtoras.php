<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
?>

<div>

    <h2>Imóveis Terceiros</h2>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TechImovel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Prontos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Em obra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lançamentos</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>
<br>
    <section class="card-imoveis" style="justify-content: space-around; display: flex;">

        <div class="card" style="width: 18rem;">
            <img src="./assets/construtoras/construtora-tropical.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nome do residencial</h5>
                <p>Contato do corretor: (83)3252-1359</p>
                <p>Parceria: Sim</p>
                <p></p>
                <a href="https://grupotropical.com.br/" class="btn btn-primary" target="_blank">Saiba mais</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="./assets/construtoras/construtora-massai.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Construtora Massai</h5>

                <a href="https://www.massai.com.br/" class="btn btn-primary" target="_blank">Saiba mais</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="./assets/construtoras/construtora-brascon.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Construtora Brascon</h5>

                <a href="https://construtorabrascon.com.br/?utm_source=google-ads-search&utm_medium=google-ads-group-geral&utm_campaign=empreendimento-geral&gad_source=1&gbraid=0AAAAACvqY3B1A1dTjOtET_VGIKF7O0vwN&gclid=Cj0KCQjw2ZfABhDBARIsAHFTxGxuDYg-y6frEsFveTxo_e7C8_-Zyjz191vIPky_3DVvGIRt_uT06QoaAklZEALw_wcB" class="btn btn-primary" target="_blank">Saiba mais</a>
            </div>
        </div>
    </section>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>