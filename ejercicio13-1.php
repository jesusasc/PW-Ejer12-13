<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
<?php
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

$unidades = ["km", "m", "cm", "mi", "yd", "ft", "in"];

$numero  = recoge("numero");
$inicial = recoge("inicial");
$final   = recoge("final");

$numeroOk  = false;
$inicialOk = false;
$finalOk   = false;

if ($numero == "") {
    print "  <p class=\"aviso\">No ha escrito nada.</p>\n";
    print "\n";
} elseif (!is_numeric($numero)) {
    print "  <p class=\"aviso\">No ha escrito un número.</p>\n";
    print "\n";
} else {
    $numeroOk = true;
}

if (!in_array($inicial, $unidades)) {
    print "  <p class=\"aviso\">No ha elegido una unidad inicial válida.</p>\n";
    print "\n";
} else {
    $inicialOk = true;
}

if (!in_array($final, $unidades)) {
    print "  <p class=\"aviso\">No ha elegido una unidad final válida.</p>\n";
    print "\n";
} else {
    $finalOk = true;
}

if ($numeroOk && $inicialOk && $finalOk) {
    // La unidad intermedia es el metro
    $numeroIntermedio = 0;
    if ($inicial == "km") {
        $numeroIntermedio = $numero * 1000;
    } elseif ($inicial == "m") {
        $numeroIntermedio = $numero;
    } elseif ($inicial == "cm") {
        $numeroIntermedio = $numero / 100;
    } elseif ($inicial == "mi") {
        $numeroIntermedio = $numero * 1760 * 3 * 12 * 2.54 / 100;
    } elseif ($inicial == "yd") {
        $numeroIntermedio = $numero * 3 * 12 * 2.54 / 100;
    } elseif ($inicial == "ft") {
        $numeroIntermedio = $numero * 12 * 2.54 / 100;
    } elseif ($inicial == "in") {
        $numeroIntermedio = $numero * 2.54 / 100;
    }

    if ($final == "km") {
        $numeroFinal = $numeroIntermedio / 1000;
    } elseif ($final == "m") {
        $numeroFinal = $numeroIntermedio;
    } elseif ($final == "cm") {
        $numeroFinal = $numeroIntermedio * 100;
    } elseif ($final == "mi") {
        $numeroFinal = $numeroIntermedio / 1760 / 3 / 12 / 2.54 * 100;
    } elseif ($final == "yd") {
        $numeroFinal = $numeroIntermedio / 3 / 12 / 2.54 * 100;
    } elseif ($final == "ft") {
        $numeroFinal = $numeroIntermedio / 12 / 2.54 * 100;
    } elseif ($final == "in") {
        $numeroFinal = $numeroIntermedio / 2.54 * 100;
    }

    print "  <p>$numero $inicial = $numeroFinal $final.</p>\n";
    print "\n";
}
?>
  <p><a href="ejercicio13.php">Volver al formulario.</a></p>

</body>
</html>