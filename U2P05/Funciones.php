<?php
function validacion($texto){
    $bol=false;
    if(empty($texto)){
        echo "error rellena el campo";
        return false;
    }elseif (!preg_match($texto)){
        return false;
    }else{ 
        return true;
    }
}
function validarEmail($str){
        $result = (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
        if ($result){
        list($user, $domain) = split('@', $str);
        $result = checkdnsrr($domain, 'MX');       
        }
        return $result;        
}
function validarFecha($fecha){
    $validacion='^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$';
    if(!preg_match($validacion, $fecha)){
        echo "Fecha no Válida";
        return false;
    }else{
        return true;
    }
}
function validarTelf($telf){
    $validar='^(\+34|0034|34)?[6|7|9][0-9]{8}$';
    if(!preg_match($validar, $telf)|| empty($fecha)){
        echo "telefono";
        return false;
    }else{
        return true;
    }
}

function validarDireccion($direccion){
    if(preg_match("/^Calle/", $direccion)){
        return true;
    }else{
        echo "error no es una calle la direccion debe de empezar por Calle/";
        return false;
    }
}
function validarPassword($password){
    $validar='^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$';
    if(! preg_match($validar, $password)){
        echo "La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
        NO puede tener otros símbolos.
        Ejemplo:
        s8ErgioMiguel9";
        return false;
    }else{
        return true;
    }
}

?>