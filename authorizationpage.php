<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="authorizationpage.css">
</head>
<body>
    <div class="blockreg">
        <form method="post" class="firm">
            <div class="logo"></div>
            <div class="registr">Авторизация</div>
            
            <div class="menblock">
                <div class="fest">Введите логин</div>
                <input type="text" name="login" class="blockfirm">
            </div>
            <div class="menblock">
                <div class="fest">Введите пароль</div>
                <input type="password" name="password" class="blockfirm">
            </div>
            <div class="buttonplace">
                <button type="submit" class="otp"><b>Авторизация</b></button>
            </div>
            

        </form>
    </div>
    <?
    function registr(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            if(empty($_POST['login']) || empty($_POST['password'])) {
                echo "<script>alert('Все поля должны быть заполнены')</script>";
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
                    header("Location: /mainpage.php");
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
        header("Location: /mainpage.php");
      }
    
    
    
    
    ?>
</body>
</html>