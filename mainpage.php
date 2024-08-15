<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainpage.css">
</head>
<body>
    <div class="fir">
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
                <div class="spaced"><div class="autopolz"><div class="name" id="name"onclick="window.location.href='usercabinet.php'"></div><div class="btag" onclick="window.location.href='authorizationpage.php'"id="auth">Авторизация</div><div class="btag"onclick="window.location.href='registrationpage.php'"id="reg">Регистрация</div></div></div>
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
            
        </div>
        <br>
        <div class="bod">
            <div class="banner">
                <div class="bannertext">
                    
                    Профессиональные <br>грузоперевозки<br> любой сложности<br> для вашего бизнеса
                    </div>
                    <div class="bannerblock">
                    <div class="ks">
                        <div class="kslg1"></div><br>
                        <div class="kstx">Короткие<br>сроки</div>
                    </div>
                    <div class="ks2">
                        <div class="kslg2"></div><br>
                        <div class="kstx">Миниум<br> затрат</div>
                    </div>
                    <div class="ks3">
                        <div class="kslg3"></div><br>
                        <div class="kstx">Максимально<br>безопасно</div>
                    </div>
                    <div class="btagban">Авторизация</div>
                    </div>
                    
               </div>
            </div>
            <div class="about">
                <div class="aboutonac">О нас</div>
                <div class="blocks">
                    <div class="blocks-1" id="blec">
                        <div class="blocks-logs">10 лет</div>
                        <div class="blocks-text">на рынке</div>
                    </div>
                    <div class="blocks-2">
                        <div class="blocks-logs">100+</div>
                        <div class="blocks-text">Успешных проектов в год</div>
                        <div class="blocks-button">Смотреть примеры</div>
                    </div>
                    <div class="blocks-2">
                        <div class="blocks-logs">30+</div>
                        <div class="blocks-text">Постоянных клиентов</div>
                        <div class="blocks-button">Наши клиенты</div>
                    </div>
                </div>
            </div>
            <div class="about2" id="aboutblock">
                <div class="aboutonac">Наши услуги</div>
                <div class="blocks">
                    <div class="blocks-1" style="background-color: white; border: 3px solid black;" id="bars">
                        <div class="ysl-logo1"></div>
                    </div>
                    <div class="blocks-2" style="background-color: white; border: 3px solid black;"id="bars2">
                        <div class="ysl-logo2"></div>
                    </div>
                    <div class="blocks-2" style="background-color: white; border: 3px solid black;"id="bars3">
                        <div class="ysl-logo3"></div>
                    </div>
                </div>
                <div class="blocks">
                    <div class="blocks-1" style="background-color: white; border: 3px solid black;"id="bars4">
                        <div class="ysl-logo4"></div>
                    </div>
                    <div class="blocks-2" style="background-color: white; border: 3px solid black;"id="bars5">
                        <div class="ysl-logo5"></div>
                    </div>
                    <div class="blocks-2" style="background-color: white; border: 3px solid black;"id="bars6">
                        <div class="ysl-logo6"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="projs">Наши проекты</div>
                <div class="perblock">
                    <div class="linebl">
                        <div class="linebg"></div>
                        <div class="linetx">Перевозка пульпопроводов</div>
                    </div>
                    <div class="line2">
                        <div class="linebg2"></div>
                        <div class="linetx">Перевозка строительной техники</div>
                    </div>
                    <div class="line3">
                        <div class="linebg3"></div>
                        <div class="linetx">Перевозка автомобилей ​</div>
                    </div>
                    <div class="line4">
                        <div class="linebg4"></div>
                        <div class="linetx">Перевозка тягачей Dongfeng</div>
                    </div>
                    
                </div>
                <div class="perblock">
                    <div class="line5">
                        <div class="linebg5"></div>
                        <div class="linetx">Доставка трубошпунта из Китая <br>в г. Большой Камень,<br> Приморский край</div>
                    </div>
                    <div class="line6">
                        <div class="linebg6"></div>
                        <div class="linetx">Дноуглубление в акватории<br> бухты Большой Камень</div>
                    </div>
                    <div class="line7">
                        <div class="linebg7"></div>
                        <div class="linetx">Контейнерные перевозки​</div>
                    </div>
                    <div class="line8">
                        <div class="linebg8"></div>
                        <div class="linetx">Приемопередаточный док</div>
                    </div>
                    
                </div>
            </div>
            <div class="maps">
                <div class="logomaps">Организуем выгодный маршрут</div>
                <div class="razdel">
                    <div class="mapstext">
                        <div class="foryougruz">для перевозки вашего груза</div>
                        <div class="logmaptextlogo">ВНУТРИ РОССИИ И ЗА РУБЕЖОМ</div>
                        <div class="logmaptext">Мы входим в международное объединение компаний Greatway Logistics, имея ресурсы и связи для перевозки ваших грузов во всем мире</div>
                        <div class="logmaptextlogo">ЛЮБЫМ ВИДОМ ТРАНСПОРТА</div>
                        <div class="logmaptext">Свой автопарк с более 30 единицами транспорта, являемся представителями нескольких крупных судовых лини й и благодаря прямым партнерским связям имеем доступ к транспорту всех видов</div>
                        <div class="logmaptextlogo">«ПОД КЛЮЧ»</div>
                        <div class="logmaptext">Наши решения максимально соответствуют Вашей задаче согласно бюджету, временным рамкам, и другим предпочтениям.</div>
                        <div class="logmapbutton">Смтреть все направления</div>

                    </div>
                    <div class="map"></div>
                </div>
            </div>
            <div class="nashpart">Наши партнеры</div>
            <div class="partners">
                <div class="partnersbox" style="background-image: url(logo-sitc.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
                <div class="partnersbox" style="background-image: url(logo-clients-10.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
                <div class="partnersbox"style="background-image: url(logo-clients-9.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
                <div class="partnersbox"style="background-image: url(logo-zhonggu-1.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
                <div class="partnersbox"style="background-image: url(logo-line-1.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
                <div class="partnersbox"style="background-image: url(logo-line-2.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
                <div class="partnersbox"style="background-image: url(logo-line-5.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
                <div class="partnersbox"style="background-image: url(logo-line-6.png);
                background-size: 100% 100%;
                background-position: center; 
                
                background-repeat: no-repeat;"></div>
            </div>
            <div class="vidperevoz">
                <div class="vidperevoztex1">Все виды перевозок</div>
                <div class="vidperevoztex2">Мы предлагаем все виды и способы доставки ваших грузов. Вы можете<br> заказать доставку одним из видов перевозок или составить план доставки,<br> включающий несколько вариантов транспорта — мультимодальные грузоперевозки.</div>

                <div class="vidperevozblock">
                    <div class="borags">
                        <div class="vidblock1" style="background-image: url(avto-perevozki.png);"></div>
                    </div>
                    <div class="borags">
                        <div class="vidblock" style="background-image: url(zheleznodorozhnye-perevozki.png);"></div>
                    </div>
                    <div class="borags">
                        <div class="vidblock"style="background-image: url(avia-perevozki-1.png);"></div>
                    </div>
                    <div class="borags">
                        <div class="vidblock"style="background-image: url(morskie-perevozki.png);"></div>
                    </div>
                    <div class="borags">
                        <div class="vidblock"style="background-image: url(multimodalnye-perevozki.png);"></div>
                    </div>
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
    <script src="mainpage.js">   
    </script>
    <?
    if (isset($_COOKIE['login'])) {
        echo '<script>
        </script>
        <script>
        let vas = document.getElementById("auth")
        let vas2 = document.getElementById("reg")
        vas.remove()
        vas2.remove()
        let nameElement = document.getElementById("name");
        nameElement.innerHTML = "Войти в личный кабинет:<br><br>' . $_COOKIE['login'] . '";
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
    
    
    
    ?>
    
</body>
</html>