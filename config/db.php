<?php

class Database {
    public static function connect() {
        $db = new mysqli('localhost','root','root','alquileres_casas');
        return $db;
    }
}