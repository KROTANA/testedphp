<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" class="firma">
        РЕГИСТРАЦИЯ<br><br>
        Введите логин
        <input type="text" name="login" class="blockfirm"><br>
        Введите пароль
        <input type="password" name="password" class="blockfirm">
        <br>
        <input type="text" name = "name">Введите имя
        <br>
        <input type="text" name = "surname">Введите Фамилию
        <br>
        <input type="text" name = "fathername">Введите отчество
        <br>
        <input type="text" name = "mail">Введите email
        <br>
        <input type="text" name = "number">Введите номер телефона
        <br>
        <input type="text" name = "liveplace">Введите место проживания
        <br>
        <input type="text" name = "country">Страна
        <button type="submit" class="otp"><b>Отправить</b></button>
        <div class="change" id="change"></div>

    </form>

    <?
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['fathername']) || empty($_POST['mail']) || empty($_POST['number']) || empty($_POST['liveplace']) || empty($_POST['country'])) {
            echo "Все поля должны быть заполнены";
            exit();
        }
        $username = $_POST['login'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $fathername = $_POST['fathername'];
        $mail = $_POST['mail'];
        $number = $_POST['number'];
        $liveplace = $_POST['liveplace'];
        $country = $_POST['country'];

        try{
            $pdo = new PDO("mysql:host=127.0.0.1; dbname=gatetrans",'root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $checkuser = $pdo->prepare("SELECT * FROM users WHERE login = ?");
            $checkuser->execute([$username]);
            if($checkuser->fetch()){
               echo "
                <script>
                let vs = document.getElementById('change').textContent =
                 'пользователь с таким логином уже существует'
                </script>";
            }else{
                $dbn = $pdo->prepare("INSERT INTO users (id,login,password,name,surname,fathername,mail,phonenumber,liveplace,country) VALUES (?,?,?,?,?,?,?,?,?,?)");
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $dbn->execute([NULL,$username,$passwordHash,$name,$surname,$fathername,$mail,$number,$liveplace,$country]);
                header("Location: /authpage.php");
    
            }
            $pdo = null;
    
        }catch(PDOExcption $e){
            echo 'Ошибка';
        }
        exit();
    }
    
    
    
    
    ?>

</body>
</html>