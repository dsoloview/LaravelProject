<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## О проекте

Сайт портфолио на PHP 8 + Laravel 9 + MySQL + Bootstrap 5
Для сайта я пишу простую админку для базового управления и наполнения.

## Установка проекта

1. Склонировать репозиторий
2. Настроить файл `.env` из `.env.example' (Задать базу данных)
3. `Composer install` для установки необходимых библиотек
4. `php artisan migrate:fresh --seed` для создания таблиц в БД и наполнения тестовыми данными
5. `php artisan key:generate` для генерации уникального ключа
6. `npm install` и `npm run dev` для установки фронта
7. Сайт готов к работе!
