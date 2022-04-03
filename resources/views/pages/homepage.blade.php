@extends('layouts.app')


@section('content')
    <!--========== SLIDER ==========-->
    <div class="promo-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 sm-margin-b-60">
                    <div class="margin-b-30">
                        <h1 class="promo-block-title">Дмитрий <br/> Соловьев</h1>
                        <p class="promo-block-text">PHP разработчик</p>
                    </div>
                    <ul class="list-inline">
                        <li><a href="https://www.linkedin.com/in/dsoloview" class="social-icons" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://vk.com/dsoloview" class="social-icons" target="_blank"><i class="fa-brands fa-vk"></i></a></li>
                        <li><a href="https://github.com/dsoloview" class="social-icons" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="https://t.me/dsoloview" class="social-icons" target="_blank"><i class="fa-brands fa-telegram"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="promo-block-img-wrap">
                        <img class="promo-block-img img-responsive" src="img/mockup/logo.jpeg" align="Avatar">
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>

    <!--========== PAGE LAYOUT ==========-->
    <!-- About -->
    <div id="about">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-5 sm-margin-b-60">
                    <img class="full-width img-responsive" src="img/about/laravel.png" alt="Image">
                </div>
                <div class="col-sm-7">
                    <div class="section-seperator margin-b-50">
                        <div class="margin-b-50">
                            <div class="margin-b-30">
                                <h2>Обо мне</h2>
                                <p>Меня зовут Дмитрий Соловьев, я Junior PHP разработчик. Занимаюсь разработкой backend части сайтов на PHP 8 + Laravel 9 + MySQL.</p>
                                <p>Также я работаю с HTML, CSS, Sass и JS</p>
                            </div>
                            <a href="{{route('russian_cv')}}" class="btn-theme btn-theme-md btn-default-bg text-uppercase">Russian CV</a>
                            <a href="{{route('english_cv')}}" class="btn-theme btn-theme-md btn-default-bg text-uppercase">English CV</a>
                        </div>
                    </div>

                    <h2>Технологии</h2>
                    <!-- Progress Box -->
                    <div style="display: flex; justify-content: space-between; flex-wrap: wrap">
                    <div style="text-align: center; margin-right: 40px">
                        <i class="fa-brands fa-php fa-4x"></i>
                        <h4 style="margin-top: 0.25em;">PHP</h4>
                    </div>
                        <div style="text-align: center; margin-right: 40px">
                        <i class="fa-brands fa-laravel fa-4x"></i>
                        <h4 style="margin-top: 0.25em;">Laravel</h4>
                    </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-brands fa-git-alt fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">Git</h4>
                        </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-brands fa-linux fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">Linux</h4>
                        </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-brands fa-css3-alt fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">CSS</h4>
                        </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-brands fa-html5 fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">HTML</h4>
                        </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-brands fa-sass fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">Sass</h4>
                        </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-solid fa-database fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">MySQL</h4>
                        </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-brands fa-bootstrap fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">Bootstrap</h4>
                        </div>
                        <div style="text-align: center; margin-right: 40px">
                            <i class="fa-brands fa-js fa-4x"></i>
                            <h4 style="margin-top: 0.25em;">JavaScript</h4>
                        </div>
                    </div>
                    <!-- End Progress Box -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End About -->

    <!-- Work -->
    <div id="work">
        <div class="container content-lg">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Проекты</h2>
                    <p>Сейчас я активно наполняю свой профиль GitHub и разрабатываю собственные проекты на laravel</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                @if(!empty($projects))
               @foreach($projects as $project)
                   <x-homepage.project :project="$project" />
               @endforeach
                    @endif
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Work -->

    <!-- Contact -->
    <div id="contact">
        <div class="bg-color-sky-light">
            <div class="container content-lg">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Контакты</h2>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <div class="col-md-3 col-xs-6 md-margin-b-30">
                        <h4>Город</h4>
                        Москва
                    </div>
                    <div class="col-md-3 col-xs-6 md-margin-b-30">
                        <h4>Телефон</h4>
                        <a href="tel:+79997853256">+7 999 785 32 56</a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <h4>Email</h4>
                        <a href="mailto:dsoloview44@gmail.com">dsoloview44@gmail.com</a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <h4>Сайт</h4>
                        <a href="https://dsoloview.ru/">dsoloview.ru</a>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->
@endsection
