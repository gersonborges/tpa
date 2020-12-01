<?php
session_start();
header("Content-Type: text/html; charset=utf8");
date_default_timezone_set('America/Argentina/Buenos_Aires');
define("SERVIDOR","mysql:host=localhost;dbname=jequiti3a2;charset=utf8");
define("USUARIO","root");
define("SENHA","");
$con = new PDO(SERVIDOR, USUARIO, SENHA);
$sql = $con->prepare("SELECT * FROM ver_produto");
$sql->execute();
$produtos = $sql->fetchAll(PDO::FETCH_CLASS);

foreach ($produtos as $produto) {

    $sql = $con->prepare("SELECT * FROM usuario_produto WHERE usuario_id=? AND produto_id=? LIMIT 1");
    $sql->execute([ $_SESSION['usuario']->id, $produto->id ]);
    $like = $sql->fetchObject();
    $cor = $like ? 'red' : 'gray';

    ?>
    <!-- produto -->
    <div class="col-md-3" style="float: left;">
        <div class="card" style="float: left; margin-right: 15px">
            <div class="card-header">
                <h4 class="card-title"><strong><a href="">Fornecedor</a></strong></h4>
                <div class="card-tools">
                    <span class="badge badge-primary">Categoria</span>
                </div>
            </div>
            <div class="view view-cascade">
                <?= $produto->figura ?>
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <div class="card-body">
                <h5 class="text-center"><?= $produto->produto ?></h5>
                <h6 class="text-center">
                    <ul class="rating m-auto">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                </h6>
                <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
                    necessitatibus saepe
                    eveniet ut et voluptates.
                </p>
            </div>
            <div class="card-footer">
                <span class="float-left" style="font-size: xx-large">R$ <?= number_format($produto->preco_venda,2,',','') ?></span>
                <span class="float-right">
                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                                    class="fas fa-shopping-cart mr-3"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Share"><i
                                                    class="fas fa-share-alt mr-3"></i></a>
                                        <a href="inserirLike.php?produto_id=<?=$produto->id?>" class="active" data-toggle="tooltip" data-placement="top"
                                           title="Added to Wishlist"><i class="fas fa-heart" style="color:<?=$cor?>" ></i></a>
                                    </span>
            </div>
        </div>
    </div>
    <!-- produto -->
    <?php
}
?>

