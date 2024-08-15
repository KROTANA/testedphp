<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registrationpage.css">
</head>
<body>
    <div class="blockreg">
        <form method="post" class="firm">
            <div class="logo"></div>
            <div class="registr">РЕГИСТРАЦИЯ</div>
            
            <div class="menblock">
                <div class="fest">Введите логин</div>
                <input type="text" name="login" class="blockfirm">
            </div>
            <div class="menblock">
                <div class="fest">Введите пароль</div>
                <input type="password" name="password" class="blockfirm">
            </div>
            <div class="menblock">
                <div class="fest">Введите имя</div>
                <input type="text" name = "name"class="blockfirm">
            </div>
            <div class="menblock">
                <div class="fest">Введите фамилию</div>
                <input type="text" name = "surname"class="blockfirm">
            </div>
            <div class="menblock">
                <div class="fest">Введите отчество</div>
                <input type="text" name = "fathername"class="blockfirm">
            </div>
            <div class="menblock">
                <div class="fest">Введите Email</div>
                <input type="text" name = "mail"class="blockfirm">
                
            </div>
            <div class="menblock">
                <div class="fest">Введите номер телефона</div>
                <input type="text" name = "number"class="blockfirm">
                
            </div>
            <div class="menblock">
                <div class="fest">Введите место проживания</div>
                <input type="text" name = "liveplace"class="blockfirm">
                
            </div>
            <div class="menblock">
                <div class="fest">Ваша страна:</div>
                <input type="text" name = "country"class="blockfirm">
                

                
            </div>
            <div class="buttonplace">
                <button type="submit" class="otp"><b>Зарегестрироватся</b></button>
            </div>
            

        </form>
    </div>
    <?
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['surname'])
         || empty($_POST['fathername']) || empty($_POST['mail']) || empty($_POST['number']) ||
         empty($_POST['liveplace']) || empty($_POST['country'])) {
            echo "<script>alert('Всеполя должны быть заполнены!')</script>";
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
                alert('Пользовател  с таким логином уже существует')
                </script>";
            }else{
                $dbn = $pdo->prepare("INSERT INTO users (id,login,password,name,surname,fathername,mail,phonenumber,liveplace,country) VALUES (?,?,?,?,?,?,?,?,?,?)");
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $dbn->execute([NULL,$username,$passwordHash,$name,$surname,$fathername,$mail,$number,$liveplace,$country]);
                header("Location: /authorizationpage.php");
    
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