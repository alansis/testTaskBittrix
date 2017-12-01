<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.11.2017
 * Time: 14:06
 */

namespace models;
require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use config\connect;
use PDO;

Class select extends connect{
    public function __construct($username="root", $password="")
    {
        parent::__construct($username, $password);
    }

    public function selectCategory(){
        $sql  = 'SELECT DISTINCT `type` FROM markers';
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $category = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $category;
    }

    public function selectFromThisCategory($type = ""){
        $sql  = 'SELECT * FROM `markers` WHERE `type` = :type';
        $stmt = $this->link->prepare($sql);
        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
        $stmt->execute();
        $dateFromThisCategory = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dateFromThisCategory;
    }

    public function selectAllDateAboutPlace(){
        $sql  = 'SELECT `name`, `address`, `lat`, `lng`, `type` FROM `markers`';
        $stmt = $this->link->prepare($sql);
        $stmt->execute();
        $selectData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $selectData;
    }

    public function selectOnePlace($name){
        $sql  = 'SELECT * FROM `markers` WHERE `name` = :name';
        $stmt = $this->link->prepare($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $dataFromOnePlace = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dataFromOnePlace;
    }

    public function allCategory(){
        $category = $this->selectCategory();
        foreach ($category as $one) {
            echo '<option>' . $one['type'] . '</option>';
        }
    }

    public function allFromThisCategory($dateFromThisCategory){
        foreach($dateFromThisCategory as $one){
            echo $one['name'] . " ";
        }
    }
}
