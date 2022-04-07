@extends('layouts.app')


@section('content')
    <!--========== SLIDER ==========-->
    <section class="main bg-light">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="img/mockup/logo.jpeg" class="d-block mx-lg-auto img-fluid rounded-circle w-50" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-1 fw-bold lh-1 mb-3 ">Дмитрий <br> Соловьев</h1>
                    <p class="lead">PHP разработчик</p>
                    <div class="list-group list-group-horizontal">
                            <div class="mx-2 p-2 rounded-circle social-icon"><a href="https://www.linkedin.com/in/dsoloview" style="color:#515769;" target="_blank"><i class="fa-brands fa-linkedin-in fa-xl"></i></a></div>
                            <div class="mx-2 p-2 rounded-circle social-icon"><a href="https://vk.com/dsoloview" style="color:#515769;" target="_blank"><i class="fa-brands fa-vk fa-xl"></i></a></div>
                            <div class="mx-2 p-2 rounded-circle social-icon"><a href="https://github.com/dsoloview" style="color:#515769;" target="_blank"><i class="fa-brands fa-github fa-xl"></i></a></div>
                            <div class="mx-2 p-2 rounded-circle social-icon"><a href="https://t.me/dsoloview" style="color:#515769;" target="_blank"><i class="fa-brands fa-telegram fa-xl"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="about_title">
                        <h2 class="display-5 fw-bold lh-1 mb-3">Обо мне</h2>
                        <p>Меня зовут Дмитрий Соловьев, я Junior PHP разработчик. Занимаюсь разработкой backend части сайтов на PHP 8 + Laravel 9 + MySQL.</p>
                        <p>Также я работаю с HTML, CSS, Sass и JS</p>
                    </div>
                    <div class="cv pb-3 border-bottom">
                        <a href="{{route('russian_cv')}}" class="btn btn-outline-secondary btn-lg">Russian CV</a>
                        <a href="{{route('english_cv')}}" class="btn btn-outline-secondary btn-lg">English CV</a>
                    </div>
                    <div class="about_technologies mt-3">
                        <h2 class="fw-bold mb-3">Технологии</h2>
                        <div class="d-flex flex-wrap justify-content-around">
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-php fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">PHP</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-laravel fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">Laravel</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-git-alt fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">Git</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-linux fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">Linux</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-css3-alt fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">CSS</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-html5 fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">HTML</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-sass fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">Sass</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-solid fa-database fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">MySQL</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-bootstrap fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">Bootstrap</h4>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fa-brands fa-js fa-4x"></i>
                                <h4 style="margin-top: 0.25em;">JavaScript</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="img/about/laravel.png" class="d-block mx-lg-auto img-fluid w-75" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>

            </div>
        </div>
    </section>

   <section class="projects">
       <div class="album py-5">
           <div class="container">
               <h2 class="pb-2">Проекты</h2>
               <p class=" border-bottom pb-2">Сейчас я активно наполняю свой профиль GitHub и разрабатываю собственные проекты на laravel</p>
               <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                   @if(!empty($projects))
                       @foreach($projects as $project)
                           <x-homepage.project :project="$project" />
                       @endforeach
                   @endif
               </div>
           </div>
       </div>
   </section>


@endsection
