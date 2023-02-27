@extends('layouts.main')
@section('title')
@endsection
@section('content')
<div class="contacts_container">
    <div class="contacts">
        <div class="contacts_body">
            <a class="call" href="tel:+375 (29) 676-06-74">
                <div class="contacts_item">
                    <img src="/images/telephone.png">
                    <p>8029-676-06-74</p>
                </div>
            </a>
            <div class="contacts_item">
                <img src="/images/telegram.png">
                <p>8029-676-06-74</p>
            </div>
            <div class="contacts_item">
                <img src="/images/viber.png">
                <p>8029-676-06-74</p>
            </div>
            <div class="contacts_item">
                <img src="/images/mail.png">
                <p>kleymabel@mail.ru</p>
            </div>
            <div class="contacts_item">
                <img src="/images/location.png">
                <p>г. Минск ул. Геологическая 117</p>
            </div>
        </div>
        <div class="socials-block">
            <a href="https://www.instagram.com/kleymabel.by/?ysclid=lecp571qyd956389737">
                <img src="/images/instagram.png">
            </a>
            <a href="https://vk.com/kleymabel?ysclid=lecp6sagsb371636348">
                <img src="/images/vk2.png">
            </a>
        </div>
    </div>
</div>
@endsection