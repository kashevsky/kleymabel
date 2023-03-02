<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_descroption')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/main.css" />
    <link rel="stylesheet" href="/styles/index.css" />
    <link rel="stylesheet" href="/styles/product.css" />
    <link rel="stylesheet" href="/styles/order.css" />
    <link rel="stylesheet" href="/styles/normalize.css" />
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
                    <a class="call" href="tel:+375 (29) 676-06-74">
                        <div class="header_contacts__item">
                                <img src="/images/phone.svg">
                                <p>8029-676-06-74</p>
                        </div>
                    </a>
                    <div class="header_contacts__item">
                        <img src="/images/email.svg">
                        <p>kleymabel@mail.ru</p>
                    </div>
                </div>
                <div class="header_search">
                    <form action="{{route('search')}}" method="post">
                    @csrf
                    <div class="input_flex">
                    <input class="input_search" name="word">
                    <label for="input_saerch"></label>
                    <input type="submit" value="Поиск" class="search_button">
                    </div>
                    </form>
                </div>
            </div>
            <div class="header_container_line">
                <div class="burger-menu">
                    <input type="checkbox" id="burger">
                    <label for="burger"></label>
                    <div class="mobile-menu">
                        <div class="nav">
                            <div class="mobile-basket">
                                <a href="{{route('basket.show')}}">
                                    <img src="/images/basket.svg">
                                </a>
                            </div>
                            <hr>
                            <nav>
                                <li><a href="{{route('index')}}">Главная</a></li>
                                <li><a href="#about">О нас</a></li>
                                <li><a href="#catalog">Каталог</a></li>
                                <li><a href="#portfolio">Портфолио</a></li>
                                <li><a href="{{route('delivery')}}">Доставка</a></li>
                                <li><a href="{{route('payment')}}">Оплата</a></li>
                                <li><a href="{{route('contacts')}}">Контакты</a></li>
                            </nav>
                            <hr>
                            <a class="call" href="tel:+375 (29) 676-06-74">
                            <div class="mobile-menu__item">
                                <img src="/images/menu-phone.svg">
                                <p>8029-676-06-74</p>
                            </div>
                            </a>
                            <div class="mobile-menu__item">
                                <img src="/images/menu-email.svg">
                                <p>kleymabel@mail.ru</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="mobile-menu">
        <div class="nav">
            <nav>
                <li><a href="">Главная</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#catalog">Каталог</a></li>
                <li><a href="#portfolio">Портфолио</a></li>
                <li><a href="{{route('delivery')}}">Доставка</a></li>
                <li><a href="{{route('payment')}}">Оплата</a></li>
                <li><a href="{{route('contacts')}}">Контакты</a></li>
            </nav>
        </div>
    </div>
                <a href="{{route('index')}}">
                <div class="header_logo">
                    <img src="/images/logo.svg">
                </div>
                </a>
                <div class="header_nav">
                    <nav>
                        <a href="">Главная</a>
                        <a href="#about">О нас</a>
                        <a href="#catalog">Каталог</a>
                        <a href="#portfolio">Портфолио</a>
                        <a href="{{route('delivery')}}">Доставка</a>
                        <a href="{{route('payment')}}">Оплата</a>
                        <a href="{{route('contacts')}}">Контакты</a>
                    </nav>
                </div>
                <div class="header_icons">
                    <div class="header_socials">
                        {{-- <a href="https://vk.com/kleymabel?ysclid=lecp6sagsb371636348">
                            <img src="/images/vk.svg">
                        </a> --}}
                        <a href="https://www.instagram.com/kleymabel.by/?ysclid=lecp571qyd956389737">
                            <img src="/images/inst.svg">
                        </a>
                    </div>
                    <div class="mobile-phone">
                        <a href="tel:+375 (29) 676-06-74">
                        <img src="/images/m-phone.svg">
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
        </div>
    </header>
    <div class="content_container">
 @yield('content')
    </div>
    <footer>
        <div class="footer_container">
            <div class="footer_row">
                <div class="logo_column">
                    <img src="/images/logo-white.svg">
                    <div class="copyright">
                        2018 - Клеймабел - изготовление клейм
                    </div>
                </div>
                <div class="socials_column">
                    {{-- <a href="https://vk.com/kleymabel?ysclid=lecp6sagsb371636348"><img src="/images/vk-white.svg"></a> --}}
                    <a href="https://www.instagram.com/kleymabel.by/?ysclid=lecp571qyd956389737"><img src="/images/inst-white.svg"></a>
                </div>
                <div class="contacts_column">
                    <p>Тел:&nbsp<span style="color: #fe1f1c;"> 8029-676-06-74</span></p>
                    <p>Email:&nbsp<span style="color: #fe1f1c;"> kleymabel@mail.ru</span></p>
                    <p>Адрес:&nbsp <span style="color: #fe1f1c;"> ул. Геологическая 115</span></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>