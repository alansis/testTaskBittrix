<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.11.2017
 * Time: 13:38
 */
require_once dirname(__FILE__) . '/vendor/autoload.php';

use config\connect;
use models\select;

$select = new select();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Вивід коментарів</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/GetdateFromThiscategory.js"></script>
    <script type="text/javascript" src="js/ListCategory.js"></script>

    <script type="text/javascript" src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap-select/js/i18n/defaults-ua_UA.js"></script>

    <script type="text/javascript" src="js/markerclusterer.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/DateToStartPage.js"></script>
    <script type="text/javascript" src="js/GetOnePlace.js"></script>

</head>
<body>
<div class="container">

    <select class="form-control" id="selectCategory" onchange="SelectCategories()">
        <option value="-1"></option>
        <?php $select->allCategory() ?>

    </select>

    <select class="form-control" id="ListCategory">
        <option value="-1"></option>
    </select>
    <button class="btn btn-primary" id="submit"  onclick="SelectOnePlace()">Найти</button>

<div id="map">


    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7EbCoJC1eDuWnJeUcK8k6S02Y92mPsIU&callback=initMap">
    </script>

</div>

</div>
</body>
</html>