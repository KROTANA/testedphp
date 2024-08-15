<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name = "ident">Наименование заказа<br>
        <input type="text" name = "ins">Куда<br>
        <input type="text" name = "from">Откуда<br>
        <input type="text" name = "weight">Вес груза<br>
        <textarea type="text" name="info">Информация о грузе</textarea><br>
        <input type="text" name = "obk">Обьем(кб)<br>
        
        <button type="submit">Отправить</button>
    </form>
    <?php
    use Picqer\Barcode\BarcodeGeneratorPNG;

    require __DIR__ . '/vendor/autoload.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['ident']) || empty($_POST['ins']) || empty($_POST['from']) || empty($_POST['weight']) || empty($_POST['info']) || empty($_POST['obk']) ) {
            echo "Все поля должны быть заполнены";
            exit(); 
        }  
        $name = $_POST['ident'];
        $ins = $_POST['ins'];
        $from = $_POST['from'];
        $weight = $_POST['weight'];
        $info = $_POST['info'];
        $obk = $_POST['obk'];
    
        try{
            $pdo = new PDO("mysql:host=127.0.0.1; dbname=gatetrans", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $orderNumber =  rand(100000000000, 999999999999);//Генерация 12 чисел. Код для 6 rand(100000, 999999)
                                                            
        //Создание уникального идентифблэбэлэблэблэ потратил 3 часа делал ночью не додумался до цикла

            while (true) {
                $checkOrder = $pdo->prepare("SELECT * FROM orders WHERE numtrack = ?");
                $checkOrder->execute([$orderNumber]);
        
        
                if ($checkOrder->fetch()) {
                    $orderNumber =  rand(100000000000, 999999999999);//Генерация 12 чисел. Код для 6 rand(100000, 999999)
                } else {
                    break;
                }
        }
            $dbn = $pdo->prepare("INSERT INTO orders (id, login, place, inplace, fromplace, numtrack, trackname,weight,info,obk) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $dbn->execute([NULL, $_COOKIE['login'], 'В обработке', $ins, $from, $orderNumber, $name,$weight,$info,$obk]);
            $pdo = null;
            //Для работы требуется composer и пхп выше или равно 8.1
            //Так же нужен composer и установить через консоль composer require picqer/php-barcode-generator

            $generator = new Picqer\Barcode\BarcodeGeneratorPNG(); 
            

            // Создание изображения штрихкода в формате PNG
           

            // Сохранение изображения штрихкода в файл
           
            $barcodeData = $generator->getBarcode($orderNumber, $generator::TYPE_CODE_128);
            //Пофиксить проблему со штрихкодом а именно последння рандомная цифра
            file_put_contents("shtrih/$orderNumber.png", $barcodeData);

            header("Refresh:0");
            
        }catch(PDOException $e){
            echo 'Ошибка: ' . $e->getMessage();
            exit();
        }
        exit();
    }
    
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=gatetrans", 'root', '');
    $stmt = $pdo->prepare("SELECT login, inplace,fromplace,numtrack,trackname,place,weight,info,obk FROM orders WHERE login = ?");
    $stmt->execute([$_COOKIE['login']]);
    $orders = $stmt->fetchAll();
    if ($orders) {
        echo '<div class="checkzak">';
        foreach ($orders as $order) {
            echo "Отправление в: " . $order['inplace'] . ", ";
            echo "Отправляется из: " . $order['fromplace'] . ", ";
            echo "Номер заказа: " . $order['numtrack'] . ", ";
            echo "Название заказа: " . $order['trackname'] . ", ";
            echo "Статус заказа: " . $order['place'] . ", ";
            echo "Вес груза: " . $order['weight'] . ", ";
            echo "Информация о грузе: " . $order['info'] . ", ";
            echo "Объем груза: " . $order['obk'];
            echo "<br>";
        }
        echo '</div>';
    
    }else{
        echo 'У вас пока нет заказов';
    }


    
    

    
    
    ?>

   

</body>
</html>