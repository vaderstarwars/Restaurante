<?php
// Obtener la ruta del archivo index.html en la misma ubicación
$indexFilePath = __DIR__ . '/index.html';

// Verificar si el archivo existe
if (file_exists($indexFilePath)) {
    // Leer el contenido del archivo index.html
    $indexContent = file_get_contents($indexFilePath);
    
    // Imprimir el contenido del archivo en el navegador
    echo $indexContent;
} else {
    // Mostrar un mensaje de error si el archivo no se encuentra
    echo "El archivo index.html no se encontró en la ubicación especificada.";
}
?>
