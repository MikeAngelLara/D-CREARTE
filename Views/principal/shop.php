<?php include_once 'Views/template-principal/header.php';?>


    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4 text-center"><b>Categorías</b></h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3 secciones_categorias_tienda">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none">
                            <b>Tecnología</b>
                            <i class="fa fa-fw fa-chevron-circle-down mt-1 menu"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">--</a></li>
                            <li><a class="text-decoration-none" href="#">--</a></li>
                        </ul>
                    </li>
                    <li class="pb-3 secciones_categorias_tienda">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            <b>Superación</b>
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">--</a></li>
                            <li><a class="text-decoration-none" href="#">--</a></li>
                        </ul>
                    </li>
                    <li class="pb-3 secciones_categorias_tienda">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            <b>Cocina</b>
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">--</a></li>
                            <li><a class="text-decoration-none" href="#">--</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <?php foreach($data['productos'] as $producto){?>

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo $producto['imagen']; ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="btn btn-util btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                                                <i class="fas fa-eye"></i>
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $producto['nombre']; ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"><?php echo MONEDA . ' ' . $producto['precio']; ?></p>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">

                        <?php 
                        $anterior = $data['pagina'] - 1;
                        $siguiente = $data['pagina'] + 1;
                        $url = BASE_URL . 'principal/shop/' ;

                        if ($data['pagina'] > 1){
                            echo '  <li class="page-item">
                                        <a class="page-link  rounded-2 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="'. $url . $anterior.'">Anterior</a>
                                    </li>';
                        }
                        if ($data['total'] >= $siguiente) {
                            echo '  <li class="page-item">
                                        <a class="page-link active rounded-2 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="'. $url . $siguiente.'">Siguiente</a>
                                    </li>';
                        }
                        ?>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->


    <!--      Brands por si en algun momento se necesitan            -->
    <!-- Start Brands -->
    <!--
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        

                        
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL; ?>assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--End Brands-->


    <?php include_once 'Views/template-principal/footer.php';?>
    
</body>

</html>