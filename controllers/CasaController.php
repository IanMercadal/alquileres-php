<?php 

require_once './models/casa.php';

class casaController {
    function index() {
        require_once './views/index.php';
    }
    function list() {
        echo "list";
    }
}

?>