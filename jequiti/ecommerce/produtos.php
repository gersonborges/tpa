<?php
$produtos =[1,1,1,1,1];

foreach($produtos as $produto){
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
            <img class="card-img-top"
                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/shoes%20(3).jpg"
                 alt="">
            <a>
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <div class="card-body">
            <h5 class="text-center">Produto</h5>
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
            <span class="float-left">49$</span>
            <span class="float-right">
                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                                    class="fas fa-shopping-cart mr-3"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Share"><i
                                                    class="fas fa-share-alt mr-3"></i></a>
                                        <a class="active" data-toggle="tooltip" data-placement="top"
                                           title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                    </span>
        </div>
    </div>
    </div>
    <!-- produto -->
<?php
}
?>

