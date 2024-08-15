<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sites">
        <div class="hea">
            <div class="logo"></div>
            <div class="men1">
                <div class="news">НОВОСТИ</div>
                <div class="shops">МАГАЗИНЫ</div>
                <div class="states">ГОРОДА</div>
                <div class="places">МЕСТА</div>
            </div>
            <div class="buttons">
                <button type="button" class="bt" id="bt1"><a href="regpage.php" style="color: #000;text-decoration:none;color:white">Регистрация</a></button>
                <div class="name" id="name"></div>
                <div type='button' class="logout" id="bim"><a href='/delcook.php' style="color: #000; text-decoration:none;color:white;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:20px;">ВЫЙТИ</a></div>
                <button type="button" class="bt" id="bt2"><a href="authpage.php" style="color: #000; text-decoration:none;color:white">Авторизация</a></button>
                <button type="button" class="bt" id="bt3"><a href="checkzak.php" style="color: #000; text-decoration:none;color:white">Заказы</a></button>
            </div>
        </div>
        <div class="mai">
        <div class="verticalpanel">
                <div class="cart1"></div>
                <div class="texted1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lectus risus, finibus ornare vestibulum et, feugiat quis dui. Vivamus sit amet dolor et magna facilisis rhoncus. Curabitur maximus est sed porta scelerisque. Sed suscipit, arcu volutpat feugiat posuere, eros nisi tristique nibh, mollis vehicula lectus tortor eu purus. Donec ut tortor blandit, sagittis diam eget, suscipit eros.</div>
                <div class="cart2"></div>
                <div class="texted2">Nulla faucibus mi at nunc mattis placerat. Pellentesque quis augue quis elit tristique auctor. Integer varius est orci, vel egestas felis dictum nec. Phasellus porta ex sit amet turpis finibus, sed vestibulum nisl efficitur. Praesent ultrices diam enim. In ut tellus sed sem placerat sollicitudin. Donec quis mollis dolor. Etiam viverra, arcu cursus porttitor porttitor, diam nunc auctor nisl, quis placerat magna erat et odio.</div>
            </div>
       
        </div>
        <div class="foot">
        <div class="hea">
                <div class="logo"></div>
                <div class="men1">
                    <div class="news">НОВОСТИ</div>
                    <div class="shops">МАГАЗИНЫ</div>
                    <div class="states">ГОРОДА</div>
                    <div class="places">МЕСТА</div>
                </div>
                <div class="hefs">
                    <div class="telegramm" onclick="window.location.href='https://telegram.org/'"></div>
                    <div class="vk" onclick="window.location.href='https://vk.com/tyrior'"></div>
                    <div class="github" onclick="window.location.href='https://github.com/KROTANA/'"></div>
                </div>
            </div>
        </div>
        <div class="cop" style="background-color: black; width: 100%; color: white; text-align: center;">Copyryng@2024</div>
        </div>
    </div>

    <?
    //ГЛАВНОЕ НЕ ЗАБУДЬ. это пример ставки пхп кода в жс. тут идет логика если пользователь не авторизирован то выдает две кнопки
    //а если авторизирован - просто его логин и кнопку выйти
    if (isset($_COOKIE['login'])) {
        echo '<script>
        </script>
        <script>
        let vas = document.getElementById("bt1")
        let vas2 = document.getElementById("bt2")
        vas.remove()
        vas2.remove()
        let change = document.getElementById("name").textContent = "'.$_COOKIE['login'].'"
        </script>
        ';
      }else{
        echo '<script>
        let vas = document.getElementById("bim")
        let gnim = document.getElementById("bt3")
        vas.remove()
        gnim.remove()
        
        </script>
        
        
        
        
        ';
      }
    //echo 'Это страница пользователя';
    //типо такой
    //echo"<button type='button'><a href='/delcook.php'>1</a></button>";
    //echo '<br>';
    //echo $_COOKIE['login'];
    //ДЕЛАЙ СТРАНИЦУ ПОЛЬЗОВАТЕЛЯ ТОЕСТЬ ГЛАВНУЮ
    
    ?>
</body>
</html>