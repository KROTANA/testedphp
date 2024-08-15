<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="usercabinet.css">
</head>
<body>
    <div class="felbod">
        <div class="shap">
            <div class="comb" id="comb">
                <div class="logo"></div>
                <div class="tex">Логистика<br>и экспедирование</div>
            </div>
    
            <div class="glav"><div style="cursor: pointer;">Главная</div></div>
            <div class="ysl"onmouseover="showMenu()" onmouseleave="hideMenu()" >
                <div style="cursor: pointer;" class="mov">Услуги<div class="d" id="d"></div></div>
                <ul id="menu">
                  <li class="back">Контейнерные перевозки</li>
                  <li class="back">Перевозка сборных грузов</li>
                  <li class="back">Перевозка негабаритных грузов</li>
                  <li class="back">Перевозка негабаритных грузов</li>
                  <li class="back">Перевозка сыпучих и  навалочных грузов</li>
                  <li class="back">Судовое агентирование</li>
                  <li class="back">Агентирование в Китае</li>
                </ul>
              </div>
            <div class="onac" onmouseover="showMenu2()" onmouseleave="hideMenu2()">
                <div style="cursor: pointer;" class="mov">О нас<div class="d" id="d2"></div></div>
                <ul id="menu2">
                    <li class="back">Компания и контакты</li>
                    <li class="back">Направление грузоперевозок</li>
                </ul>
            
            </div>
            <div class="spaced"><div class="autopolz"><div class="name" id="name"onclick="window.location.href='delcook.php'"></div><div class="btag" onclick="window.location.href='authorizationpage.php'"id="auth">Авторизация</div><div class="btag"onclick="window.location.href='registrationpage.php'"id="reg">Регистрация</div></div></div>
            <div class="contact">mail@greatway-trans.ru<br><br>Email</div>
            <div class="contact2">+7 (984) 198-58-88<br><br>Phone</div>
            <div class="lscab"></div>
            <div class="bm" id="bm">
                <div class="ham" id="ham">
                    <div class="line" id="line"></div>
                    <div class="line" id="line2"></div>
                    <div class="line" id="line3"></div>
                </div>
            </div>
            
            <div class="showme" id="showme">
                <div class="shmbt">Главная</div>
                <div class="shmbt" onclick="burgercheckload()" id="burgysl">Услуги<div class="dburg1" id="dburg1"></div></div>
                <div class="shmbtysl" id="shmbtysl">
                    <div class="linkmen">Контейнерные перевозки</div>
                    <div class="linkmen">Перевозка сборных грузов</div>
                    <div class="linkmen">Перевозка негабаритных грузов</div>
                    <div class="linkmen">Перевозка сыпучих навалочных грузов</div>
                    <div class="linkmen">Судовое агентирование</div>
                    <div class="linkmen">Судовое агентирование</div>
                    <div class="linkmen">Агентские услуги в китае</div>
                </div>
                <div class="shmbt" onclick="burgercheckload2()" id="burgysl2">О нас<div class="dburg2" id="dburg2"></div></div>
                <div class="shmbtysl2" id="shmbtysl2">
                    <div class="linkmen">Компания и контакты</div>
                    <div class="linkmen">Направление грузоперевозок</div>
                </div>
                <div class="shmbt" id="nameMobile"onclick="window.location.href='usercabinet.php'"></div>
                <div class="shmbt" id="authMobile"onclick="window.location.href='authorizationpage.php'">Авторизация</div>
                <div class="shmbt" id="regMobile"onclick="window.location.href='registrationpage.php'">Регистрация</div>
                <div class="shmbt">mail@greatway-trans.ru</div>
                <div class="shmbt">+7 (984) 198-58-88</div>
                <div class="shmbt" id="exit"onclick="window.location.href='delcook.php'">Выйти</div>
            </div>
        </div>
        <div class="usercabinetbody">
            <div class="formzak">
                <div class="formlogo">Сделайте заказ сейчас и вам позвонит менеджер для уточнения данных</div>
                <form method="post" class="zakformest">
                    <div class="formmodel">
                        <div class="name">Наименование заказа</div>
                        <input type="text" name = "ident" class="formet">
                    </div>
                    <div class="formmodel">
                        <div class="name">Куда</div>
                        <input type="text" name = "ins"class="formet">
                    </div>
                    <div class="formmodel">
                        <div class="name">Откуда</div>
                        <input type="text" name = "from"class="formet">
                    </div>
                    <div class="formmodel">
                        <div class="name">Вес груза</div>
                        <input type="text" name = "weight"class="formet">
                    </div>
                    <div class="formmodel">
                        <div class="name">Информация о грузе</div>
                        <textarea type="text" name="info"class="formet"></textarea>
                    </div>
                    <div class="formmodel">
                        <div class="name">Обьем(кб)</div>
                        <input type="text" name = "obk"class="formet">
                    </div>
                    <button type="submit" class="butert">Сделать заказ</button>
                </form>
            </div>
            <div class="checkzak">
            <div class="avert" style="width: 100%; text-align: center; color: white; font-weight: bold; font-size: 30px;">Здесь отображаются ваши заказы</div>
            <?php
        try {
            
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=gatetrans", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            
            $stmt = $pdo->prepare("SELECT inplace, fromplace, numtrack, trackname, place, weight, info, obk FROM orders WHERE login = ?");
            $stmt->execute([$_COOKIE['login']]);
            $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($orders) {
                foreach ($orders as $order) {
                    echo '<div class = "orderoform">';
                    echo "Отправление в: " . htmlspecialchars($order['inplace']) . "<br><br> ";//specialchars защищает от XSS
                    // атак преобразкя специальные символы в HTML сущности
                    echo "Отправляется из: " . htmlspecialchars($order['fromplace']) . "<br> <br>";
                    echo "Номер заказа: " . htmlspecialchars($order['numtrack']) . "<br><br> ";
                    echo "Название заказа: " . htmlspecialchars($order['trackname']) . "<br><br> ";
                    echo "Статус заказа: " . htmlspecialchars($order['place']) . "<br><br> ";
                    echo "Вес груза: " . htmlspecialchars($order['weight']) . "<br><br> ";
                    echo "Информация о грузе: " . htmlspecialchars($order['info']) . "<br><br> ";
                    echo "Объем груза: " . htmlspecialchars($order['obk']);
                    echo "<br>";
                    echo '</div>';
                }
            } else {
                echo 'У вас пока нет заказов';
            }
        } catch (PDOException $e) {
            echo 'Ошибка подключения к базе данных: ' . $e->getMessage();
        }
        ?>
            </div>
        </div>
        <div class="fot">
            <div class="fotblock">
                <div class="fotblocktexts">
                    <div class="fttext">Услуги<br><br>

                        Перевозка сборных грузов
                        Контейнерные перевозки</div>
                    <div class="fttext"><br><br>Перевозка негабаритных грузов
                        Перевозки сыпучих и навалочных грузов</div>
                    <div class="fttext"><br><br>Агентские услуги в Китае
                        Судовое агентирование</div>
                    <div class="fttext">Адрес<br><br>

                        ​ул. Запорожская, д. 77​, блок 840, г. Владивосток, 690021</div>
                    <div class="fttext"><br><br>mail@greatway-trans.ru
                        Email</div>
                    <div class="fttext"><br><br>+7 (984) 198-58-88
                        Phone</div>
                </div>
                <div class="fotblockline">
                    <div class="logoandtext">
                        <div class="logologo"></div>
                        <div class="logologotext"><br>2024 C <br>Все материалы данного сайта являются объектами авторского права. Копирование запрещено.</div>
                        <div class="alerts">Разработано GKD</div>
                    </div>
                </div>
                <div class="fotlogoandconf"></div>
            </div>
        </div>
    </div>
    <script src="mainpage.js"></script>
    <?php
    use Picqer\Barcode\BarcodeGeneratorPNG;

    require __DIR__ . '/vendor/autoload.php';
    if (isset($_COOKIE['login'])) {
        echo '<script>
        </script>
        <script>
        let vas = document.getElementById("auth")
        let vas2 = document.getElementById("reg")
        vas.remove()
        vas2.remove()
        let nameElement = document.getElementById("name");
        nameElement.innerHTML = "Выйти<br><br>' . $_COOKIE['login'] . '";
        let namemobile = document.getElementById("nameMobile").textContent = "Личный кабинет:'.$_COOKIE['login'].'"
        let authMobile = document.getElementById("authMobile")
        let regMobile = document.getElementById("regMobile")
        authMobile.remove()
        regMobile.remove()

        </script>
        ';
      }else{
        echo '<script>
        let vas = document.getElementById("name")
        vas.remove()
        let namemobile = document.getElementById("nameMobile")
        namemobile.remove();
        let exit = document.getElementById("exit")
        exit.remove()
        </script>
        
        
        
        
        ';
      }
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
    
            file_put_contents("shtrih/$orderNumber.png", $barcodeData);

            echo "<script>
            window.location.href = 'usercabinet.php';
        </script>";
            
        }catch(PDOException $e){
            echo 'Ошибка: ' . $e->getMessage();
            exit();
        }
        exit();
    }
    ?>
</body>
</html>