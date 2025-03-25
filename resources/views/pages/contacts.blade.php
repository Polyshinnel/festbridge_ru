@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="contacts-block">
        <div class="contacts-block__text">
            <h1>КОНТАКТЫ</h1>
            <div class="contacts-block__text-warpper">
                <div class="contacts-block__text-warpper-arrow-block">
                    <div class="contacts-block__text-warpper-arrow">
                        <img src="assets/img/arrow-white.svg" alt="">
                    </div>
                    <p>Хотите организовать запоминающийся эвент или яркое культурное мероприятие? Свяжитесь с нами любым удобным способом или заполните форму обратной связи.</p>
                </div>

                <div class="contacts-data">
                    <ul>
                        <li>
                            <p><a href="mailto:{{$contacts['email']}}">MAIL: {{$contacts['email']}}</a></p>
                            <div class="round-selector"></div>
                        </li>
                        <li>
                            <p><a href="tel:{{$contacts['phone']}}">TEL: {{$contacts['phone']}}</a></p>
                            <div class="round-selector"></div>
                        </li>
                        <li>
                            <p>Office: {{$contacts['address'][0]}}</p>
                            <div class="round-selector"></div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <img src="assets/img/contacts-img.webp" alt="">
    </section>
    <!-- /.contacts-block -->

    <section class="contacts-block__mobile">
        <img src="assets/img/contacts-img.webp" alt="" class="contacts-block__mobile-cover">
        <div class="contacts-block__mobile-content">
            <div class="box-container">
                <h2>КОНТАКТЫ</h2>
                <div class="contacts-block__text-warpper">
                    <div class="contacts-block__text-warpper-arrow-block">
                        <div class="contacts-block__text-warpper-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>Хотите организовать запоминающийся эвент или яркое культурное мероприятие? Свяжитесь с нами любым удобным способом или заполните форму обратной связи.</p>
                    </div>

                    <div class="contacts-data">
                        <ul>
                            <li>
                                <p><a href="mailto:{{$contacts['email']}}">MAIL:{{$contacts['email']}}</a></p>
                                <div class="round-selector"></div>
                            </li>
                            <li>
                                <p><a href="tel:{{$contacts['phone']}}">TEL:{{$contacts['phone']}}</a></p>
                                <div class="round-selector"></div>
                            </li>
                            <li>
                                <p>Office: {{$contacts['address'][0]}}</p>
                                <div class="round-selector"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.contacts-block__mobile -->

    <section class="contacts-form-block">
        <div class="box-container">
            <div class="contacts-form-block__wrapper">
                <form class="contacts-form">
                    <h2>остались вопросы?</h2>
                    <p class="subtitle">Заполните форму, и мы вам перезвоним.</p>
                    <div class="contacts-form__controls">
                        <div class="contacts-form__input">
                            <input type="text" name="customer-question" id="customer-question" placeholder="Ваш вопрос">
                            <p class="hint">Поле вопроса не должно быть пустым!</p>
                        </div>
                        <div class="contacts-form__input">
                            <input type="text" name="customer-name" id="customer-name" placeholder="Имя">
                            <p class="hint">Имя должно быть не менее двух символов!</p>
                        </div>
                        <div class="contacts-form__input">
                            <input type="text" name="customer-phone" id="customer-phone" placeholder="Телефон">
                            <p class="hint">Введите корректный телефон</p>
                        </div>
                    </div>
                    <input type="submit" class="send-form" value="Отправить">
                </form>
            </div>
        </div>

        <div class="contacts-form-block__decor-item contacts-form-block__decor-item_left">
            <img src="assets/img/section-decor_black.svg" alt="">
        </div>

        <div class="contacts-form-block__decor-item contacts-form-block__decor-item_right">
            <img src="assets/img/section-decor_black.svg" alt="">
        </div>
    </section>
    <!-- /.contacts-form-block -->
@endsection
