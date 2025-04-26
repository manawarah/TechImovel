<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
?>

<?php
$sql = "SELECT * FROM imoveis ORDER BY id DESC";
$result = mysqli_query($conexao, $sql);
?>

<h2>Imóveis</h2>
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
<section class="card-imoveis" style="justify-content: space-between; display: flex; flex-wrap: wrap; gap: 1rem;">
<?php while ($imovel = mysqli_fetch_assoc($result)) { ?>
    <div class="card" style="width: 18rem;">
        <img src="./assets/imoveis/<?= $imovel['imagem']; ?>" class="card-img-top" alt="Imagem do imóvel">
        <div class="card-body">
            <h5 class="card-title"><?= $imovel['titulo']; ?></h5>
            <p><?= $imovel['construtora']; ?></p>
            <p class="card-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="..."/>
                </svg> <?= $imovel['metragem']; ?>
            </p>
            <p class="card-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                    <path d="..."/>
                </svg> <?= $imovel['localizacao']; ?>
            </p>
            <p class="card-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                    <path d="..."/>
                </svg> <?= $imovel['preco']; ?>
            </p>
            <a href="<?= $imovel['link_mais_info']; ?>" class="btn btn-primary" target="_blank">Saiba mais</a>
        </div>
    </div>
<?php } ?>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>