<?php

// Creo una clase estática
class Database{
    public static function connect() {
        $db = new mysqli('localhost', 'root', 'root', 'tienda_master');
        $db->query("SET NAMES 'utf-8'");
        return $db;
    }
}