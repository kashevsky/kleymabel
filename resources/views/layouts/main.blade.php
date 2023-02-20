<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/main.css" />
    <link rel="stylesheet" href="/styles/index.css" />
    <link rel="stylesheet" href="/styles/product.css" />
    <link rel="stylesheet" href="/styles/order.css" />
    <link rel='stylesheet' href='https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css'>
    <link rel='stylesheet' href='https://raw.githack.com/SochavaAG/example-mycode/master/pens/slick-slider/plugins/slick/slick.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="/styles/fancybox.css" media="screen" />
    <script type="text/javascript" src="/js/js_jquery.js"></script> 
    <script type="text/javascript" src="/js/core_ajaxconst.php"></script>
    <script type="text/javascript" src="/js/jquery.selectbox.js"></script>
    <script type="text/javascript" src="/js/js_scripts.js"></script>
    <script type="text/javascript">
    function setBigImage(foto) {
      $("#adpdp14").attr('href', $(foto).parent('.it').children('a').attr('href'));
      document.getElementById("dp14").src = foto.src;
    }
  </script>
    <base href="{{URL('/')}}">
</head>
<body>
    <header>
        <div class="header_container">
            <div class="header_container_line--gray">
                <div class="header_contacts">
                    <div class="header_contacts__item">
                        <img src="/images/phone.svg">
                        <p>8029-676-06-74</p>
                    </div>
                    <div class="header_contacts__item">
                        <img src="/images/email.svg">
                        <p>kleymabel@mail.ru</p>
                    </div>
                </div>
                <div class="header_search">
                    <form action="{{route('search')}}" method="post">
                    @csrf
                    <input class="input_search" name="word">
                    <label for="input_saerch">&nbsp;</label>
                    <input type="submit" value="Поиск" class="search_button">
                    </form>
                </div>
            </div>
            <div class="header_container_line">
                <div class="header_logo">
                    <img src="/images/logo.svg">
                </div>
                <div class="header_nav">
                    <nav>
                        <a href="">Главная</a>
                        <a href="">О нас</a>
                        <a href="">Каталог</a>
                        <a href="">Портфолио</a>
                        <a href="">Доставка</a>
                        <a href="">Оплата</a>
                        <a href="">Контакты</a>
                    </nav>
                </div>
                <div class="header_socials">
                    <a href="https://vk.com/kleymabel?ysclid=lecp6sagsb371636348">
                        <img src="/images/vk.svg">
                    </a>
                    <a href="https://www.instagram.com/kleymabel.by/?ysclid=lecp571qyd956389737">
                        <img src="/images/inst.svg">
                    </a>
                </div>
                <div class="header_line">
                    <img src="/images/line.svg">
                </div>
                <div class="basket">
                    <a href="{{route('basket.show')}}">
                        <img src="/images/basket.svg">
                    </a>
                </div>
            </div>
        </div>
    </header>
 @yield('content')    
    <footer>
        <div class="footer_container">
            <div class="footer_row">
                <div class="logo_column">
                    <img src="/images/logo-white.svg">
                    <div class="copyright">
                        2023 - Клеймабел - изготовление клейм
                    </div>
                </div>
                <div class="socials_column">
                    <a href="https://vk.com/kleymabel?ysclid=lecp6sagsb371636348"><img src="/images/vk-white.svg"></a>
                    <a href="https://www.instagram.com/kleymabel.by/?ysclid=lecp571qyd956389737"><img src="/images/inst-white.svg"></a>
                </div>
                <div class="contacts_column">
                    <p>Тел: 8029-676-06-74</p>
                    <p>Email: kleymabel@mail.ru</p>
                    <p>Адрес: ул. Геологическая 117</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>