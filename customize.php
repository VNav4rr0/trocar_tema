<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_theme = $_POST["theme"];

    // Define cookies para armazenar a preferência de tema
    setcookie("theme", $selected_theme, time() + (86400 * 30), "/");

    // Redireciona de volta para a página principal
    header("Location: index.php");
    exit();
}
?>
