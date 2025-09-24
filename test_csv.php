<?php
// Indicar que el contenido es CSV
header('Content-Type: text/csv');

// Leer y enviar el CSV que está en la misma carpeta
readfile('ejemplo.csv');  // nombre exacto del archivo que subiste
