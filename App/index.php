<?php
require_once "../config/config.php";
if (!isset($_GET["v"])) {
    $_GET["v"] = "login";
}
$view = $_GET["v"];
switch ($view) {
    case "login":
        $view = $view . "-view.php";
        require_once "./views/Login/$view";
        break;
    case "home":
        $view = $view . "-view.php";
        require_once "./views/Home/$view";
        break;
    default:
        break;
}
