<?php


if($_POST){
    echo '<h1>Recibiendo la informacion por POST</h1>';
    echo '<h3>El nombre es: "' . ($_POST['nombre']).'".</h3>';
    echo '<h3>El segundo nombre es: "' . ($_POST['nombre2']).'".</h3>';
    echo '<h3>El apellido es: "' . ($_POST['apellido']).'".</h3>';
    echo '<h3>El número de documento es "' . ($_POST['dni']).'".</h3>';
    echo '<h3>El correo electrónico es "' . ($_POST['correo']).'".</h3>';
    echo '<h3>El número de teléfono movil es "' . ($_POST['mobile']).'".</h3>';
    echo '<h3>La fecha de nacimiento es "' . ($_POST['fecha']).'".</h3>';

    echo '<table border cellspacing=5px cellpadding=2px>';
    echo '<tr style="background-color:yellow">';
    echo '<th>Primer Nombre</th>';
    echo '<th>Segundo Nombre</th>';
    echo '<th>Apellido</th>';
    echo '<th>DNI</th>';
    echo '<th>E-Mail</th>';
    echo '<th>Nº Celular</th>';
    echo '<th>Fecha de Nacimiento</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="text-align:center;background-color:cyan">'.($_POST['nombre']).'</td>';
    echo '<td style="text-align:center;background-color:cyan">'.($_POST['nombre2']).'</td>';
    echo '<td style="text-align:center;background-color:cyan">'.($_POST['apellido']).'</td>';
    echo '<td style="text-align:center;background-color:cyan">'.($_POST['dni']).'</td>';
    echo '<td style="text-align:center;background-color:cyan">'.($_POST['correo']).'</td>';
    echo '<td style="text-align:center;background-color:cyan">'.($_POST['mobile']).'</td>';
    echo '<td style="text-align:center;background-color:cyan">'.($_POST['fecha']).'</td>';
    echo '</tr>';
    echo '</table>';
} else {
    echo '<h1>Recibiendo la informacion por GET</h1>';
}

echo '<div style="margin-top:20px;font-size:2em">';
echo '<a href="./index.php">Volver a la pantalla principal</a>';
echo '</div>';

?>