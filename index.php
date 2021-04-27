<?php
require_once "inc/config.php";
require_once "controller/PetsController.php";
require_once "model/Pet.php";

$app = new PetsController();
$app->all();