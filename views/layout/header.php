<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alquileres</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url ?>/assets/css/styles.css">
    </head>
    <body>
        
    <?php if ($_SERVER['REQUEST_URI'] == "/") :?>
        <div class="banner">
            <nav class="navigation">
                <img class="nav-logo" src="<?php echo base_url ?>/assets/img/utils/logo.png">

                <div class="nav-options">
                    <a href="<?php echo base_url ?>" class="nav-link">Inicio</a>
                    <a href="<?php echo base_url ?>/casa/list" class="nav-link">Casas</a>
                    <a href="<?php echo base_url ?>/page/nosotros" class="nav-link">Nosotros</a>
        
                    <a href="" class="nav-perfil"><img class="nav-perfil-img" src="<?php echo base_url ?>/assets/img/utils/pic-1.png"></a>
                </div>
            </nav>

            <div class="banner-text">
                <h2 id="banner-titulo">Tu página de casas de lujo para alquilar favorita</h2>
                <p>Tenemos una amplia variedad en propiedades para alquilar alrededor de la isla</p>

                <button class="btn-banner">Explorar más</button>
            </div>

        </div>
    <?php else :?>
        <nav class="navigation dark-option">
            <img class="nav-logo" src="<?php echo base_url ?>/assets/img/utils/logo.png">

            <div class="nav-options">
                <a href="<?php echo base_url ?>" class="nav-link">Inicio</a>
                <a href="<?php echo base_url ?>/casa/list" class="nav-link">Casas</a>
                <a href="<?php echo base_url ?>/page/nosotros" class="nav-link">Nosotros</a>
    
                <a href="" class="nav-perfil"><img class="nav-perfil-img" src="<?php echo base_url ?>/assets/img/utils/pic-1.png"></a>
            </div>
        </nav>
    <?php endif; ?>
