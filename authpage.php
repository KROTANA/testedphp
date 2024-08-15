<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" class="firma">
        <br>
        АВТОРИЗАЦИЯ<br><br>
        Введите логин
        <input type="text" name="login" class="blockfirm"><br>
        Введите пароль
        <input type="password" name="password" class="blockfirm">
        <br>
        <button type="submit" class="otp"><b>Отправить</b></button>
        <br>
        <?echo"<button type='button' class='otp'><a href='/registration.php'style='color: #000; text-decoration:none;color:white'><b>Регистрация</b></a></button>"?>
        <div class="change" id="change"></div>
        <br>
        
        
        
        

    </form>

    

    <?
    function registr(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            if(empty($_POST['login']) || empty($_POST['password'])) {
                echo "Все поля должны быть заполнены";
                exit(); // Прекращаем выполнение скрипта, если есть пустые поля
            }  
            $username = $_POST['login'];
            $password = $_POST['password'];
            try{
                $pdo = new PDO("mysql:host=127.0.0.1; dbname=gatetrans",'root','');
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $sty = $pdo->prepare("SELECT * FROM users WHERE login = ?");
                $sty->execute([$username]);
                $prov = $sty->fetch();
                if($prov && password_verify($password,$prov['password'])){
                    setcookie('login',$_POST['login'],time() + (300 * 400),"/");
                    header("Location: /userpage.php");
                    exit();
                   
                }
                else{
                    //в проивном случае просто выведиться через js скрипт сообщение что что то не правильно
                    echo "
                    <script>
                    let vs = document.getElementById('change').textContent =
                     'Неправильные логин или пароль'
                    </script>";
                }
               
            }catch(PDOExeption $e){
                echo 'Ошибка подключения к бд';
            }
            
            
        
            
        }
    }
    if (!isset($_COOKIE['login'])) {
        registr();
        } else {
        header("Location: /userpage.php");
      }
    
    
    
    
    ?>

</body>
</html>