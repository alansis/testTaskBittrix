<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.11.2017
 * Time: 15:40
 */

namespace controller;

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use DOMDocument;
use models\select;
use PDO;

class AjaxController {

    public $response;

    public function __construct()
    {
        $this->response = json_decode(file_get_contents('php://input'));
    }

    public function route(){
        $select = new select();
        if ($this->response->key === "selectCategory"){
            $result = $select->selectFromThisCategory($this->response->val);
            echo json_encode($result);
        }

        if ($this->response->key === "baseData"){
            $result = $select->selectAllDateAboutPlace();
            echo json_encode($result);
        }

        if ($this->response->key === "ListCategory"){
            $result = $select->selectOnePlace($this->response->val);
            echo json_encode($result);
        }
    }

}

$contreller = new AjaxController();
$contreller->route();