<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura el nombre ingresado
    $nombre = htmlspecialchars($_POST['nombre']);
    echo "<h2>Nombre ingresado: $nombre</h2>";

    // Verifica si se han seleccionado intereses
    if (isset($_POST['intereses'])) {
        $interesesSeleccionados = $_POST['intereses'];
        echo "<h3>Intereses seleccionados:</h3>";
        echo "<ul>";
        foreach ($interesesSeleccionados as $interes) {
            echo "<li>" . htmlspecialchars($interes) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>No se seleccionaron intereses.</h3>";
    }
}
?>