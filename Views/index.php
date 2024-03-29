<?php include_once 'Views/template-principal/header.php';?>


<!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success text-center"><b>Tecnología</b></h1>
                                <h3 class="h2 text-center">-------------------</h3>
                                <p style="text-align: justify;">
                                    --------------------------------------
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success text-center"><b>Superación</b></h1>
                                <h3 class="h2 text-center">-----------------------------</h3>
                                <p style="text-align: justify;">
                                    -------------------------------
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success text-center"><b>Cocina</b></h1>
                                <h3 class="h2 text-center">-------------------------</h3>
                                <p style="text-align: justify;">
                                    -----------------------------
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1"><b>Categorías</b></h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['categorias'] as $categoria){?>
            <div class="col-12 col-md-2 p-5 mt-3">
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img style="border-radius: 50px;" src="<?php echo $categoria['imagen']; ?>" class="img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
                <p class="text-center">
                    <a class="btn btn-success" href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>">Ver</a></p>
            </div>
            <?php }?>

        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"><b>Productos</b></h1>
                </div>
            </div>
            <div class="row">
                <?php foreach($data['nuevoProductos'] as $producto) {?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                            <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">                                           
                        </a>  
                                        
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio']; ?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                            <p class="card-text">
                                <?php echo $producto['descripcion']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
        </div>
    </section>
    <!-- End Featured Product -->

    <?php include_once 'Views/template-principal/footer.php';?>

</body>

</html>