<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'vendor/autoload.php';
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo $generator->getBarcode("123456789124", $generator::TYPE_EAN_13);
?>

</body>
</html>