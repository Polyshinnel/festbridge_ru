@extends('layers.layer')
@section('page_title', $pageInfo['page_title'])
@section('page_description', $pageInfo['page_description'])

@section('content')
    <section class="event-banner">
        <div class="box-container">
            <div class="event-banner__text-wrapper">
                <div class="event-banner__text">
                    <h1>ФЕСТИВАЛИ</h1>
                    <div class="event-banner__text-arrow-block">
                        <div class="event-banner__text-arrow">
                            <img src="assets/img/arrow-white.svg" alt="">
                        </div>
                        <p>Сотрудничество с творческими коллективами и музыкантами по всему миру и тесное взаимодействия с государственными органами дают нам возможность организовывать как глобальные международные фестивали, так и локальные культурные мероприятия.</p>
                    </div>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/1.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/1.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/2.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/2.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/3.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/3.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>
            </div>

            <div class="event-banner__img-line">
                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/4.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/4.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">

                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/5.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/5.webp" alt="">
                    </a>
                </div>

                <div class="event-banner__img">
                    <a href="assets/img/festivals/gallery/6.webp" data-fancybox="gallery">
                        <img src="assets/img/festivals/6.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="mobile-img-wrapper">
                <a href="assets/img/festivals/gallery/1.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/1.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/2.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/2.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/3.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/3.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/4.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/4.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/5.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/5.webp" alt="">
                </a>
                <a href="assets/img/festivals/gallery/6.webp" data-fancybox="gallery">
                    <img src="assets/img/festivals/6.webp" alt="">
                </a>
            </div>
        </div>
    </section>
    <!--/event-banner-->

    <section class="base-section event-section-block">
        <img src="assets/img/festivals/banner.webp" alt="" class="section-bg">
        <div class="content">
            <div class="box-container">
                <div class="content__wrapper">
                    <div class="content__title">
                        <h2>Сотрудничаем с творческими коллективами
                            и музыкантами по всему миру</h2>
                    </div>
                </div>
                <!-- /.content__wrapper -->
            </div>
        </div>
        <div class="decor-block">
            <img src="assets/img/section-decor.svg" alt="">
            <img src="assets/img/section-decor.svg" alt="">
        </div>
    </section>
    <!-- /.event-section-block -->

    <section class="event-formats">
        <div class="box-container">
            <div class="event-formats__wrapper">
                <div class="event-formats__text">
                    <h2>ФОРМАТЫ:</h2>
                    <ul>
                        <li>
                            <p>Фестивали</p>
                            <div class="round-selector"></div>
                        </li>

                        <li>
                            <p>Культурные события</p>
                            <div class="round-selector"></div>
                        </li>
                    </ul>
                </div>

                <img src="assets/img/festivals/page-img.webp" alt="">
            </div>
        </div>
    </section>
@endsection
