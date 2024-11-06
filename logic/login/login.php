<?php
if ($_POST) {
    session_start(["name" => "SistemaVentas"]);
    //requerimos los archivos
    require_once "../conexion.php";
    require_once "../mysql.php";
    //recibimos los datos del formulario
    $user = $_POST["txtuser"];
    $password = $_POST["txtpassword"];
    //validamos la imformacion que se recibio no este vacia
    if (
        $user ==  "" && $password == ""
    ) {
        $data = array(
            "title" => "ocurrio un error inesperado",
            "content" => "campos vacios",
            "status" => false
        );
        echo json_encode($data);
        die();
    }
    $sql = "SELECT*FROM usuarios AS u
    WHERE u.u_user=? AND u.u_password=?;";
    $arrData = array($user, $password);
    $request = select($conexion, $arrData, $sql);
    if (!$request) {
        $data = array(
            "title" => "Ocurrio un error inesperado",
            "content" => "El usuario o la contraseña no existes",
            "startus" => false
        );
        echo json_encode($data);
        die();
    }
    $_SESSION["sesion_login"]["info"] = $request;
    $data = array(
        "url" => "?v=home",
        "status" => true,
    );
    echo json_encode($data);
}
