<?php include_once 'Views/template-principal/header.php';?>


    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

        <div class="col-lg-3">
                <h1 class="h2 pb-4 text-center"><b>Categorías</b></h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3 secciones_categorias_tienda">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" >
                            <b>Tecnología</b>
                            <i class="fa fa-fw fa-chevron-circle-down mt-1 menu"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">IA</a></li>
                            <li><a class="text-decoration-none" href="#">Google</a></li>
                        </ul>
                    </li>
                    <li class="pb-3 secciones_categorias_tienda">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            <b>Superación</b>
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Coaching</a></li>
                            <li><a class="text-decoration-none" href="#">Espiritual</a></li>
                        </ul>
                    </li>
                    <li class="pb-3 secciones_categorias_tienda">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            <b>Cocina</b>
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Carne</a></li>
                            <li><a class="text-decoration-none" href="#">postres</a></li>
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
                                            <a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $producto['nombre']; ?></a>
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
                        $url = BASE_URL . 'principal/categorias/' . $data['id_categoria'];
                        
                        if ($data['pagina'] > 1){
                            echo '  <li class="page-item">
                                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="'. $url . '/' . $anterior.'">Anterior</a>
                                    </li>';
                        }
                        if ($data['total'] >= $siguiente) {
                            echo '  <li class="page-item">
                                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href='. $url . '/' .$siguiente.'>Siguiente</a>
                                    </li>';
                        }
                        ?>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->



    <?php include_once 'Views/template-principal/footer.php';?>
    
</body>

</html>