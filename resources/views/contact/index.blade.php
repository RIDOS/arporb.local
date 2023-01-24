@extends('layouts.main')

@section('content')
<main class="blog" style="background: url({{ asset("assets/images/bg.jpg") }}) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="container" style="background: white;padding: 1em 3em 1em 3em;">
    <div class="container__fluid" style="padding-bottom: 15em;">
        <div class="container">
            <h3 class="mb-4"><b>Контакты</b></h3>
            <p>ИНН организации: 0274971597</p>
            <p>Юридический адрес: <a target="_blank" href="https://go.2gis.com/z12vk">г. Уфа, Верхнеторговая пл, д 4, помещ 87</a></p>
            <p>Телефон: <a target="_blank" href="tel:+79276355715">+79276355715</a></p>
            <p>Эл. почта: <a target="_blank" href="mailto:mail@arporb.ru">mail@arporb.ru</a></p>
            <p>Социальные сети: </p>
            <p>
                <a target="_blank" href="https://t.me/arporbru">
                    <img src="{{ asset("/assets/images/telegram.svg") }}" width="35" height="35"/>
                </a>
                <a target="_blank" href="https://vk.com/id711636041">
                    <img src="{{ asset("/assets/images/vk.svg") }}" width="44" height="35"/>
                </a>
            </p>
        </div>
        <div class="container">
            <main class=svelte-mmuo2p>
                <p class="svelte-grkrio contacts-annotaion">Если у вас возникли вопросы касательно работы сайта, либо же вы хотите свзяаться с представителем организации, вы можете позвонить на указанный выше номер телефона или отправить сообщение на наш электронный адрес.</p>
                <div class="svelte-grkrio gis-map">
                  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A729f9ac618a3f7dc1923a6222838ecdb2925ff0cd9166d07a541654e8784fedf&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
              </main>
        </div>
    </div>
</div>
</main>
@endsection