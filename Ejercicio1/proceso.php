<?php
$num1 = isset($_POST['n1']) ? $_POST['n1'] : "";
$num2 = isset($_POST['n2']) ? $_POST['n2'] : "";
$operador = isset($_POST['operador']) ? $_POST['operador'] : "";

switch($operador){
    case '+':
        $respuesta = $num1 + $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;
        
    case '-':
        $respuesta = $num1 - $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;

    case '*':
        $respuesta = $num1 * $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;

    case '/':
        if ($num2 != 0) {
            $respuesta = $num1 / $num2;
            echo "La respuesta de la operación es: " . $respuesta;
        } else {
            echo "No se puede dividir por cero.";
        }
        break;

    case '%':
        if ($num2 != 0) {
            $respuesta = $num1 % $num2;
            echo "La respuesta de la operación es: " . $respuesta;
        } else {
            echo "No se puede dividir por cero.";
        }
        break;

        case '**': 
            $respuesta = $num1 ** $num2;
            echo "La respuesta de la operación es: " . $respuesta;
            break;

    default:
        echo "No existe esa operación.";
        break;
}
?>



