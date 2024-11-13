<?php
//funcion para registrar en las tablas
function register($conexion, array $arrData, string $sql)
{
    try {
        //preparamos la consulta con la conexion
        $prepared = $conexion->prepare($sql);
        $prepared->execute($arrData);
        return $prepared;
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
//funcion que me permite obtener la informacion de las tablas 
function select($conexion, array $arrData = array(), string $sql)
{
    try {
        //preparamos la consulta con la conexion
        $prepared = $conexion->prepare($sql);
        $prepared->execute($arrData);
        $requet = $prepared->Fetch(PDO::FETCH_ASSOC);
        return $requet;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

//funcion que me permite obtener la informacion de las tablas 
function select_all($conexion, array $arrData = array(), string $sql)
{
    try {
        //preparamos la consulta con la conexion
        $prepared = $conexion->prepare($sql);
        $prepared->execute($arrData);
        $requet = $prepared->fetchAll(PDO::FETCH_ASSOC);
        return $requet;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
