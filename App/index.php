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
        session_start(["name" => "SistemaVentas"]);
        $view = $view . "-view.php";
        require_once "./views/Home/$view";
        break;
    case "categories":
        session_start(["name" => "SistemaVentas"]);
        $view = $view . "-view.php";
        require_once "./views/categories/$view";
        break;

    case "productos":
        session_start(["name" => "SistemaVentas"]);
        $view = $view . "-view.php";
        require_once "./views/productos/$view";
        break;
    case "clientes":
        session_start(["name" => "SistemaVentas"]);
        $view = $view . "-view.php";
        require_once "./views/clientes/$view";
        break;
    default:
        break;
}
