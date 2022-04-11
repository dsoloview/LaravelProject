<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## О проекте

Сайт портфолио на PHP 8 + Laravel 9 + MySQL + Bootstrap 5
Для сайта я пишу простую админку для базового управления и наполнения.

**Цель -** Дать начинающим специалистам простой инструмент, с помощью которого за пару дней можно сделать себе управляемое, наполняемое и кастомизируемое портфолио.
Сейчас в интернете куча макетов вёрстки портфолио, но нет полноценного наполняемого сайта, который можно взять, вылить на хостинг, базово настроить под себя и работать с ним.


[Ссылка на сайт](https://dsoloview.ru/)

## Roadmap
Я планирую развивать этот проект и вот, что будет сделано в ближайшее время:
 - [x] Админка для управления проектами
 - [ ] Опыт работы на главной
 - [ ] Добавление опыта работы через админку
 - [ ] Добавление страницы "Проекты"
 - [ ] Создание страницы блога

## Установка проекта

1. Склонировать репозиторий
2. Настроить файл `.env` из `.env.example' (Задать базу данных)
3. `Composer install` для установки необходимых библиотек
4. `php artisan migrate:fresh --seed` для создания таблиц в БД и наполнения тестовыми данными
5. `php artisan key:generate` для генерации уникального ключа
6. `npm install` и `npm run dev` для установки фронта
7. Сайт готов к работе!
