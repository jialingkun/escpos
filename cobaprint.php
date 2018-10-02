<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/mike42/escpos-php/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
try {
    // Enter the share name for your USB printer here
    $connector = new WindowsPrintConnector("MINIPOS"); //MINIPOS adalah nama shared printernya
    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    $printer -> text("Teh Matcha super nikmat terbuat dari daun asli\n");
    $printer -> text("Rp 10.000\n");
    $printer -> text("aaaaa\n");
    $printer -> cut();
    
    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
?>