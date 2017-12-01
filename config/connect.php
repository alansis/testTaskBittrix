<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.11.2017
 * Time: 13:47
 */

namespace config;
//require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use PDO;
use PDOException;

class connect {
    public $link;
    public function __construct($username, $password) {
        try {
            $this -> link = new PDO('mysql:host=localhost;dbname=testtaskbitrix;charset=utf8', $username, $password);

        } catch (PDOException $e) {
            echo $e -> getMessage() . "" . "<br>";
            die();
        }
    }
}