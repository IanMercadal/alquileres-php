<?php 

require_once './models/casa.php';

class casaController {
    function index() {
        require_once './views/index.php';
    }
    function list() {
        require_once './views/casas/casas.php';
    }
    function casa() {
        require_once './views/casas/casa.php';
    }
    function reserva() {
        require_once './views/reserva.php';
    }
}

?>